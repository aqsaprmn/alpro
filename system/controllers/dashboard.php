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

//activity log
$dlog = ORM::for_table('tbl_logs')->limit(5)->order_by_desc('id')->find_many();
$ui->assign('dlog', $dlog);
$log = ORM::for_table('tbl_logs')->count();
$ui->assign('log', $log);

//Count Card Dashboard
$rev = ORM::for_table('v_revenue_detail')->select_expr('sum(revenue)', 'total_revenue')->find_one();
$rev = $rev['total_revenue'] == null ? '0' : $rev['total_revenue'];
$rev = rupiah($rev);

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
