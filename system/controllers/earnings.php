<?php
_admin();
$ui->assign('_title', 'Earnings' . '- ' . $config['CompanyName']);
$ui->assign('_system_menu', 'earnings');
$act = $routes['1'];
$admin = Admin::_info();
$ui->assign('_admin', $admin);

$keyword = '';
$action = '';

if (strpos($act, ' ') !== false) {

    $actionNew = explode(' ', $act);

    for ($i = 0; $i < count($actionNew); $i++) {
        if ($i == 0) {
            $action = $actionNew[$i];
        } else {
            $keyword .= ($i !== count($actionNew) - 1) ? $actionNew[$i] . ' ' : $actionNew[$i];
        }
    }
} else {
    $action = $act;
}

switch ($action) {
    case 'transaction':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $display = 'transaction';

        $ui->assign('fetchApi', '<script src="' . $_theme . '/scripts/callbackAqsha.js"></script>');
        $ui->assign('display', $display);
        $ui->display('earnings.tpl');
        break;

    case 'list':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $display = 'list';

        if ($keyword != '') {
            $paginator = Paginator::bootstrap('v_revenue', 'nama', '%' . $keyword . '%');

            if ($paginator != null) {
                $d = ORM::for_table('v_revenue')->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')->where_like('nama', '%' . $keyword . '%')->find_array();
            } else {
                $d = ORM::for_table('v_revenue')->where_like('nama', '%' . $keyword . '%')->find_array();
            }
        } else {
            $paginator = Paginator::bootstrap('v_revenue');

            if ($paginator != null) {
                $d = ORM::for_table('v_revenue')->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')->find_array();
            } else {
                $d = ORM::for_table('v_revenue')->find_array();
            }
        }

        $container = [];
        $no = 1;

        foreach ($d as $key => $val) {
            $val['tgl_revenue'] = explode('-', $val['tgl_revenue']);
            $val['tgl_revenue'] = $val['tgl_revenue'][2] . '-' . $val['tgl_revenue'][1] . '-' . $val['tgl_revenue'][0];

            $val['revenue'] = rupiah($val['revenue']);

            $val += ['no' => $no++];
            $container[] = $val;
        }

        $ui->assign('paginator', $paginator);
        $ui->assign('revenue', $container);
        $ui->assign('display', $display);
        $ui->display('earnings.tpl');
        break;

    case 'add':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $tanggal = _post('date');

        $revenue = explode(' ', _post('total'));
        $revenue = $revenue['1'];
        $revenue = explode('.', $revenue);
        $revenue = $revenue['0'] . $revenue['1'];

        $tanggal = explode('-', $tanggal);

        $bulan = '';

        if (strlen($tanggal[1]) == 2) {
            $month = str_split($tanggal[1]);
            if ($month[0] === '0') {
                $bulan = $month[1];
            } else {
                $bulan = $month[0] . $month[1];
            }
        }

        $idodp = _post('idodp');
        $portodp = _post('port');
        $day = $tanggal[2];
        $year = $tanggal[0];
        $date = _post('date');
        $no_inet = _post('internet');

        if ($idodp == '') $idodp = null;
        if ($portodp == '') $portodp = null;

        $msg = '';

        // $d = ORM::for_table('tbl_odp')->where_id_is($idreg)->find_one();
        // if (!$d) {
        //     $msg .= $_L['ID_ODP_Not_Regist'] . '<br>';
        // }

        // $d = ORM::for_table('tbl_lokasi')->where('nama', $name)->find_one();
        // if ($d) {
        //     $msg .= $_L['Name_Already_Exist'] . '<br>';
        // }

        if ($msg == '') {
            $d = ORM::for_table('tbl_revenue_port')->create();
            $d->id_odp = $idodp;
            $d->port_odp = $portodp;
            $d->tanggal = $date;
            $d->day = $day;
            $d->month = $bulan;
            $d->year = $year;
            $d->revenue = $revenue;
            $d->no_inet = $no_inet;
            $d->save();

            r2(U . 'earnings/list', 's', $_L['Add_Trans_Success']);
        } else {
            r2(U . 'earnings/transaction', 'e', $msg);
        }

        break;
    default:
        $ui->assign('404.tpl');
        break;
}
