<?php
/* Smarty version 3.1.39, created on 2022-01-07 16:19:09
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\sections\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61d8058d63d659_73736833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a001bb300149d7a319b1e13c491d8258ea920fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\sections\\header.tpl',
      1 => 1641547142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61d8058d63d659_73736833 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/images/logo.png" type="image/x-icon" />

	<!-- Icons -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/waves.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/select2.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/bootstrap-colorpicker.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/bootstrap-slider.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/summernote.css">

	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/main.min.css">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/ie/matchMedia.js"><?php echo '</script'; ?>
>  <![endif]-->
<?php if ((isset($_smarty_tpl->tpl_vars['xheader']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

<?php }?>

</head>

<body id="app" class="app off-canvas nav-expand">

	<header class="site-head" id="site-head">
		<ul class="list-unstyled left-elems">
			<li>
				<a href="#" class="nav-trigger ion ion-drag"></a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin' || $_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Sales') {?>
			<li>
				<div class="form-search hidden-xs">
					<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
						<input type="search" class="form-control" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_Contact'];?>
">
						<button type="submit" class="ion ion-ios-search-strong"></button>
					</form>
				</div>
			</li>
			<?php }?>
			<li>
				<div class="site-logo visible-xs">
					<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="text-uppercase h3">
						<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</span>
					</a>
				</div>
			</li>
			<li class="fullscreen hidden-xs">
				<a href="#"><i class="ion ion-qr-scanner"></i></a>
			</li>
			<!-- Notification on progress, hide it  -->
			<li class="notify-drop hidden-xs dropdown hidden">
				<a href="#" data-toggle="dropdown">
					<i class="ion ion-chatboxes"></i>
					<span class="badge badge-danger badge-xs circle">3</span>
				</a>
				<div class="panel panel-default dropdown-menu">
					<div class="panel-heading">
						You have 3 new message
						<a href="#" class="right btn btn-xs btn-pink mt-3">Show All</a>
					</div>
					<div class="panel-body">
						Coming Soon!!! Next Version...
					</div>
				</div>
			</li>
		</ul>
		<ul class="list-unstyled right-elems">
			<li class="logout hidden-xs">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout"><i class="ion ion-power"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></a>
			</li>
		</ul>
	</header>

	<div class="main-container clearfix">
		<aside class="nav-wrap nav-expand" id="site-nav" data-perfect-scrollbar>
			<div class="nav-head">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="site-logo text-uppercase">
					<i class="ion ion-wifi"></i>
					<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</span>
				</a>
			</div>

			<nav class="site-nav clearfix" role="navigation">
			<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin' || $_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Sales') {?>
				<div class="profile clearfix mb15">
					<img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
?set=set3&size=100x100&bgset=bg1" alt="admin">
					<div class="group">
						<div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>
<span class="caret"></a></span>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
"><i class="ion ion-person"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['My_Account'];?>
<div class="ripple-wrapper"></div></a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password"><i class="ion ion-settings"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout"><i class="ion ion-power"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></li>
							</ul>
						</div>
						<small class="desig"><?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin') {?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Administrator'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
 <?php }?></small>
					</div>
				</div>
			<?php } else { ?>
				<div class="profile clearfix mb15">
					<img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
?set=set3&size=100x100&bgset=bg1" alt="admin">
					<div class="group">
						<div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/profile"><i class="ion ion-person"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['My_Account'];?>
<div class="ripple-wrapper"></div></a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/change-password"><i class="ion ion-settings"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout"><i class="ion ion-power"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a></li>
							</ul>
						</div>
						<small class="desig"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Member'];?>
</small>
					</div>
				</div>
			<?php }?>

				<ul id="leftMenu" class="list-unstyled clearfix nav-list mb15">
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'dashboard') {?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard">
							<i class="ion ion-monitor"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span>
						</a>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'prepaid') {?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher" >
							<i class="ion ion-card"></i>
							<span class="text">Voucher</span>
						</a>
					</li>
					<li class="active">
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
payment/agent" >
							<i class="ion ion-forward"></i>
							<span class="text">Pembayaran</span>
						</a>
					</li>

					<!-- Message on progress, hide it  -->
					<li class="hidden <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'message') {?>open<?php }?>">
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-email"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Private_Message'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'message') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
message/inbox"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Inbox'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'message') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
message/outbox"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Outbox'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'message') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
message/compose"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Compose'];?>
</a></li>
						</ul>
					</li>
				<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin') {?>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'customers') {?>class="open"<?php }?>>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-android-contacts"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'customers') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Contact'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'customers') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Contact'];?>
</a></li>
						</ul>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'prepaid') {?>class="open"<?php }?>>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-card"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'prepaid') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_User'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'prepaid') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_Vouchers'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'prepaid') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/refill"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Refill_Account'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'prepaid') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Account'];?>
</a></li>
						</ul>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'services') {?>class="open"<?php }?>>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-cube"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'services') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/hotspot"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hotspot_Plans'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'services') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe"><?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'services') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bandwidth/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bandwidth_Plans'];?>
</a></li>
						</ul>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'reports') {?>class="open"<?php }?>>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-clipboard"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'reports') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/daily-report"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Daily_Report'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'reports') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Period_Reports'];?>
</a></li>
						</ul>
					</li>
				<?php } else { ?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin') {?>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'network') {?>class="open"<?php }?>>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-network"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Network'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'network') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'network') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pool/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pool'];?>
</a></li>
						</ul>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pages') {?>class="open"<?php }?>>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-document"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Static_Pages'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pages') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Order_Voucher"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pages') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Voucher"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher'];?>
 Template</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pages') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Announcement"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Announcement'];?>
 Editor</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pages') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pages/Registration_Info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Registration_Info'];?>
 Editor</a></li>
						</ul>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'settings') {?>class="open"<?php }?>>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-gear-a"></i>
							<span class="text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'settings') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General_Settings'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'settings') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Localisation'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'settings') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Administrator_Users'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'settings') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/dbstatus"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Backup_Restore'];?>
</a></li>
							<li>&nbsp;</li>
						</ul>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'disquss') {?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
disquss">
							<i class="ion ion-chatbubbles"></i>
							<span class="text">Discussion</span>
						</a>
					</li>
				<?php }?>
				</ul>

			</nav>

			<footer class="nav-foot">
				<p><?php echo date('Y');?>
 &copy; <span><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</span></p>
			</footer>
		</aside>
		<?php echo '<script'; ?>
>
		// i find bug that dropdown menu in mobile browser doesnt active, so i force to show all
		var mobile = false;
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			mobile = true;
		}
		function toggleDropdownMobile(node){
			if(mobile){
				$(node).parent('li').addClass('open');
			}
		}
		<?php echo '</script'; ?>
>
		<div class="content-container" id="content">
			<div class="page <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'dashboard') {?>page-dashboard<?php }
if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'reports') {?>page-invoice<?php }?>">

			<?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
				<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

			<?php }
}
}
