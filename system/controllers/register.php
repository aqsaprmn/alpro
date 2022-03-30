<?php

if (isset($routes['1'])) {
    $do = $routes['1'];
} else {
    $do = 'register-display';
}
use PEAR2\Net\RouterOS;
require_once 'system/autoload/PEAR2/Autoload.php';

switch($do){
    case 'post':
		
		$username = _post('username');
        $fullname = _post('fullname');
        $password = _post('password');
        $cpassword = _post('cpassword');
        $address = _post('address');
		$phonenumber = _post('phonenumber');
		$code = _post('kodevoucher');

		$msg = '';
		if(Validator::Length($username,55,2) == false){
			$msg .= 'Username should be between 3 to 55 characters'. '<br>';
		}
		if(Validator::Length($fullname,40,2) == false){
			$msg .= 'Full Name should be between 3 to 40 characters'. '<br>';
		}
		if(!Validator::Length($password,35,5)){
			$msg .= 'Password should be between 6 to 35 characters'. '<br>';
		}
		if($password != $cpassword){
			$msg .= $_L['PasswordsNotMatch']. '<br>';
		}

		$d = ORM::for_table('tbl_users')->where('username',$username)->find_one();
		if($d){
			$msg .= $_L['account_already_exist']. '<br>';
		}

		if($msg == ''){
            $password = Password::_crypt($password);
			$d = ORM::for_table('tbl_users')->create();
			$d->username = $username;
			$d->password = $password;
			$d->fullname = $fullname;
			$d->user_type = 'Sales';
			$d->status = 'Inactive';
			$d->address = $address;
			$d->phonenumber = $phonenumber;
			$date_now = date("Y-m-d H:i:s");
			$d->creationdate = $date_now;

			if($d->save()){
				$user = $d->id();
					
				r2(U . 'admin', 's', $_L['Register_Success']);
			}else{
				$ui->assign('username', $username);
				$ui->assign('fullname', $fullname);
				$ui->assign('address', $address);
				$ui->assign('phonenumber', $phonenumber);
				$ui->assign('notify','<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">
				<span aria-hidden="true">×</span>
				</button>
				<div>Failed to register</div></div>');
				$ui->display('register.tpl');
			}
			//r2(U . 'register', 's', $_L['account_created_successfully']);
		}else{
			$ui->assign('username', $username);
			$ui->assign('fullname', $fullname);
			$ui->assign('address', $address);
			$ui->assign('phonenumber', $phonenumber);
			$ui->assign('notify','<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">
			<span aria-hidden="true">×</span>
			</button>
			<div>'.$msg.'</div></div>');
			$ui->display('register.tpl');
		}
	
		
        break;

    default:
		$ui->assign('username', "");
		$ui->assign('fullname', "");
		$ui->assign('address', "");
		$ui->assign('phonenumber', "");
        $ui->display('register.tpl');
        break;
}

