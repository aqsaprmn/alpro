<?php
_admin();
$ui->assign('_title', $_L['Dashboard'] . ' - ' . $config['CompanyName']);
$admin = Admin::_info();
$ui->assign('_admin', $admin);

if ($admin['user_type'] != 'Admin' and $admin['user_type'] != 'Sales') {
    r2(U . "home", 'e', $_L['Do_Not_Access']);
}

$fdate = date('Y-m-01');
$tdate = date('Y-m-t');
//first day of month
$first_day_month = date('Y-m-01');
$mdate = date('Y-m-d');
$month_n = date('n');

// $iday = ORM::for_table('tbl_transactions')->where('recharged_on', $mdate)->sum('price');
// if ($iday == '') {
//     $iday = '0.00';
// }
// $ui->assign('iday', $iday);

// $imonth = ORM::for_table('tbl_transactions')->where_gte('recharged_on', $first_day_month)->where_lte('recharged_on', $mdate)->sum('price');
// if ($imonth == '') {
//     $imonth = '0.00';
// }
// $ui->assign('imonth', $imonth);

// $u_act = ORM::for_table('tbl_user_recharges')->where('status', 'on')->count();
// if ($u_act == '') {
//     $u_act = '0';
// }
// $ui->assign('u_act', $u_act);

// $u_all = ORM::for_table('tbl_user_recharges')->count();
// if ($u_all == '') {
//     $u_all = '0';
// }
// $ui->assign('u_all', $u_all);
// //user expire
// $expire = ORM::for_table('tbl_user_recharges')->where('expiration', $mdate)->order_by_desc('id')->find_many();
// $ui->assign('expire', $expire);

//activity log
$dlog = ORM::for_table('tbl_logs')->limit(5)->order_by_desc('id')->find_many();
$ui->assign('dlog', $dlog);
$log = ORM::for_table('tbl_logs')->count();
$ui->assign('log', $log);

// Count stock
// $tmp = $v = ORM::for_table('tbl_plans')->select('id')->select('name_plan')->find_many();
// $plans = array();
// $stocks = array("used" => 0, "unused" => 0);
// $n = 0;
// foreach ($tmp as $plan) {
//     $plans[$n]['name_plan'] = $plan['name_plan'];
//     $plans[$n]['unused'] = ORM::for_table('tbl_voucher')
//         ->where('id_plan', $plan['id'])
//         ->where('status', 0)->count();;
//     $stocks["unused"] += $plans[$n]['unused'];
//     $plans[$n]['used'] = ORM::for_table('tbl_voucher')
//         ->where('id_plan', $plan['id'])
//         ->where('status', 1)->count();;
//     $stocks["used"] += $plans[$n]['used'];
//     $n++;
// }

//Count Card Dashboard
$rev = ORM::for_table('v_revenue_detail')->select_expr('sum(revenue)', 'total_revenue')->find_one();
$rev = rupiah($rev['total_revenue']);

$odc = ORM::for_table('tbl_odc')->find_many()->count();
$odp = ORM::for_table('tbl_odp')->find_many()->count();
$cus = ORM::for_table('tbl_pelanggan')->find_many()->count();

// Region
$reg = ORM::for_table('tbl_region')->find_many();

$ui->assign('fetchApi', '<script src="' . $_theme . '/scripts/dashAqsha.js"></script><script src="ui/lib/js/chart/package/dist/chart.min.js"');
$ui->assign('reg', $reg);
$ui->assign('rev', $rev);
$ui->assign('odc', $odc);
$ui->assign('odp', $odp);
$ui->assign('cus', $cus);

// $ui->assign('stocks', $stocks);
// $ui->assign('plans', $plans);

$ui->display('dashboard-asset.tpl');
