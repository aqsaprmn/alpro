<?php
_admin();
$admin = Admin::_info();
$ui->assign('_title', 'Revenue - TREG');
$ui->assign('_admin', $admin);
$act = $routes['1'];
$i = 1;
$ui->assign('i', $i);
if ($admin['user_type'] != 'Admin' and $admin['user_type'] != 'Sales') {
    r2(U . "home", 'e', $_L['Do_Not_Access']);
}

switch ($act) {
    case 'treg':

        $treg = ORM::for_table('tbl_region')->find_many();

        $paginator = Paginator::bootstrap('tbl_region');

        $treg = ORM::for_table('tbl_region')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();

        $ui->assign('paginator', $paginator);
        $ui->assign('treg', $treg);

        $ui->assign('title', 'TREG');
        $ui->display('revenue.tpl');

        break;

    case 'lokasi':
        $idTreg = $routes['2'];

        $treg = ORM::for_table('tbl_region')->where('id', $idTreg)->find_one();

        $paginator = Paginator::bootstrap('tbl_lokasi', 'id_region', $idTreg);

        $loc = ORM::for_table('tbl_lokasi')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();

        $ui->assign('paginator', $paginator);
        $ui->assign('loc', $loc);
        $ui->assign('treg', $treg);
        $ui->assign('title', 'Lokasi');
        $ui->display('revenue.tpl');
        break;
}
