<?php
_admin();
$ui->assign('_title', 'Master' . '- ' . $config['CompanyName']);
$ui->assign('_system_menu', 'master');
$act = $routes['1'];
$admin = Admin::_info();
$ui->assign('_admin', $admin);

$reg = ORM::for_table('tbl_region')->find_many();

$countReg = count($reg);

$loc = ORM::for_table('tbl_lokasi')->find_many();
$countLoc = count($loc);


if (strpos($act, ' ') !== false) {
    $actionNew = explode(' ', $act);

    $keyword = '';
    for ($i = 0; $i < count($actionNew); $i++) {
        if ($i == 0) {
            $action = $actionNew[$i];
        } else {
            $keyword .= ($i !== count($actionNew) - 1) ? $actionNew[$i] . ' ' : $actionNew[$i];
        }
    }

    for ($i = 0; $i < $countReg; $i++) {
        if ($action === 'vloc_region' . $reg[$i]['id']) {
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $idreg = $reg[$i]['id'];

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_lokasi', 'id_region', $idreg, 'nama', '%' . $keyword . '%');

            if ($paginator == null) {
                $d = ORM::for_table('tbl_lokasi')->where('id_region', $idreg)
                    ->where_like('nama', '%' . $keyword . '%')->find_many();

                $msg = $_L['Data_NA'];
                $ui->assign('msg', $msg);
            } else {
                $d = ORM::for_table('tbl_lokasi')->where('id_region', $idreg)
                    ->where_like('nama', '%' . $keyword . '%')
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')
                    ->find_many();

                $ui->assign('paginator', $paginator);
            }

            $ui->assign('idreg', $reg[$i]['id']);
            $ui->assign('namareg', $reg[$i]['nama']);
            $ui->assign('d', $d);
            $ui->display('master-location.tpl');
        }
    }

    for ($i = 0; $i < $countLoc; $i++) {
        if ($action  === 'vsubloc_loc' . $loc[$i]['id']) {
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $idloc = $loc[$i]['id'];

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_sub_lokasi', 'id_lokasi', $idloc, 'nama', '%' . $keyword . '%');

            if ($paginator == null) {
                $d = ORM::for_table('tbl_sub_lokasi')->where('id_lokasi', $idloc)
                    ->where_like('nama', '%' . $keyword . '%')->order_by_asc('id')->find_many();

                $msg = $_L['Data_NA'];
                $ui->assign('msg', $msg);
            } else {
                $d = ORM::for_table('tbl_sub_lokasi')->where('id_lokasi', $idloc)
                    ->where_like('nama', '%' . $keyword . '%')
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')
                    ->find_many();

                $ui->assign('paginator', $paginator);
            }

            $ui->assign('idloc', $loc[$i]['id']);
            $ui->assign('namaloc', $loc[$i]['nama']);
            $ui->assign('d', $d);
            $ui->display('master-subloc.tpl');
        }
    }

    switch ($action) {
        case 'region':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_region', 'nama', '%' . $keyword . '%');
            if ($paginator === null) {
                $d = ORM::for_table('tbl_region')
                    ->where_like('nama', '%' . $keyword . '%');

                $msg = $_L['Data_NA'];
                $ui->assign('msg', $msg);
            } else {
                $d = ORM::for_table('tbl_region')
                    ->where_like('nama', '%' . $keyword . '%')
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')
                    ->find_many();


                $ui->assign('paginator', $paginator);
            }

            $ui->assign('d', $d);
            $ui->display('master-region.tpl');

            break;
        case 'location':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_lokasi', 'nama', '%' . $keyword . '%');

            if ($paginator === null) {
                $d = ORM::for_table('tbl_lokasi')
                    ->where_like('nama', '%' . $keyword . '%');

                $msg = $_L['Data_NA'];
                $ui->assign('msg', $msg);
            } else {
                $d = ORM::for_table('tbl_lokasi')
                    ->where_like('nama', '%' . $keyword . '%')
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')
                    ->find_many();


                $ui->assign('paginator', $paginator);
            }

            $ui->assign('d', $d);
            $ui->display('master-location.tpl');
            break;
        case 'sublocation':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_sub_lokasi', 'nama', '%' . $keyword . '%');

            if ($paginator == null) {
                $d = ORM::for_table('tbl_sub_lokasi')
                    ->where_like('nama', '%' . $keyword . '%');

                $msg = $_L['Data_NA'];
                $ui->assign('msg', $msg);
            } else {
                $d = ORM::for_table('tbl_sub_lokasi')
                    ->where_like('nama', '%' . $keyword . '%')
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')
                    ->find_many();

                $ui->assign('paginator', $paginator);
            }

            $ui->assign('d', $d);
            $ui->display('master-subloc.tpl');
            break;

        case 'odc':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');


            $paginator = Paginator::bootstrap('tbl_odc', 'nama', '%' . $keyword . '%');

            if ($paginator == null) {
                $d = ORM::for_table('tbl_odc')
                    ->where_like('nama', '%' . $keyword . '%');

                $msg = $_L['Data_NA'];
                $ui->assign('msg', $msg);
            } else {
                $d = ORM::for_table('tbl_odc')
                    ->where_like('nama', '%' . $keyword . '%')
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')
                    ->find_many();

                $ui->assign('paginator', $paginator);
            }

            $ui->assign('d', $d);
            $ui->display('master-odc.tpl');
            break;

        case 'odp':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');


            $paginator = Paginator::bootstrap('tbl_odp', 'nama', '%' . $keyword . '%');

            if ($paginator == null) {
                $d = ORM::for_table('tbl_odp')
                    ->where_like('nama', '%' . $keyword . '%');

                $msg = $_L['Data_NA'];
                $ui->assign('msg', $msg);
            } else {
                $d = ORM::for_table('tbl_odp')
                    ->where_like('nama', '%' . $keyword . '%')
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')
                    ->find_many();

                $ui->assign('paginator', $paginator);
            }

            $ui->assign('d', $d);
            $ui->display('master-odp.tpl');
            break;

        case 'customers':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_pelanggan', 'nama', '%' . $keyword . '%');

            if ($paginator == null) {
                $d = ORM::for_table('tbl_pelanggan')
                    ->where_like('nama', '%' . $keyword . '%');

                $msg = $_L['Data_NA'];
                $ui->assign('msg', $msg);
            } else {
                $d = ORM::for_table('tbl_pelanggan')
                    ->where_like('nama', '%' . $keyword . '%')
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')
                    ->find_many();
                $ui->assign('paginator', $paginator);
            }

            $ui->assign('d', $d);
            $ui->display('master-customers.tpl');
            break;
    }
} else {

    for ($i = 0; $i < $countReg; $i++) {
        if ($act === 'vloc_region' . $reg[$i]['id']) {
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $idreg = $reg[$i]['id'];

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_lokasi', 'id_region', $idreg);

            if ($paginator == null) {
                $d = ORM::for_table('tbl_lokasi')->where('id_region', $idreg)
                    ->order_by_asc('id')->find_many();

                $msg = $_L['Data_NA'];
                $ui->assign('msg', $msg);
            } else {
                $d = ORM::for_table('tbl_lokasi')->where('id_region', $idreg)
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')
                    ->find_many();

                $ui->assign('paginator', $paginator);
            }

            $ui->assign('idreg', $reg[$i]['id']);
            $ui->assign('namareg', $reg[$i]['nama']);
            $ui->assign('d', $d);
            $ui->display('master-location.tpl');
        }
    }

    for ($i = 0; $i < $countLoc; $i++) {
        if ($act  === 'vsubloc_loc' . $loc[$i]['id']) {
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $idloc = $loc[$i]['id'];

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_sub_lokasi', 'id_lokasi', $idloc);

            if ($paginator == null) {
                $d = ORM::for_table('tbl_sub_lokasi')->where('id_lokasi', $idloc)
                    ->order_by_asc('id')->find_many();

                $msg = $_L['Data_NA'];
                $ui->assign('msg', $msg);
            } else {
                $d = ORM::for_table('tbl_sub_lokasi')->where('id_lokasi', $idloc)
                    ->offset($paginator['startpoint'])
                    ->limit($paginator['limit'])->order_by_asc('id')
                    ->find_many();

                $ui->assign('paginator', $paginator);
            }


            $ui->assign('idloc', $loc[$i]['id']);
            $ui->assign('namaloc', $loc[$i]['nama']);
            $ui->assign('d', $d);
            $ui->display('master-subloc.tpl');
        }
    }

    switch ($act) {
        case 'region':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_region');

            $d = ORM::for_table('tbl_region')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();

            $ui->assign('d', $d);
            $ui->assign('paginator', $paginator);
            $ui->display('master-region.tpl');

            break;

        case 'location':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_lokasi');

            $d = ORM::for_table('tbl_lokasi')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();


            $ui->assign('d', $d);
            $ui->assign('paginator', $paginator);
            $ui->display('master-location.tpl');
            break;

        case 'sublocation':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_sub_lokasi');

            $d = ORM::for_table('tbl_sub_lokasi')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();

            $ui->assign('d', $d);
            $ui->assign('paginator', $paginator);
            $ui->display('master-subloc.tpl');
            break;

        case 'odc':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');


            $paginator = Paginator::bootstrap('tbl_odc');

            $d = ORM::for_table('tbl_odc')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();

            $ui->assign('d', $d);
            $ui->assign('paginator', $paginator);
            $ui->display('master-odc.tpl');
            break;

        case 'odp':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_odp');

            $d = ORM::for_table('tbl_odp')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();

            $ui->assign('d', $d);
            $ui->assign('paginator', $paginator);
            $ui->display('master-odp.tpl');
            break;

        case 'customers':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/master.js"></script>');

            $paginator = Paginator::bootstrap('tbl_pelanggan');

            $d = ORM::for_table('tbl_pelanggan')->offset($paginator['startpoint'])->limit($paginator['limit'])->order_by_asc('id')->find_many();

            $ui->assign('d', $d);
            $ui->assign('paginator', $paginator);
            $ui->display('master-customers.tpl');
            break;

        case 'add_region':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->display('master-add-region.tpl');
            break;

        case 'add_location':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            if (isset($routes['2']) && $routes['2'] != "") {
                $idreg = $routes['2'];
                $ui->assign('idreg', $idreg);
            }

            $ui->assign('fetchApi', '<script src="' . $_theme . '/scripts/callbackAqsha.js"></script>');
            $ui->display('master-add-location.tpl');
            break;

        case 'add_sublocation':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            if (isset($routes['2']) && $routes['2'] != "") {
                $idloc = $routes['2'];
                $ui->assign('idloc', $idloc);
            }

            $ui->assign('fetchApi', '<script src="' . $_theme . '/scripts/callbackAqsha.js"></script>');
            $ui->display('master-add-subloc.tpl');
            break;

        case 'add_odc':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->display('master-add-odc.tpl');
            break;

        case 'add_odp':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->assign('fetchApi', '<script src="' . $_theme . '/scripts/callbackAqsha.js"></script>');
            $ui->display('master-add-odp.tpl');
            break;

        case 'add_customers':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
            }

            $ui->display('master-add-customers.tpl');
            break;

        case 'edit_region':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_Not_Access']);
            }

            $id  = $routes['2'];
            $d = ORM::for_table('tbl_region')->find_one($id);
            if ($d) {
                $ui->assign('d', $d);
                $ui->display('master-edit-region.tpl');
            } else {
                r2(U . 'master/region', 'e', $_L['Region'] . ' ' . $_L['NF']);
            }
            break;

        case 'edit_location':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_Not_Access']);
            }

            $id  = $routes['2'];

            $d = ORM::for_table('tbl_lokasi')->find_one($id);
            if ($d) {
                if (isset($routes['3']) && $routes['3'] != "") {
                    $idreg = $routes['3'];
                    $ui->assign('idreg', $idreg);
                }
                $ui->assign('d', $d);
                $ui->assign('fetchApi', '<script src="' . $_theme . '/scripts/callbackAqsha.js"></script>');
                $ui->display('master-edit-location.tpl');
            } else {
                if (isset($routes['3']) && $routes['3'] != "") {
                    $idreg = $routes['3'];
                    r2(U . 'master/vloc_region' . $idreg, 'e', $_L['Location'] . ' ' . $_L['NF']);
                } else {
                    r2(U . 'master/location', 'e', $_L['Location'] . ' ' . $_L['NF']);
                }
            }
            break;

        case 'edit_sublocation':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_Not_Access']);
            }

            $id  = $routes['2'];
            $d = ORM::for_table('tbl_sub_lokasi')->find_one($id);

            if ($d) {
                if (isset($routes['3']) && $routes['3'] != "") {
                    $idloc = $routes['3'];
                    $ui->assign('idloc', $idloc);
                }
                $ui->assign('d', $d);
                $ui->assign('fetchApi', '<script src="' . $_theme . '/scripts/callbackAqsha.js"></script>');
                $ui->display('master-edit-subloc.tpl');
            } else {
                if (isset($routes['3']) && $routes['3'] != "") {
                    $idloc = $routes['3'];
                    r2(U . 'master/vsubloc_loc' . $idloc, 'e', $_L['SubLoc'] . ' ' . $_L['NF']);
                } else {
                    r2(U . 'master/sublocation', 'e', $_L['SubLoc'] . ' ' . $_L['NF']);
                }
            }
            break;

        case 'edit_odc':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_Not_Access']);
            }

            $id  = $routes['2'];
            $d = ORM::for_table('tbl_odc')->find_one($id);
            if ($d) {
                $ui->assign('d', $d);
                $ui->display('master-edit-odc.tpl');
            } else {
                r2(U . 'master/odc', 'e', 'ODC ' . $_L['NF']);
            }

            break;

        case 'edit_odp':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_Not_Access']);
            }

            $id  = $routes['2'];
            $d = ORM::for_table('tbl_odp')->find_one($id);
            if ($d) {
                $ui->assign('d', $d);
                $ui->assign('fetchApi', '<script src="' . $_theme . '/scripts/callbackAqsha.js"></script>');
                $ui->display('master-edit-odp.tpl');
            } else {
                r2(U . 'master/odp', 'e', 'ODP ' . $_L['NF']);
            }

            break;

        case 'edit_customers':
            if ($admin['user_type'] != 'Admin') {
                r2(U . "dashboard", 'e', $_L['Do_Not_Access']);
            }

            $id  = $routes['2'];
            $d = ORM::for_table('tbl_pelanggan')->find_one($id);

            // var_dump($d);
            // die;
            if ($d) {
                $ui->assign('d', $d);
                $ui->display('master-edit-customers.tpl');
            } else {
                r2(U . 'master/customers', 'e', $_L['Customers'] . ' ' . $_L['NF']);
            }

            break;

        case 'add_region_post':
            $name = _post('name');

            $msg = '';

            $d = ORM::for_table('tbl_region')->where('nama', $name)->find_one();
            if ($d) {
                $msg .= $_L['Name_Already_Exist'] . '<br>';
            }

            if ($msg == '') {
                $d = ORM::for_table('tbl_region')->create();
                $d->nama = $name;
                $d->save();
                r2(U . 'master/region', 's', $_L['Add_Region_Success']);
            } else {
                r2(U . 'master/add_region', 'e', $msg);
            }
            break;

        case 'add_location_post':
            $idreg = _post('idregion');
            $name = _post('name');
            $type = _post('type');
            $address = _post('address');
            $status = _post('status');
            $homepass = _post('homepass');
            $occupancy = _post('occupancy');

            if ($homepass == '') $homepass = null;
            if ($occupancy == '') $occupancy = null;

            $msg = '';
            // if (Validator::Length($homepass, 11, 0) == false) {
            //     $msg .= 'Homepass should be between 1 to 11 characters' . '<br>';
            // }
            // if (Validator::Length($occupancy, 11, 0) == false) {
            //     $msg .= 'Occupancy should be between 1 to 11 characters' . '<br>';
            // }

            $d = ORM::for_table('tbl_region')->where_id_is($idreg)->find_one();
            if (!$d) {
                $msg .= $_L['Region_Not_Register'] . '<br>';
            }

            $d = ORM::for_table('tbl_lokasi')->where('nama', $name)->find_one();
            if ($d) {
                $msg .= $_L['Name_Already_Exist'] . '<br>';
            }

            if ($msg == '') {
                $d = ORM::for_table('tbl_lokasi')->create();
                $d->id_region = $idreg;
                $d->nama = $name;
                $d->tipe = $type;
                $d->alamat = $address;
                $d->status = $status;
                $d->homepass = $homepass;
                $d->occupancy = $occupancy;
                $d->save();
                if (isset($routes['2']) && $routes['2'] != "") {
                    r2(U . 'master/vloc_region' . $routes['2'], 's', $_L['Add_Loc_Success']);
                } else {
                    r2(U . 'master/location', 's', $_L['Add_Loc_Success']);
                }
            } else {
                if (isset($routes['2']) && $routes['2'] != "") {
                    r2(U . 'master/add_location/' . $routes['2'], 'e', $msg);
                } else {
                    r2(U . 'master/add_location', 'e', $msg);
                }
            }

            break;

        case 'add_sublocation_post':
            $idlokasi = _post('idlokasi');
            $name = _post('name');
            $status = _post('status');
            $homepass = _post('homepass');
            $occupancy = _post('occupancy');

            if ($homepass == '') $homepass = null;
            if ($occupancy == '') $occupancy = null;

            $msg = '';
            // if (Validator::Length($homepass, 11, 0) == false) {
            //     $msg .= 'Homepass should be between 1 to 11 characters' . '<br>';
            // }
            // if (Validator::Length($occupancy, 11, 0) == false) {
            //     $msg .= 'Occupancy should be between 1 to 11 characters' . '<br>';
            // }

            $d = ORM::for_table('tbl_lokasi')->where('id', $idlokasi)->find_one();

            if (!$d) {
                $msg .= $_L['ID_Loc_Not_Regist'] . '<br>';
            }

            $d = ORM::for_table('tbl_sub_lokasi')->where('nama', $name)->find_one();

            if ($d) {
                $msg .= $_L['Name_Already_Exist'] . '<br>';
            }

            if ($msg == '') {
                $d = ORM::for_table('tbl_sub_lokasi')->create();
                $d->id_lokasi = $idlokasi;
                $d->nama = $name;
                $d->status = $status;
                $d->homepass = $homepass;
                $d->occupancy = $occupancy;
                $d->save();
                if (isset($routes['2']) && $routes['2'] != "") {
                    r2(U . 'master/vsubloc_loc' . $routes['2'], 's', $_L['Add_SubLoc_Success']);
                } else {
                    r2(U . 'master/sublocation', 's', $_L['Add_SubLoc_Success']);
                }
            } else {
                if (isset($routes['2']) && $routes['2'] != "") {
                    r2(U . 'master/add_sublocation/' . $routes['2'], 'e', $msg);
                } else {
                    r2(U . 'master/add_sublocation', 'e', $msg);
                }
            }
            break;

        case 'add_odc_post':
            $name = _post('name');
            $lat = (float)_post('lat');
            $lon = (float)_post('lon');
            $splitter = _post('splitter');
            $capacity = _post('capacity');

            if ($lat == '') $lat = null;
            if ($lon == '') $lon = null;
            if ($splitter == '') $splitter = null;

            $msg = '';

            $d = ORM::for_table('tbl_odc')->where('nama', $name)->find_one();

            if ($d) {
                $msg .= $_L['Name_Already_Exist'] . '<br>';
            }

            if ($msg == '') {
                $d = ORM::for_table('tbl_odc')->create();
                $d->nama = $name;
                $d->lat = $lat;
                $d->lon = $lon;
                $d->jumlah_splitter = $splitter;
                $d->kapasitas = $capacity;
                $d->save();
                r2(U . 'master/odc', 's', $_L['Add_ODC_Success']);
            } else {
                r2(U . 'master/add_odc', 'e', $msg);
            }
            break;

        case 'add_odp_post':

            $name = _post('name');
            $idodc = _post('idodc');
            $portodc = _post('portodc');
            $status = _post('status');
            $capacity = _post('capacity');
            $lat = (float)_post('lat');
            $lon = (float)_post('lon');

            if ($lat == '') $lat = null;
            if ($lon == '') $lon = null;

            $msg = '';

            $d = ORM::for_table('tbl_odp')->where('nama', $name)->find_one();

            if ($d) {
                $msg .= $_L['Name_Already_Exist'] . '<br>';
            }

            $d = ORM::for_table('tbl_odp')->where('id_odc', $idodc)->where('port_odc', $portodc)->find_one();

            if ($d) {
                $msg .= $_L['Port_Used'] . '<br>';
            }

            $c = ORM::for_table('tbl_odc')->where_id_is($idodc)->find_one();

            if (!$c) {
                $msg .= $_L['ID_ODC_Not_Regist'] . '<br>';
            }

            if ($msg == '') {
                $d = ORM::for_table('tbl_odp')->create();
                $d->nama = $name;
                $d->id_odc = $idodc;
                $d->port_odc = $portodc;
                $d->status_port_odc = $status;
                $d->kapasitas = $capacity;
                $d->lat = $lat;
                $d->lon = $lon;
                $d->save();

                $d = ORM::for_table('tbl_odp')->where('nama', $name)->find_one();

                for ($i = 1; $i <= $d['kapasitas']; $i++) {
                    $f = ORM::for_table('tbl_port_odp')->create();
                    $f->id_odp = $d['id'];
                    $f->port_odp = $i;
                    $f->status_port_odp = 'UNUSED';
                    $f->save();
                }


                r2(U . 'master/odp', 's', $_L['Add_ODP_Success']);
            } else {
                r2(U . 'master/add_odp', 'e', $msg);
            }
            break;

        case 'add_customers_post':
            $name = _post('name');
            $address = _post('address');
            $telp = _post('telp');
            $status = _post('status');

            $msg = '';

            $d = ORM::for_table('tbl_pelanggan')->where('nama', $name)->find_one();

            if ($d) {
                $msg .= $_L['Name_Already_Exist'] . '<br>';
            }

            if ($msg == '') {
                $d = ORM::for_table('tbl_pelanggan')->create();
                $d->nama = $name;
                $d->alamat = $address;
                $d->no_telp = $telp;
                $d->status = $status;
                $d->save();
                r2(U . 'master/customers', 's', $_L['Add_Customer_Success']);
            } else {
                r2(U . 'master/add_customers', 'e', $msg);
            }
            break;

        case 'edit_region_post':
            $name = _post('name');

            $msg = '';

            $id = _post('id');
            $d = ORM::for_table('tbl_region')->find_one($id);
            if ($d) {
            } else {
                $msg .= $_L['Data_Not_Found'] . '<br>';
            }

            if ($d['nama'] != $name) {
                $c = ORM::for_table('tbl_region')->where('nama', $name)->find_one();
                if ($c) {
                    $msg .= $_L['Name_Already_Exist'] . '<br>';
                }
            }

            if ($msg == '') {
                $d->nama = $name;
                $d->save();
                r2(U . 'master/region', 's', $_L['Edit_Region_Success']);
            } else {
                r2(U . 'master/edit_region/' . $id, 'e', $msg);
            }
            break;

        case 'edit_location_post':
            $idreg = _post('idregion');
            $name = _post('name');
            $type = _post('type');
            $address = _post('address');
            $status = _post('status');
            $homepass = _post('homepass');
            $occupancy = _post('occupancy');

            if ($homepass == '') $homepass = null;
            if ($occupancy == '') $occupancy = null;

            $msg = '';
            // if (Validator::Length($homepass, 11, 0) == false) {
            //     $msg .= 'Homepass should be between 1 to 11 characters' . '<br>';
            // }
            // if (Validator::Length($occupancy, 11, 0) == false) {
            //     $msg .= 'Occupancy should be between 1 to 11 characters' . '<br>';
            // }

            $d = ORM::for_table('tbl_region')->where_id_is($idreg)->find_one();
            if (!$d) {
                $msg .= $_L['Region_Not_Register'] . '<br>';
            }

            $id = _post('id');
            $d = ORM::for_table('tbl_lokasi')->find_one($id);
            if ($d) {
            } else {
                $msg .= $_L['Data_Not_Found'] . '<br>';
            }

            if ($d['nama'] != $name) {
                $c = ORM::for_table('tbl_lokasi')->where('nama', $name)->find_one();
                if ($c) {
                    $msg .= $_L['Name_Already_Exist'] . '<br>';
                }
            }

            if ($msg == '') {
                $d->id_region = $idreg;
                $d->nama = $name;
                $d->tipe = $type;
                $d->alamat = $address;
                $d->status = $status;
                $d->homepass = $homepass;
                $d->occupancy = $occupancy;
                $d->save();

                if (isset($routes['2']) && $routes['2'] != "") {
                    r2(U . 'master/vloc_region' . $routes['2'], 's', $_L['Edit_Loc_Success']);
                } else {
                    r2(U . 'master/location', 's', $_L['Edit_Loc_Success']);
                }
            } else {
                if (isset($routes['2']) && $routes['2'] != "") {
                    r2(U . 'master/edit_location/' . $id . '/' . $routes['2'], 'e', $msg);
                } else {
                    r2(U . 'master/edit_location/' . $id, 'e', $msg);
                }
            }
            break;

        case 'edit_sublocation_post':
            $idloc = _post('idlokasi');
            $name = _post('name');
            $status = _post('status');
            $homepass = _post('homepass');
            $occupancy = _post('occupancy');

            if ($homepass == '') $homepass = null;
            if ($occupancy == '') $occupancy = null;

            $msg = '';
            // if (Validator::Length($homepass, 11, 0) == false) {
            //     $msg .= 'Homepass should be between 1 to 11 characters' . '<br>';
            // }
            // if (Validator::Length($occupancy, 11, 0) == false) {
            //     $msg .= 'Occupancy should be between 1 to 11 characters' . '<br>';
            // }

            $id = _post('id');
            $d = ORM::for_table('tbl_sub_lokasi')->find_one($id);
            if ($d) {
            } else {
                $msg .= $_L['Data_Not_Found'] . '<br>';
            }

            if ($d['nama'] != $name) {
                $c = ORM::for_table('tbl_sub_lokasi')->where('nama', $name)->find_one();
                if ($c) {
                    $msg .= $_L['Name_Already_Exist'] . '<br>';
                }
            }

            if ($msg == '') {
                $d->id_lokasi = $idloc;
                $d->nama = $name;
                $d->status = $status;
                $d->homepass = $homepass;
                $d->occupancy = $occupancy;
                $d->save();
                if (isset($routes['2']) && $routes['2'] != "") {
                    r2(U . 'master/vsubloc_loc' . $routes['2'], 's', $_L['Edit_SubLoc_Success']);
                } else {
                    r2(U . 'master/sublocation', 's', $_L['Edit_SubLoc_Success']);
                }
            } else {
                if (isset($routes['2']) && $routes['2'] != "") {
                    r2(U . 'master/edit_sublocation/' . $id . '/' . $routes['2'], 'e', $msg);
                } else {
                    r2(U . 'master/edit_sublocation/' . $id, 'e', $msg);
                }
            }
            break;

        case 'edit_odc_post':
            $name = _post('name');
            $lat = (float)_post('lat');
            $lon = (float)_post('lon');
            $splitter = _post('splitter');

            if ($lat == '') $lat = null;
            if ($lon == '') $lon = null;

            $msg = '';

            $id = _post('id');
            $d = ORM::for_table('tbl_odc')->find_one($id);
            if ($d) {
            } else {
                $msg .= $_L['Data_Not_Found'] . '<br>';
            }

            if ($d['nama'] != $name) {
                $c = ORM::for_table('tbl_odc')->where('nama', $name)->find_one();
                if ($c) {
                    $msg .= $_L['Name_Already_Exist'] . '<br>';
                }
            }

            if ($msg == '') {
                $d->nama = $name;
                $d->lat = $lat;
                $d->lon = $lon;
                $d->jumlah_splitter = $splitter;
                $d->save();
                r2(U . 'master/odc', 's', $_L['Edit_ODC_Success']);
            } else {
                r2(U . 'master/edit_odc/' . $id, 'e', $msg);
            }
            break;

        case 'edit_odp_post':
            $name = _post('name');
            $idodc = _post('idodc');
            $lat = (float)_post('lat');
            $lon = (float)_post('lon');

            if ($lat == '') $lat = null;
            if ($lon == '') $lon = null;

            $msg = '';

            $id = _post('id');
            $d = ORM::for_table('tbl_odp')->find_one($id);
            if ($d) {
            } else {
                $msg .= $_L['Data_Not_Found'] . '<br>';
            }

            if ($d['nama'] != $name) {
                $c = ORM::for_table('tbl_odp')->where('nama', $name)->find_one();
                if ($c) {
                    $msg .= $_L['Name_Already_Exist'] . '<br>';
                }
            }

            if ($msg == '') {
                $d->nama = $name;
                $d->id_odc = $idodc;
                $d->lat = $lat;
                $d->lon = $lon;
                $d->save();
                r2(U . 'master/odp', 's', $_L['Edit_ODP_Success']);
            } else {
                r2(U . 'master/edit_odp/' . $id, 'e', $msg);
            }
            break;

        case 'edit_customers_post':
            $name = _post('name');
            $address = _post('alamat');
            $telp = _post('telp');
            $status = _post('status');

            $msg = '';

            $id = _post('id');
            $d = ORM::for_table('tbl_pelanggan')->find_one($id);
            if ($d) {
            } else {
                $msg .= $_L['Data_Not_Found'] . '<br>';
            }

            if ($d['nama'] != $name) {
                $c = ORM::for_table('tbl_pelanggan')->where('nama', $name)->find_one();
                if ($c) {
                    $msg .= $_L['Name_Already_Exist'] . '<br>';
                }
            }

            if ($msg == '') {
                $d->nama = $name;
                $d->alamat = $address;
                $d->no_telp = $telp;
                $d->status = $status;
                $d->save();
                r2(U . 'master/customers', 's', $_L['Edit_Customer_Success']);
            } else {
                r2(U . 'master/edit_customers/' . $id, 'e', $msg);
            }
            break;

        case 'delete_region_post':
            $id = $routes[2];

            $d = ORM::for_table('tbl_region')->where('id', $id)->find_one();
            if ($d) {
                $d->delete();
                r2(U . 'master/region', 's', $_L['Delete_Region_Success']);
            } else {
                r2(U . 'master/region', 'e', $_L['Delete_Region_Failed']);
            }

            break;

        case 'delete_location_post':
            $id = $routes[2];
            $d = ORM::for_table('tbl_lokasi')->where('id', $id)->find_one();
            if ($d) {
                $d->delete();
                if (isset($routes[3]) && $routes[3] != "") {
                    r2(U . 'master/vloc_region' . $routes[3], 's', $_L['Delete_Loc_Success']);
                } else {
                    r2(U . 'master/location', 's', $_L['Delete_Loc_Success']);
                }
            } else {
                if (isset($routes[3]) && $routes[3] != "") {
                    r2(U . 'master/vloc_region' . $routes[3], 'e', $_L['Delete_Loc_Failed']);
                } else {
                    r2(U . 'master/location', 'e', $_L['Delete_Loc_Failed']);
                }
            }

            break;

        case 'delete_sublocation_post':
            $id = $routes[2];

            $d = ORM::for_table('tbl_sub_lokasi')->where('id', $id)->find_one();
            if ($d) {
                $d->delete();
                if (isset($routes[3]) && $routes[3] != "") {
                    r2(U . 'master/vsubloc_loc' . $routes[3], 's', $_L['Delete_SubLoc_Success']);
                } else {
                    r2(U . 'master/sublocation', 's', $_L['Delete_SubLoc_Success']);
                }
            } else {
                if (isset($routes[3]) && $routes[3] != "") {
                    r2(U . 'master/vsubloc_loc' . $routes[3], 'e', $_L['Delete_SubLoc_Failed']);
                } else {
                    r2(U . 'master/sublocation', 'e', $_L['Delete_SubLoc_Failed']);
                }
            }

            break;

        case 'delete_odc_post':
            $id = $routes[2];

            $d = ORM::for_table('tbl_odc')->where('id', $id)->find_one();
            if ($d) {
                $d->delete();
                r2(U . 'master/odc', 's', $_L['Delete_ODC_Success']);
            } else {
                r2(U . 'master/odc', 'e', $_L['Delete_ODC_Failed']);
            }

            break;

        case 'delete_odp_post':
            $id = $routes[2];

            $d = ORM::for_table('tbl_odp')->where('id', $id)->find_one();
            if ($d) {
                $d->delete();
                r2(U . 'master/odp', 's', $_L['Delete_ODP_Success']);
            } else {
                r2(U . 'master/odp', 'e', $_L['Delete_ODP_Failed']);
            }

            break;

        case 'delete_customers_post':
            $id = $routes[2];

            $d = ORM::for_table('tbl_pelanggan')->where('id', $id)->find_one();
            if ($d) {
                $d->delete();
                r2(U . 'master/customers', 's', $_L['Delete_Customer_Success']);
            } else {
                r2(U . 'master/customers', 'e', $_L['Delete_Customer_Failed']);
            }

            break;

        default:
            echo 'Fitur belum tersedia';
    }
}
