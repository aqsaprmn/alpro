<?php
_admin();
$ui->assign('_title', $_L['Recharge_Account'] . ' - ' . $config['CompanyName']);
$ui->assign('_system_menu', 'prepaid');

$action = $routes['1'];
$admin = Admin::_info();
$ui->assign('_admin', $admin);

if ($admin['user_type'] != 'Admin' and $admin['user_type'] != 'Sales') {
	r2(U . "dashboard", 'e', $_L['Do_Not_Access']);
}

use PEAR2\Net\RouterOS;

require_once 'system/autoload/PEAR2/Autoload.php';

switch ($action) {
	case 'voucher':
		$ui->assign('xfooter', '<script type="text/javascript" src="ui/lib/c/voucher.js"></script>');

		$code = _post('code');
		if ($code != '') {
			$ui->assign('code', $code);
			$paginator = Paginator::bootstrap('tbl_voucher', 'code', '%' . $code . '%');
			$d = ORM::for_table('tbl_plans')
				->join('tbl_voucher', array('tbl_plans.id', '=', 'tbl_voucher.id_plan'))
				->where_like('tbl_plans.code', '%' . $code . '%')
				->offset($paginator['startpoint'])
				->limit($paginator['limit'])
				->find_many();
		} else {
			if ($admin['user_type'] == 'Admin') {
				$paginator = Paginator::bootstrap('tbl_voucher');
				$d = ORM::for_table('tbl_plans')
					->join('tbl_voucher', array('tbl_plans.id', '=', 'tbl_voucher.id_plan'))
					->offset($paginator['startpoint'])
					->limit($paginator['limit'])->find_many();
			} else {
				$paginator = Paginator::bootstrap('tbl_voucher', 'id_agen', $admin['id']);
				//r2(U.'prepaid/voucher-refill/'.$id, 'e', $paginator['limit'].'-');
				$d = ORM::for_table('tbl_plans')
					->join('tbl_voucher', array('tbl_plans.id', '=', 'tbl_voucher.id_plan'))
					->where('tbl_voucher.id_agen', $admin['id'])
					//->where('tbl_voucher.shown', '1')
					->offset($paginator['startpoint'])
					->limit($paginator['limit'])
					->find_many();
			}
		}

		$ui->assign('d', $d);
		$ui->assign('paginator', $paginator);
		$ui->display('voucher.tpl');
		break;

	case 'deactivate-vouchers':
		$c = ORM::for_table('tbl_user_recharges')->where('status', 'on')->find_many();
		//$c = ORM::for_table('tbl_user_recharges')->where('status', 'on')->where('user_id',19)->find_many();
		$dummy = '';
		$mikrotik = Router::_info('Desa Kodim Subang');
		try {
			$client = new RouterOS\Client($mikrotik['ip_address'], $mikrotik['username'], $mikrotik['password']);
		} catch (Exception $e) {
			die('Unable to connect to the router.');
		}
		foreach ($c as $crow) {
			sleep(2);
			$code = $crow['username'];
			$date_expire = $crow['expiration'] . ' ' . $crow['time'];
			$date_now = date("Y-m-d H:i:s");
			$dummy = $dummy . '-' . $date_expire . '-' . $date_now;
			if ($date_now > $date_expire) {
				$d = ORM::for_table('tbl_user_recharges')->where('id', $crow['id'])->find_one();
				$dummy = $dummy . '-expired';
				$d->status = 'off';
				$d->save();

				$removeRequest = new RouterOS\Request('/ip/hotspot/user/remove');
				$client(
					$removeRequest
						->setArgument('numbers', $code)
				);
			} else {
				$dummy = $dummy . '-not expired';
			}
		}
		r2(U . 'prepaid/voucher-refill', 'e', $dummy . ' - Kode voucher sudah dinonaktifkan');

		break;

	case 'remove-vouchers':
		for ($i = 9771; $i <= 9820; $i++) {
			$v1 = ORM::for_table('tbl_voucher')->where('id', $i)->find_one();
			$code = $v1['code'];
			$date_now = date("Y-m-d H:i:s");
			$date_only = date("Y-m-d");
			$time = date("H:i:s");
			$p = ORM::for_table('tbl_plans')->find_one(2);

			$mikrotik = Router::_info('Desa Kodim Subang');
			$date_exp = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + 1, date("Y")));
			try {
				$client = new RouterOS\Client($mikrotik['ip_address'], $mikrotik['username'], $mikrotik['password']);
			} catch (Exception $e) {
				die('Unable to connect to the router.');
			}
			$removeRequest = new RouterOS\Request('/ip/hotspot/user/remove');
			$client(
				$removeRequest
					->setArgument('numbers', $code)
			);
		}
		r2(U . 'prepaid/voucher-refill', 'e', 'Kode voucher sudah dihapus');

		break;

	case 'refill-promo':
		for ($i = 9797; $i <= 9820; $i++) {
			$v1 = ORM::for_table('tbl_voucher')->where('id', $i)->find_one();
			$code = $v1['code'];
			$date_now = date("Y-m-d H:i:s");
			$date_only = date("Y-m-d");
			$time = date("H:i:s");
			$p = ORM::for_table('tbl_plans')->find_one(2);

			$mikrotik = Router::_info('Desa Kodim Subang');
			$date_exp = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + 1, date("Y")));
			try {
				$client = new RouterOS\Client($mikrotik['ip_address'], $mikrotik['username'], $mikrotik['password']);
			} catch (Exception $e) {
				die('Unable to connect to the router.');
			}
			$addRequest = new RouterOS\Request('/ip/hotspot/user/add');
			if ($p['typebp'] == "Limited") {
				if ($p['limit_type'] == "Time_Limit") {
					if ($p['time_unit'] == 'Hrs')
						$timelimit = $p['time_limit'] . ":00:00";
					else
						$timelimit = "00:" . $p['time_limit'] . ":00";
					$client->sendSync(
						$addRequest
							->setArgument('name', $code)
							->setArgument('profile', $p['name_plan'])
							->setArgument('password', $code)
							->setArgument('limit-uptime', $timelimit)
					);
				} else if ($p['limit_type'] == "Data_Limit") {
					if ($p['data_unit'] == 'GB')
						$datalimit = $p['data_limit'] . "000000000";
					else
						$datalimit = $p['data_limit'] . "000000";
					$client->sendSync(
						$addRequest
							->setArgument('name', $code)
							->setArgument('profile', $p['name_plan'])
							->setArgument('password', $code)
							->setArgument('limit-bytes-total', $datalimit)
					);
				} else if ($p['limit_type'] == "Both_Limit") {
					if ($p['time_unit'] == 'Hrs')
						$timelimit = $p['time_limit'] . ":00:00";
					else
						$timelimit = "00:" . $p['time_limit'] . ":00";
					if ($p['data_unit'] == 'GB')
						$datalimit = $p['data_limit'] . "000000000";
					else
						$datalimit = $p['data_limit'] . "000000";
					$client->sendSync(
						$addRequest
							->setArgument('name', $code)
							->setArgument('profile', $p['name_plan'])
							->setArgument('password', $code)
							->setArgument('limit-uptime', $timelimit)
							->setArgument('limit-bytes-total', $datalimit)
					);
				}
			} else {
				$client->sendSync(
					$addRequest
						->setArgument('name', $code)
						->setArgument('profile', $p['name_plan'])
						->setArgument('password', $code)
				);
			}
		}
		r2(U . 'prepaid/voucher-refill', 'e', 'Kode voucher tidak ditemukan');
		break;

	case 'refill-post':
		$password = _post('password');
		$id = (int) (_post('id')); // id voucher
		$code = _post('code'); // kode voucher
		//r2(U.'prepaid/voucher-refill/'.$id, 'e', $code.'-'.$id);
		$adminpwd = $admin['password'];
		$user = 0;
		$passfalse = (bool) (Password::_verify($password, $adminpwd));
		if ($passfalse != 1) {
			r2(U . 'prepaid/voucher-refill/' . $id, 'e', 'Password tidak sesuai');
		} else {
			$v1 = ORM::for_table('tbl_voucher')->where('code', $code)->where('status', 0)->find_one();
			$c = ORM::for_table('tbl_customers')->where('username', $code)->find_one();
			$user = $c['id'];
			$p = ORM::for_table('tbl_plans')->find_one($v1['id_plan']);
			$b = ORM::for_table('tbl_user_recharges')->where('customer_id', $id)->find_one();

			//r2(U.'prepaid/voucher-refill/'.$id, 'e', $c['username'].'-');
			$date_now = date("Y-m-d H:i:s");
			$date_only = date("Y-m-d");
			$time = date("H:i:s");

			$mikrotik = Router::_info($v1['routers']);
			$date_exp = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + $p['validity'], date("Y")));
			if ($p['validity'] == 1) {
				$after12hours = date('Y-m-d H:i:s', strtotime('+12 hour +0 minutes +0 seconds', strtotime(date("Y-m-d H:i:s"))));
				$result = explode(" ", $after12hours);
				$date_exp = $result[0];
				$time = $result[1];
				//r2(U.'prepaid/voucher-refill/'.$id, 'e', 'Password tidak sesuai'.$date_exp.'-'.$time);
			}
			if ($v1) {
				if ($v1['type'] == 'Hotspot') {
					if ($b) {
						try {
							$client = new RouterOS\Client($mikrotik['ip_address'], $mikrotik['username'], $mikrotik['password']);
						} catch (Exception $e) {
							die('Unable to connect to the router.');
						}
						$printRequest = new RouterOS\Request(
							'/ip hotspot user print .proplist=name',
							RouterOS\Query::where('name', $c['username'])
						);
						$userName = $client->sendSync($printRequest)->getProperty('name');
						$removeRequest = new RouterOS\Request('/ip/hotspot/user/remove');
						$client(
							$removeRequest
								->setArgument('numbers', $userName)
						);
						/* akses-prima.co.id Added:
						* 	Time limit to Mikrotik
						*	'Time_Limit', 'Data_Limit', 'Both_Limit'
						*/
						$addRequest = new RouterOS\Request('/ip/hotspot/user/add');
						if ($p['typebp'] == "Limited") {
							if ($p['limit_type'] == "Time_Limit") {
								if ($p['time_unit'] == 'Hrs')
									$timelimit = $p['time_limit'] . ":00:00";
								else
									$timelimit = "00:" . $p['time_limit'] . ":00";
								$client->sendSync(
									$addRequest
										->setArgument('name', $c['username'])
										->setArgument('profile', $p['name_plan'])
										->setArgument('password', $c['password'])
										->setArgument('limit-uptime', $timelimit)
								);
							} else if ($p['limit_type'] == "Data_Limit") {
								if ($p['data_unit'] == 'GB')
									$datalimit = $p['data_limit'] . "000000000";
								else
									$datalimit = $p['data_limit'] . "000000";
								$client->sendSync(
									$addRequest
										->setArgument('name', $c['username'])
										->setArgument('profile', $p['name_plan'])
										->setArgument('password', $c['password'])
										->setArgument('limit-bytes-total', $datalimit)
								);
							} else if ($p['limit_type'] == "Both_Limit") {
								if ($p['time_unit'] == 'Hrs')
									$timelimit = $p['time_limit'] . ":00:00";
								else
									$timelimit = "00:" . $p['time_limit'] . ":00";
								if ($p['data_unit'] == 'GB')
									$datalimit = $p['data_limit'] . "000000000";
								else
									$datalimit = $p['data_limit'] . "000000";
								$client->sendSync(
									$addRequest
										->setArgument('name', $c['username'])
										->setArgument('profile', $p['name_plan'])
										->setArgument('password', $c['password'])
										->setArgument('limit-uptime', $timelimit)
										->setArgument('limit-bytes-total', $datalimit)
								);
							}
						} else {
							$client->sendSync(
								$addRequest
									->setArgument('name', $c['username'])
									->setArgument('profile', $p['name_plan'])
									->setArgument('password', $c['password'])
							);
						}

						$b->customer_id = $c['id'];
						$b->username = $c['username'];
						$b->plan_id = $v1['id_plan'];
						$b->namebp = $p['name_plan'];
						$b->recharged_on = $date_only;
						$b->expiration = $date_exp;
						$b->time = $time;
						$b->status = "on";
						$b->method = "voucher";
						$b->routers = $v1['routers'];
						$b->type = "Hotspot";
						$b->save();

						// insert table transactions
						$t = ORM::for_table('tbl_transactions')->create();
						$t->invoice = "INV-" . _raid(5);
						$t->username = $c['username'];
						$t->plan_name = $p['name_plan'];
						$t->price = $p['price'];
						$t->recharged_on = $date_only;
						$t->expiration = $date_exp;
						$t->time = $time;
						$t->method = "voucher";
						$t->routers = $v1['routers'];
						$t->type = "Hotspot";
						$t->save();
					} else {
						try {
							$client = new RouterOS\Client($mikrotik['ip_address'], $mikrotik['username'], $mikrotik['password']);
						} catch (Exception $e) {
							die('Unable to connect to the router.');
						}
						/* akses-prima.co.id Added:
						* 	Time limit to Mikrotik
						*	'Time_Limit', 'Data_Limit', 'Both_Limit'
						*/
						$addRequest = new RouterOS\Request('/ip/hotspot/user/add');
						if ($p['typebp'] == "Limited") {
							if ($p['limit_type'] == "Time_Limit") {
								if ($p['time_unit'] == 'Hrs')
									$timelimit = $p['time_limit'] . ":00:00";
								else
									$timelimit = "00:" . $p['time_limit'] . ":00";
								$client->sendSync(
									$addRequest
										->setArgument('name', $c['username'])
										->setArgument('profile', $p['name_plan'])
										->setArgument('password', $c['password'])
										->setArgument('limit-uptime', $timelimit)
								);
							} else if ($p['limit_type'] == "Data_Limit") {
								if ($p['data_unit'] == 'GB')
									$datalimit = $p['data_limit'] . "000000000";
								else
									$datalimit = $p['data_limit'] . "000000";
								$client->sendSync(
									$addRequest
										->setArgument('name', $c['username'])
										->setArgument('profile', $p['name_plan'])
										->setArgument('password', $c['password'])
										->setArgument('limit-bytes-total', $datalimit)
								);
							} else if ($p['limit_type'] == "Both_Limit") {
								if ($p['time_unit'] == 'Hrs')
									$timelimit = $p['time_limit'] . ":00:00";
								else
									$timelimit = "00:" . $p['time_limit'] . ":00";
								if ($p['data_unit'] == 'GB')
									$datalimit = $p['data_limit'] . "000000000";
								else
									$datalimit = $p['data_limit'] . "000000";
								$client->sendSync(
									$addRequest
										->setArgument('name', $c['username'])
										->setArgument('profile', $p['name_plan'])
										->setArgument('password', $c['password'])
										->setArgument('limit-uptime', $timelimit)
										->setArgument('limit-bytes-total', $datalimit)
								);
							}
						} else {
							$client->sendSync(
								$addRequest
									->setArgument('name', $c['username'])
									->setArgument('profile', $p['name_plan'])
									->setArgument('password', $c['password'])
							);
						}

						$d = ORM::for_table('tbl_user_recharges')->create();
						$d->customer_id = $c['id'];
						$d->username = $c['username'];
						$d->plan_id = $v1['id_plan'];
						$d->namebp = $p['name_plan'];
						$d->recharged_on = $date_only;
						$d->expiration = $date_exp;
						$d->time = $time;
						$d->status = "on";
						$d->method = "voucher";
						$d->routers = $v1['routers'];
						$d->type = "Hotspot";
						$d->user_id = $admin['id'];
						$d->save();

						// insert table transactions
						$t = ORM::for_table('tbl_transactions')->create();
						$t->invoice = "INV-" . _raid(5);
						$t->username = $c['username'];
						$t->plan_name = $p['name_plan'];
						$t->price = $p['price'];
						$t->recharged_on = $date_only;
						$t->expiration = $date_exp;
						$t->time = $time;
						$t->method = "voucher";
						$t->routers = $v1['routers'];
						$t->type = "Hotspot";
						$t->save();
					}

					$v1->status = "1";
					$v1->user = $c['username'];
					$v1->save();
				} else {
					if ($b) {
						try {
							$client = new RouterOS\Client($mikrotik['ip_address'], $mikrotik['username'], $mikrotik['password']);
						} catch (Exception $e) {
							die('Unable to connect to the router.');
						}
						$printRequest = new RouterOS\Request(
							'/ppp secret print .proplist=name',
							RouterOS\Query::where('name', $c['username'])
						);
						$userName = $client->sendSync($printRequest)->getProperty('name');

						$removeRequest = new RouterOS\Request('/ppp/secret/remove');
						$client(
							$removeRequest
								->setArgument('numbers', $userName)
						);

						$addRequest = new RouterOS\Request('/ppp/secret/add');
						$client->sendSync(
							$addRequest
								->setArgument('name', $c['username'])
								->setArgument('service', 'pppoe')
								->setArgument('profile', $p['name_plan'])
								->setArgument('password', $c['password'])
						);

						$b->customer_id = $c['id'];
						$b->username = $c['username'];
						$b->plan_id = $v1['id_plan'];
						$b->namebp = $p['name_plan'];
						$b->recharged_on = $date_only;
						$b->expiration = $date_exp;
						$b->time = $time;
						$b->status = "on";
						$b->method = "voucher";
						$b->routers = $v1['routers'];
						$b->type = "PPPOE";
						$b->save();

						// insert table transactions
						$t = ORM::for_table('tbl_transactions')->create();
						$t->invoice = "INV-" . _raid(5);
						$t->username = $c['username'];
						$t->plan_name = $p['name_plan'];
						$t->price = $p['price'];
						$t->recharged_on = $date_only;
						$t->expiration = $date_exp;
						$t->time = $time;
						$t->method = "voucher";
						$t->routers = $v1['routers'];
						$t->type = "PPPOE";
						$t->save();
					} else {
						try {
							$client = new RouterOS\Client($mikrotik['ip_address'], $mikrotik['username'], $mikrotik['password']);
						} catch (Exception $e) {
							die('Unable to connect to the router.');
						}
						$addRequest = new RouterOS\Request('/ppp/secret/add');
						$client->sendSync(
							$addRequest
								->setArgument('name', $c['username'])
								->setArgument('service', 'pppoe')
								->setArgument('profile', $p['name_plan'])
								->setArgument('password', $c['password'])
						);

						$d = ORM::for_table('tbl_user_recharges')->create();
						$d->customer_id = $c['id'];
						$d->username = $c['username'];
						$d->plan_id = $v1['id_plan'];
						$d->namebp = $p['name_plan'];
						$d->recharged_on = $date_only;
						$d->expiration = $date_exp;
						$d->time = $time;
						$d->status = "on";
						$d->method = "voucher";
						$d->routers = $v1['routers'];
						$d->type = "PPPOE";
						$d->save();

						// insert table transactions
						$t = ORM::for_table('tbl_transactions')->create();
						$t->invoice = "INV-" . _raid(5);
						$t->username = $c['username'];
						$t->plan_name = $p['name_plan'];
						$t->price = $p['price'];
						$t->recharged_on = $date_only;
						$t->expiration = $date_exp;
						$t->time = $time;
						$t->method = "voucher";
						$t->routers = $v1['routers'];
						$t->type = "PPPOE";
						$t->save();
					}

					$v1->status = "1";
					$v1->user = $c['username'];
					$v1->save();
				}
				$in = ORM::for_table('tbl_transactions')->where('username', $c['username'])->order_by_desc('id')->find_one();
				$ui->assign('in', $in);

				$ui->assign('date', $date_now);
				$ui->display('invoice.tpl');
			} else {
				r2(U . 'prepaid/voucher-refill', 'e', 'Kode voucher tidak ditemukan');
			}
		}

		break;

	case 'voucher-refill':
		$id = $routes['2'];
		//r2(U.'prepaid/voucher/'.$id, 'e', 'Password tidak sesuai'.$id);

		$ui->assign('xfooter', '<script type="text/javascript" src="' . $_theme . '/scripts/form-elements.init.js"></script>');

		$c = ORM::for_table('tbl_voucher')->find_one($id);
		$ui->assign('c', $c);

		$ui->display('refill.tpl');

		break;

	default:
		echo 'Fitur belum tersedia';
}
