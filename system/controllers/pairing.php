<?php
_admin();
$ui->assign('_title', 'Pairing' . '- ' . $config['CompanyName']);
$ui->assign('_system_menu', 'pairing');

$action = $routes['1'];
$admin = Admin::_info();
$ui->assign('_admin', $admin);

switch ($action) {
    case 'location-odc':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/pairing.js"></script>');
        $name = _post('name');
        if ($name != '') {
            $paginator = Paginator::bootstrap('v_tbl_odc_lokasi', 'nama_odc', '%' . $name . '%');

            if ($paginator == null) {
                $d = ORM::for_table('v_tbl_odc_lokasi')->where_like('nama_odc', '%' . $name . '%');
            } else {
                $d = ORM::for_table('v_tbl_odc_lokasi')->where_like('nama_odc', '%' . $name . '%')
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id_odc')->order_by_asc('id_lokasi')
                    ->find_many();
            }
        } else {
            $paginator = Paginator::bootstrap('v_tbl_odc_lokasi');
            $d = ORM::for_table('v_tbl_odc_lokasi')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id_odc')->order_by_asc('id_lokasi')->find_many();
        }

        $ui->assign('d', $d);
        $ui->assign('paginator', $paginator);

        $ui->display('pairing-location-odc.tpl');
        break;

    case 'add_location_odc':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $d = ORM::for_table('tbl_lokasi')->find_many();
        $c = ORM::for_table('tbl_odc')->find_many();

        $ui->assign('d', $d);
        $ui->assign('c', $c);
        $ui->display('pairing-add-location-odc.tpl');
        break;

    case 'add_location_odc_post':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $idloc = _post('lokasi');
        $idodc = _post('odc');

        $msg = '';

        $d = ORM::for_table('tbl_lokasi')->find_one($idloc);

        if (!$d) {
            $msg .= $_L['ID_Loc_Not_Regist'] . '<br>';
        }

        $c = ORM::for_table('tbl_odc')->find_one($idodc);

        if (!$c) {
            $msg .= $_L['ID_ODC_Not_Regist'] . '<br>';
        }

        $e = ORM::for_table('tbl_odc_lokasi')->where('id_odc', $idodc)->where('id_lokasi', $idloc)->find_one();

        if ($e) {
            $msg .= 'ID ODC ' . $idodc . $_L['With'] . ' ID Location ' . $idloc . ' ' . $_L['Already_Registered'];
        }

        if ($msg == '') {
            $d = ORM::for_table('tbl_odc_lokasi')->create();
            $d->id_odc = $idodc;
            $d->id_lokasi = $idloc;
            $d->save();
            r2(U . 'pairing/location-odc', 's', $_L['Add'] . ' ' . $_L['Location'] . ' - ODC ' . $_L['Success']);
        } else {
            r2(U . 'pairing/location-odc', 'e', $msg);
        }

        $ui->display('pairing-add-location-odc.tpl');
        break;

    case 'edit_location_odc':

        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $idodc = $routes['2'];
        $idloc = $routes['3'];

        $e = ORM::for_table('tbl_odc_lokasi')->where('id_odc', $idodc)->where('id_lokasi', $idloc)->find_one();

        if ($e) {
            $c = ORM::for_table('tbl_lokasi')->find_many();
            $d = ORM::for_table('tbl_odc')->find_many();

            $ui->assign('idodc', $idodc);
            $ui->assign('idloc', $idloc);
            $ui->assign('c', $c);
            $ui->assign('d', $d);
            $ui->assign('e', $e);
            $ui->display('pairing-edit-location-odc.tpl');
        } else {
            r2(U . 'pairing/location-odc', 'e', $_L['Locaction'] . $_L['ODC_NF']);
        }

        break;

    case 'edit_location_odc_post':

        $idlokasiodc = _post('idlokasiodc');

        $idloc = _post('idlokasi');
        $idodc = _post('idodc');

        $idlocnew = _post('lokasi');
        $idodcnew = _post('odc');

        $msg = '';

        if ($idloc == $idlocnew && $idodc == $idodcnew) {
            $msg .= 'Rubah salah satu diantara Location / ODC!';
        }

        if ($idloc != $idlocnew && $idodc != $idodcnew) {
            $msg .= 'Jika keduanya dirubah , lebih baik tambah Location - ODC baru!';
        }

        if ($idlocnew == $idloc && $idodcnew != $idodc) {

            $c = ORM::for_table('tbl_odc')->find_one($idodcnew);

            if (!$c) {
                $msg .= $_L['ID_ODC_Not_Regist'] . '<br>';
            }

            $e = ORM::for_table('tbl_odc_lokasi')->where('id_odc', $idodcnew)->where('id_lokasi', $idloc)->find_one();

            if ($e) {
                $msg .= 'ID ODC ' . $idodcnew . ' ' . $_L['With'] . ' ID Location ' . $idloc . ' ' . $_L['Already_Registered'];
            }

            $f = ORM::for_table('tbl_odc_lokasi')->find_one($idlokasiodc);

            $f->id_odc = $idodcnew;
        } else if ($idlocnew != $idloc && $idodcnew == $idodc) {

            $c = ORM::for_table('tbl_lokasi')->find_one($idlocnew);

            if (!$c) {
                $msg .= $_L['ID_Loc_Not_Regist'] . '<br>';
            }

            $e = ORM::for_table('tbl_odc_lokasi')->where('id_odc', $idodc)->where('id_lokasi', $idlocnew)->find_one();

            if ($e) {
                $msg .= 'ID ODC ' . $idodc . ' ' . $_L['With'] . ' ID Location ' . $idlocnew . ' ' . $_L['Already_Registered'];
            }

            $f = ORM::for_table('tbl_odc_lokasi')->find_one($idlokasiodc);

            $f->id_lokasi = $idlocnew;
        }


        if ($msg == '') {
            $f->save();
            r2(U . 'pairing/location-odc', 's', $_L['Edit_Loc'] . ' - ODC ' . $_L['Success']);
        } else {
            r2(U . 'pairing/edit_location_odc/' . $idodc . '/' . $idloc . '/', 'e', $msg);
        }

        break;

    case 'delete_location_odc_post':
        $idodc = $routes['2'];
        $idloc = $routes['3'];

        $d = ORM::for_table('tbl_odc_lokasi')->use_id_column(array('id_odc', 'id_lokasi'))->where('id_odc', $idodc)->where('id_lokasi', $idloc)->find_one();

        if ($d) {
            $d->delete();
            r2(U . 'pairing/location-odc', 's', $_L['Delete'] . ' ' . $_L['Location'] . ' - ODC ' . $_L['Success']);
        } else {
            r2(U . 'pairing/location-odc', 's', $_L['Delete'] . ' ' . $_L['Location'] . ' - ODC ' . $_L['Failed']);
        }

        break;

    case 'subloc-odp':

        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/pairing.js"></script>');
        $name = _post('name');
        if ($name != '') {
            $paginator = Paginator::bootstrap('v_tbl_odp_sub_lokasi', 'nama_odp', '%' . $name . '%');

            if ($paginator == null) {
                $d = ORM::for_table('v_tbl_odp_sub_lokasi')->where_like('nama_odp', '%' . $name . '%');
            } else {
                $d = ORM::for_table('v_tbl_odp_sub_lokasi')->where_like('nama_odp', '%' . $name . '%')
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id_odp')->order_by_asc('id_sub_lokasi')
                    ->find_many();
            }
        } else {
            $paginator = Paginator::bootstrap('v_tbl_odp_sub_lokasi');
            $d = ORM::for_table('v_tbl_odp_sub_lokasi')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id_odp')->order_by_asc('id_sub_lokasi')->find_many();
        }

        $ui->assign('d', $d);
        $ui->assign('paginator', $paginator);

        $ui->display('pairing-subloc-odp.tpl');
        break;

    case 'add_subloc_odp':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $d = ORM::for_table('tbl_sub_lokasi')->find_many();
        $c = ORM::for_table('tbl_odp')->find_many();

        $ui->assign('d', $d);
        $ui->assign('c', $c);
        $ui->display('pairing-add-subloc-odp.tpl');
        break;

    case 'add_subloc_odp_post':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $idsubloc = _post('sublokasi');
        $idodp = _post('odp');

        $msg = '';

        $d = ORM::for_table('tbl_sub_lokasi')->find_one($idsubloc);

        if (!$d) {
            $msg .= $_L['ID_SubLoc_Not_Regist'] . '<br>';
        }

        $c = ORM::for_table('tbl_odp')->find_one($idodp);

        if (!$c) {
            $msg .= $_L['ID_ODP_Not_Regist'] . '<br>';
        }

        $e = ORM::for_table('tbl_odp_sub_lokasi')->where('id_odp', $idodp)->where('id_sub_lokasi', $idsubloc)->find_one();

        if ($e) {
            $msg .= 'ID ODP ' . $idodp . $_L['With'] . ' ID Location ' . $idsubloc . ' ' . $_L['Already_Registered'];
        }

        if ($msg == '') {
            $d = ORM::for_table('tbl_odp_sub_lokasi')->create();
            $d->id_odp = $idodp;
            $d->id_sub_lokasi = $idsubloc;
            $d->save();
            r2(U . 'pairing/subloc-odp', 's', $_L['Add'] . ' ' . $_L['SubLoc'] . ' - ODP ' . $_L['Success']);
        } else {
            r2(U . 'pairing/subloc-odp', 'e', $msg);
        }

        $ui->display('pairing-add-subloc-odp.tpl');
        break;

    case 'edit_subloc_odp':

        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $idodp = $routes['2'];
        $idsubloc = $routes['3'];

        $e = ORM::for_table('tbl_odp_sub_lokasi')->where('id_odp', $idodp)->where('id_sub_lokasi', $idsubloc)->find_one();

        if ($e) {
            $c = ORM::for_table('tbl_sub_lokasi')->find_many();
            $d = ORM::for_table('tbl_odp')->find_many();

            $ui->assign('idodp', $idodp);
            $ui->assign('idsubloc', $idsubloc);
            $ui->assign('c', $c);
            $ui->assign('d', $d);
            $ui->assign('e', $e);
            $ui->display('pairing-edit-subloc-odp.tpl');
        } else {
            r2(U . 'pairing/subloc-odp', 'e', $_L['SubLoc'] . ' ' . $_L['ODP_NF']);
        }

        break;

    case 'edit_subloc_odp_post':

        $idsublokasiodp = _post('idsublokasiodp');

        $idsubloc = _post('idsublokasi');
        $idodp = _post('idodp');

        $idsublocnew = _post('sublokasi');
        $idodpnew = _post('odp');

        $msg = '';

        if ($idsubloc == $idsublocnew && $idodp == $idodpnew) {
            $msg .= 'Rubah salah satu diantara Sub Location / ODP!';
        }

        if ($idsubloc != $idsublocnew && $idodp != $idodpnew) {
            $msg .= 'Jika keduanya dirubah , lebih baik tambah sub location - odp baru!';
        }

        $f = ORM::for_table('tbl_odp_sub_lokasi')->find_one($idsublokasiodp);

        if ($idsublocnew == $idsubloc && $idodpnew != $idodp) {

            $c = ORM::for_table('tbl_odp')->find_one($idodpnew);

            if (!$c) {
                $msg .= $_L['ID_ODC_Not_Regist'] . '<br>';
            }

            $e = ORM::for_table('tbl_odp_sub_lokasi')->where('id_odp', $idodpnew)->where('id_sub_lokasi', $idsubloc)->find_one();

            if ($e) {
                $msg .= 'ID ODP ' . $idodpnew . ' ' . $_L['With'] . ' ID ' . $_L['SubLoc'] . ' ' . $idsubloc . ' ' . $_L['Already_Registered'];
            }

            $f = ORM::for_table('tbl_odp_sub_lokasi')->find_one($idsublokasiodp);

            $f->id_odp = $idodpnew;
        } else if ($idsublocnew != $idsubloc && $idodpnew == $idodp) {

            $c = ORM::for_table('tbl_sub_lokasi')->find_one($idsublocnew);

            if (!$c) {
                $msg .= $_L['ID_Loc_Not_Regist'] . '<br>';
            }

            $e = ORM::for_table('tbl_odp_sub_lokasi')->where('id_odp', $idodp)->where('id_sub_lokasi', $idsublocnew)->find_one();

            if ($e) {
                $msg .= 'ID ODP ' . $idodp . ' ' . $_L['With'] . ' ID ' . $_L['SubLoc'] . ' ' . $idsublocnew . ' ' . $_L['Already_Registered'];
            }

            $f = ORM::for_table('tbl_odp_sub_lokasi')->find_one($idsublokasiodp);

            $f->id_sub_lokasi = $idsublocnew;
        }

        if ($msg == '') {
            $f->save();
            r2(U . 'pairing/subloc-odp', 's', $_L['Edit_SubLoc'] . ' - ODP ' . $_L['Success']);
        } else {
            r2(U . 'pairing/edit_subloc_odp/' . $idodp . '/' . $idsubloc . '/', 'e', $msg);
        }

        break;

    case 'delete_subloc_odp_post':
        $idodp = $routes['2'];
        $idsubloc = $routes['3'];

        $d = ORM::for_table('tbl_odp_sub_lokasi')->where('id_odp', $idodp)->where('id_sub_lokasi', $idsubloc)->find_one();

        if ($d) {
            $d->delete();
            r2(U . 'pairing/subloc-odp', 's', $_L['Delete'] . ' ' . $_L['SubLoc'] . ' - ODP ' . $_L['Success']);
        } else {
            r2(U . 'pairing/subloc-odc', 's', $_L['Delete'] . ' ' . $_L['SubLoc'] . ' - ODP ' . $_L['Failed']);
        }

        break;

    default:
        echo 'Fitur belum tersedia';
}
