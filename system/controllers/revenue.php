<?php
_admin();
$admin = Admin::_info();
$ui->assign('_title', 'Revenue - TREG');
$ui->assign('_admin', $admin);
$action = explode('_', $routes['1']);
$act = $action[0];
$i = 1;
$ui->assign('i', $i);
if ($admin['user_type'] != 'Admin' && $admin['user_type'] != 'Sales') {
    r2(U . "home", 'e', $_L['Do_Not_Access']);
}

switch ($act) {
    case 'treg':

        if (strpos($action[1], ' ') !== FALSE) {
            $dataKey = explode(' ', $action[1]);

            $paginator = Paginator::bootstrap('tbl_region', 'nama', '%' . $dataKey[1] . '%');

            if ($paginator == NULL) {
                $treg = ORM::for_table('tbl_region')->where_like('nama', '%' . $dataKey[1] . '%')->find_many();
                $msg = 'Data Tidak Ada';
                $ui->assign('msg', $msg);
            } else {
                $treg = ORM::for_table('tbl_region')->where_like('nama', '%' . $dataKey[1] . '%')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();
            }
        } else {
            $paginator = Paginator::bootstrap('tbl_region');
            if ($paginator == NULL) {
                $treg = ORM::for_table('tbl_region')->group_by('nama_region')->find_many();
                $msg = 'Data Tidak Ada';
                $ui->assign('msg', $msg);
            } else {
                $treg = ORM::for_table('tbl_region')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();
            }
        }

        $ui->assign('paginator', $paginator);
        $ui->assign('treg', $treg);

        $ui->assign('title', 'TREG');
        $ui->display('revenue.tpl');

        break;

    case 'lokasi':
        $idTreg = $action[1];

        $treg = ORM::for_table('tbl_region')->where('id', $idTreg)->find_one();

        if (strpos($action[1], ' ') !== FALSE) {
            $dataKey = explode(' ', $action[1]);

            $paginator = Paginator::bootstrap('tbl_lokasi', 'id_region', $idTreg, 'nama', '%' . $dataKey[1] . '%');

            if ($paginator == NULL) {
                $loc = ORM::for_table('tbl_lokasi')->where('id_region', $idTreg)->where_like('nama', '%' . $dataKey[1] . '%')->find_many();
                $msg = 'Data Tidak Ada';
                $ui->assign('msg', $msg);
            } else {
                $loc = ORM::for_table('tbl_lokasi')->where('id_region', $idTreg)->where_like('nama', '%' . $dataKey[1] . '%')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();
            }
        } else {
            $paginator = Paginator::bootstrap('tbl_lokasi', 'id_region', $idTreg);

            if ($paginator == NULL) {
                $loc = ORM::for_table('tbl_lokasi')->where('id_region', $idTreg)->find_many();
                $msg = 'Data Tidak Ada';
                $ui->assign('msg', $msg);
            } else {
                $loc = ORM::for_table('tbl_lokasi')->where('id_region', $idTreg)->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();
            }
        }

        $ui->assign('paginator', $paginator);
        $ui->assign('loc', $loc);
        $ui->assign('treg', $treg);
        $ui->assign('title', 'Lokasi');
        $ui->display('revenue.tpl');
        break;

    case 'sublok':
        $idLoc = $action[1];

        $loc = ORM::for_table('tbl_lokasi')->where('id', $idLoc)->find_one();

        $reg = ORM::for_table('tbl_region')->where('id', $loc['id_region'])->find_one();

        if (strpos($action[1], ' ') !== FALSE) {
            $dataKey = explode(' ', $action[1]);

            $paginator = Paginator::bootstrap('tbl_sub_lokasi', 'id_lokasi', $idLoc, 'nama', '%' . $dataKey[1] . '%');
            if ($paginator == NULL) {
                $subloc = ORM::for_table('tbl_sub_lokasi')->where('id_lokasi', $idLoc)->where_like('nama', '%' . $dataKey[1] . '%')->find_many();
                $msg = 'Data Tidak Ada';
                $ui->assign('msg', $msg);
            } else {
                $subloc = ORM::for_table('tbl_sub_lokasi')->where('id_lokasi', $idLoc)->where_like('nama', '%' . $dataKey[1] . '%')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();
            }
        } else {
            $paginator = Paginator::bootstrap('tbl_sub_lokasi', 'id_lokasi', $idLoc);
            if ($paginator == NULL) {
                $subloc = ORM::for_table('tbl_sub_lokasi')->where('id_lokasi', $idLoc)->find_many();
                $msg = 'Data Tidak Ada';
                $ui->assign('msg', $msg);
            } else {
                $subloc = ORM::for_table('tbl_sub_lokasi')->where('id_lokasi', $idLoc)->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();
            }
        }


        $ui->assign('paginator', $paginator);
        $ui->assign('loc', $loc);
        $ui->assign('reg', $reg);
        $ui->assign('subloc', $subloc);
        $ui->assign('title', 'SubLokasi');
        $ui->display('revenue.tpl');
        break;

    default:
        echo 'Fitur belum tersedia';
}
