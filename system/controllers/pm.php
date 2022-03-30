<?php
_auth();
$ui->assign('_title', $_L['Private_Message'].'- '. $config['CompanyName']);
$ui->assign('_system_menu', 'pm');

$action = $routes['1'];
$user = User::_info();
$ui->assign('_user', $user);

switch ($action) {
    default:
         $ui->display('404.tpl');
}