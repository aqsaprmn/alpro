<?php
_admin();
$ui->assign('_title', 'Disquss - '. $config['CompanyName']);
$ui->assign('_system_menu', 'disquss');

$admin = Admin::_info();
$ui->assign('_admin', $admin);

if($admin['user_type'] != 'Admin' AND $admin['user_type'] != 'Sales'){
	r2(U."dashboard",'e',$_L['Do_Not_Access']);
}

switch ($action) {
    default:
         $ui->display('disquss.tpl');
}