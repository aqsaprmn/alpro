<?php
_admin();

$idreg = $routes['1'];
$idloc = $routes['2'];
$title = ORM::for_table('tbl_region')->where('id', $idreg)->find_one();
$loc = ORM::for_table('tbl_lokasi')->where('id', $idloc)->find_one();
$ui->assign('_title', $title['nama'] . ' - ' . $config['CompanyName']);
$ui->assign('_system_menu', $title['nama']);

$admin = Admin::_info();
$ui->assign('_admin', $admin);

if ($admin['user_type'] != 'Admin') {
    r2(U . 'dashboard', 'e', $_L['Do_NotAccess']);
}

$ui->assign('idreg', $idreg);
$ui->assign('idloc', $idloc);

if (isset($routes['3']) && $routes['3'] != '') {
    $idodp = $routes['3'];
    $odp = ORM::for_table('tbl_odp')->where_id_is($idodp)->find_one();
    $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/region.js"></script>');
    $ui->assign('namaodp', $odp['nama']);
    $ui->assign('idodp', $idodp);

    $keyword = _post('keyword');

    if ($keyword != '') {
        $odc = ORM::for_table('tbl_odc')->where_id_is($odp['id_odc'])->find_one();
        $port = ORM::for_table('v_002_port_odp')->where('id_odp', $idodp)->where_any_is(array(
            array('port_odp' => '%' . $keyword . '%'),
            array('nama' => '%' . $keyword . '%'),
            array('no_inet' => '%' . $keyword . '%'),
            array('status_port_odp' => '%' . $keyword . '%'),
            array('lat' => '%' . $keyword . '%'),
            array('lon' => '%' . $keyword . '%')
        ), 'LIKE')->order_by_asc('port_odp')->find_many();

        // $count = count($port);

        // for ($i = 0; $i < $count; $i++) {
        //     var_dump($port[$i]);
        // }

        // die;

        $ui->assign('title', $title['nama'] . ' - ' . $loc['nama'] . ' - ' . $odc['nama'] . ' - ' . $odp['nama']);
        $ui->assign('port', $port);
        $ui->display('region-odp-port.tpl');
    } else if (isset($routes['4']) && $routes['4'] != '') {
        $action = $routes['4'];

        if ($action == 'add_odp_port') {

            $odp = ORM::for_table('tbl_odp')->where_id_is($idodp)->find_one();

            $port = ORM::for_table('tbl_port_odp')->select('port_odp')->where('id_odp', $idodp)->find_many();
            $count = count($port);
            $portAda = [];
            for ($j = 0; $j < $count; $j++) {
                $portAda[] = $port[$j]['port_odp'];
            }
            $portSisa = [];
            for ($i = 1; $i <= $odp['kapasitas']; $i++) {
                if (!in_array($i, $portAda)) {
                    $portSisa[] = $i;
                }
            }

            $ui->assign('portsisa', $portSisa);
            $ui->assign('fetchApi', '<script src="' . $_theme . '/scripts/callbackAqsha.js"></script>');
            $ui->display('region-add-odp-port.tpl');
        } else if ($action == 'add_odp_port_post') {

            $portodp = _post('portodp');
            $idcustomer = _post('idcustomer');
            $internetnumb = _post('internetnumb');
            $status = _post('status');
            $rev = '';
            $revenue = _post('revenue');
            $revenue = explode('.', $revenue);

            for ($i = 1; $i < count($revenue); $i++) {
                $rev .= trim($revenue[$i]);
            }
            $rev = explode(',', $rev);
            $rev = implode('.', $rev);

            $lat = (float)_post('lat');
            $lon = (float)_post('lon');

            $msg = '';

            $d = ORM::for_table('tbl_odp')->where_id_is($idodp)->find_one();
            if (!$d) {
                $msg .= $_L['ID_ODP_Not_Regist'] . '<br>';
            }

            if ($internetnumb != '') {
                $d = ORM::for_table('tbl_port_odp')->select('no_inet')->find_many();
                $count = ORM::for_table('tbl_port_odp')->select('no_inet')->find_many()->count();

                for ($i = 0; $i < $count; $i++) {
                    $data = $d[$i];
                    if ($data['no_inet'] == $internetnumb) {
                        $msg .= $_L['No_Inet_Already_Exist'] . '<br>';
                    }
                }
            }

            $d = ORM::for_table('tbl_port_odp')->where('id_odp', $idodp)->where('port_odp', $portodp)->find_one();
            if ($d) {
                $msg .= $_L['Port_Already']  . ' - ' . $odp['nama'] . '<br>';
            }

            if ($idcustomer != '') {
                $d =  ORM::for_table('tbl_pelanggan')->where_id_is($idcustomer)->find_one();
                if (!$d) {
                    $msg .= $_L['ID_Customer_Not_Regist'] . '<br>';
                }
            }

            if ($revenue == '') $revenue = 0.00;
            if ($portodp == '') $portodp = null;
            if ($idcustomer == '') $idcustomer = null;
            if ($internetnumb == '') $internetnumb = null;
            if ($lat == '') $lat = null;
            if ($lon == '') $lon = null;

            if ($msg == '') {
                $d = ORM::for_table('tbl_port_odp')->create();
                $d->id_odp = $idodp;
                $d->port_odp = $portodp;
                $d->id_pelanggan = $idcustomer;
                $d->no_inet = $internetnumb;
                $d->status_port_odp = $status;
                $d->lat = $lat;
                $d->lon = $lon;
                $d->revenue = $rev;
                $d->save();
                r2(U . 'region/' . $idreg . '/' . $idloc . '/' . $idodp, 's', $_L['Add_Port_Success']);
            } else {
                r2(U . 'region/' . $idreg . '/' . $idloc . '/' . $idodp, 'e', $msg);
            }
        } else if ($action == 'edit_odp_port') {

            $idport = $routes[5];

            $d = ORM::for_table('tbl_port_odp')->where_id_is($idport)->find_one();

            $revenue = $d->revenue;
            $revenue = explode('.', $revenue);
            $prefix = 'Rp. ';
            $sisa = strlen($revenue[0]) % 3;
            $rupiah = substr($revenue[0], 0, $sisa);
            preg_match_all("/\d{3}/i", substr($revenue[0], 0), $ribuan);

            if (!empty($ribuan[0])) {
                $separator = ($sisa) ? '.' : '';
                $rupiah .= $separator . join('.', $ribuan[0]);
            }

            $rupiah = ($revenue[1] != '' && $rupiah != 0) ? $rupiah . ',' . $revenue[1] : $rupiah;
            $rupiah = $prefix . $rupiah;

            $ui->assign('fetchApi', '<script src="' . $_theme . '/scripts/callbackAqsha.js"></script>');
            $ui->assign('port', $d);
            $ui->assign('revenue', $rupiah);
            $ui->display('region-edit-odp-port.tpl');
        } else if ($action == 'edit_odp_port_post') {

            $idreg = $routes[1];
            $idloc = $routes[2];
            $idodp = $routes[3];

            $idport = _post('idport');
            $idcustomer = _post('idcustomer');
            $internetnumb = _post('internetnumb');
            $status = _post('status');

            $rev = '';
            $revenue = _post('revenue');
            $revenue = explode('.', $revenue);
            for ($i = 1; $i < count($revenue); $i++) {
                $rev .= trim($revenue[$i]);
            }

            $rev = explode(',', $rev);
            $rev = implode('.', $rev);

            $lat = _post('lat');
            $lon = _post('lon');

            $msg = '';

            if ($idcustomer != '') {
                $d =  ORM::for_table('tbl_pelanggan')->where_id_is($idcustomer)->find_one();
                if (!$d) {
                    $msg .= $_L['ID_Customer_Not_Regist'] . '<br>';
                }
            }

            if ($internetnumb != '') {
                $d = ORM::for_table('tbl_port_odp')->select('no_inet')->where_not_equal('id', $idport)->find_many();
                $count = ORM::for_table('tbl_port_odp')->select('no_inet')->where_not_equal('id', $idport)->find_many()->count();

                for ($i = 0; $i < $count; $i++) {
                    $data = $d[$i];
                    if ($data['no_inet'] == $internetnumb) {
                        $msg .= $_L['No_Inet_Already_Exist'] . '<br>';
                    }
                }
            }

            if ($idcustomer == '') $idcustomer = null;
            if ($internetnumb == '') $internetnumb = null;
            if ($revenue == '') $revenue = 0.00;
            if ($lat == '') $lat = null;
            if ($lon == '') $lon = null;

            $d = ORM::for_table('tbl_port_odp')->where_id_is($idport)->find_one();

            if ($msg == '') {
                $d->id_pelanggan = $idcustomer;
                $d->no_inet = $internetnumb;
                $d->status_port_odp = $status;
                $d->lat = $lat;
                $d->lon = $lon;
                $d->revenue = $rev;
                $d->save();
                r2(U . 'region/' . $idreg . '/' . $idloc . '/' . $idodp, 's', $_L['Edit_Port_Success']);
            } else {
                r2(U . 'region/' . $idreg . '/' . $idloc . '/' . $idodp . '/edit_odp_port' . '/' . $idport, 'e', $msg);
            }
        } else if ($action == 'delete_odp_port_post') {

            $idreg = $routes[1];
            $idloc = $routes[2];
            $idodp = $routes[3];
            $idport = $routes[5];

            $d = ORM::for_table('tbl_port_odp')->where('id', $idport)->find_one();
            if ($d) {
                $d->delete();
                r2(U . 'region/' . $idreg . '/' . $idloc . '/' . $idodp, 's', $_L['Delete_Port_Success']);
            } else {
                r2(U . 'region/' . $idreg . '/' . $idloc . '/' . $idodp, 'e', $_L['Delete_Port_Failed']);
            }
        } else {
        }
    } else {

        $odc = ORM::for_table('tbl_odc')->where_id_is($odp['id_odc'])->find_one();
        $port = ORM::for_table('v_002_port_odp')->where('id_odp', $idodp)->order_by_asc('port_odp')->find_many();

        $ui->assign('title', $title['nama'] . ' - ' . $loc['nama'] . ' - ' . $odc['nama'] . ' - ' . $odp['nama']);
        $ui->assign('port', $port);
        $ui->display('region-odp-port.tpl');
    }
} else {
    $ui->assign('title', $title['nama'] . ' - ' . $loc['nama']);

    $name = _post('name');

    if ($name != '') {

        $odc = ORM::for_table('v_tbl_odc_lokasi')->where('id_lokasi', $idloc)->where_like('nama_odc', '%' . $name . '%')->order_by_desc('id')->find_many();

        $countodc = ORM::for_table('v_tbl_odc_lokasi')->where('id_lokasi', $idloc)->where_like('nama_odc', '%' . $name . '%')->order_by_asc('id')->find_many()->count();

        $idodc = [];
        for ($i = 0; $i < $countodc; $i++) {
            $idodc[] = $odc[$i]['id_odc'];
        }

        if (is_array($idodc) && count($idodc) > 0) {
            $odp = ORM::for_table('tbl_odp')->where_in('id_odc', $idodc)->order_by_asc('id')->find_many();

            $ui->assign('odp', $odp);
        } else {
            $msg = $_L['Data_NA'];
            $ui->assign('msg', $msg);
        }
    } else {
        $odc = ORM::for_table('v_tbl_odc_lokasi')->where('id_lokasi', $idloc)->order_by_desc('id')->find_many();

        $countodc = ORM::for_table('v_tbl_odc_lokasi')->where('id_lokasi', $idloc)->order_by_asc('id')->find_many()->count();

        $idodc = [];
        for ($i = 0; $i < $countodc; $i++) {
            $idodc[] = $odc[$i]['id_odc'];
        }

        if (is_array($idodc) && count($idodc) > 0) {
            $odp = ORM::for_table('tbl_odp')->where_in('id_odc', $idodc)->order_by_asc('id')->find_many();
            $countodp = count($odp);

            $idodp = [];
            for ($i = 0; $i < $countodp; $i++) {
                $idodp[] = $odp[$i]['id'];
            }

            if (is_array($idodp) && count($idodp) > 0) {
                $portodpsisa = [];

                for ($i = 0; $i < count($idodp); $i++) {
                    $odpin = ORM::for_table('tbl_odp')->where_id_is($idodp[$i])->find_one();
                    $portodp = ORM::for_table('tbl_port_odp')->where('id_odp', $idodp[$i])->order_by_asc('id')->find_array();
                    $portodpsisa[] = [
                        'idodp' => $idodp[$i],
                        'portsisa' => $odpin['kapasitas'] - count($portodp)
                    ];
                }

                $ui->assign('portodpsisa', $portodpsisa);
            }

            $ui->assign('odp', $odp);
        } else {
            $msg = $_L['Data_NA'];
            $ui->assign('msg', $msg);
        }
    }

    $ui->assign('odc', $odc);
    $ui->display('region.tpl');
}
