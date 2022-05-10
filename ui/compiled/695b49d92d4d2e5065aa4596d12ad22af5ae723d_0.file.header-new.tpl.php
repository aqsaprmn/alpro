<?php
/* Smarty version 3.1.39, created on 2022-02-22 11:20:30
  from 'C:\xampp\htdocs\alpro\ui\theme\default\sections\header-new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6214648e4c8dc7_62064301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '695b49d92d4d2e5065aa4596d12ad22af5ae723d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\sections\\header-new.tpl',
      1 => 1645503623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6214648e4c8dc7_62064301 (Smarty_Internal_Template $_smarty_tpl) {
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
				<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin' || $_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Sales') {?>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'master') {?>class="open"<?php }?>>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-gear-a"></i>
							<span class="text">Master</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'master') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/region"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Region'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'master') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/location"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Location'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'master') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/sublocation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'master') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/odc">ODC</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'master') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/odp">ODP</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'master') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/customers"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</a></li>
						</ul>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pairing') {?>class="open"<?php }?>>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion ion-card"></i>
							<span class="text">Pairing</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pairing') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pairing/location-odc"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Location'];?>
 - ODC</a></li>
							<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'pairing') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pairing/subloc-odp"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
 - ODP</a></li>
						</ul>
					</li>
					<li class="title-divider"><hr>Region</li>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dreg']->value, 'reg');
$_smarty_tpl->tpl_vars['reg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reg']->value) {
$_smarty_tpl->tpl_vars['reg']->do_else = false;
?>
						<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == $_smarty_tpl->tpl_vars['reg']->value['nama']) {?>class="open"<?php }?>>
							<a href="#" onClick="toggleDropdownMobile(this)">
								<i class="ion ion-cube"></i>
								<span class="text"><?php echo $_smarty_tpl->tpl_vars['reg']->value['nama'];?>
</span>
								<i class="arrow ion-chevron-left"></i>
							</a>
							<ul class="inner-drop list-unstyled">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dloc']->value, 'loc');
$_smarty_tpl->tpl_vars['loc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['reg']->value['id'] == $_smarty_tpl->tpl_vars['loc']->value['id_region']) {?>
										<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'region') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
region/<?php echo $_smarty_tpl->tpl_vars['reg']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['loc']->value['nama'];?>
</a></li>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
