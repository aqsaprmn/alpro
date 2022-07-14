<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>{$_title}</title>
	<link rel="shortcut icon" href="{$_theme}/images/logo.png" type="image/x-icon" />

	<!-- Icons -->
	<link rel="stylesheet" href="{$_theme}/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="{$_theme}/fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="{$_theme}/styles/plugins/waves.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/perfect-scrollbar.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/select2.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/bootstrap-colorpicker.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/bootstrap-slider.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/bootstrap-datepicker.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/summernote.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/yearpicker.css">

	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="{$_theme}/styles/bootstrap.min.css">
	<link rel="stylesheet" href="{$_theme}/styles/main.min.css">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="{$_theme}/scripts/ie/matchMedia.js"></script>  <![endif]-->
{if isset($xheader)}
	{$xheader}
{/if}

</head>

<body id="app" class="app off-canvas nav-expand">

	<header class="site-head" id="site-head">
		<ul class="list-unstyled left-elems">
			<li>
				<a href="#" class="nav-trigger ion ion-drag"></a>
			</li>
			{if $_admin['user_type'] eq 'Admin' || $_admin['user_type'] eq 'Sales'}
			<li>
				<div class="form-search hidden-xs">
					<form id="site-search" method="post" action="{$_url}customers/list/">
						<input type="search" class="form-control" name="username" placeholder="{$_L['Search_Contact']}">
						<button type="submit" class="ion ion-ios-search-strong"></button>
					</form>
				</div>
			</li>
			{/if}
			<li>
				<div class="site-logo visible-xs">
					<a href="{$_url}dashboard" class="text-uppercase h3">
						<span class="text">{$_L['Logo']}</span>
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
				<a href="{$_url}logout"><i class="ion ion-power"></i> {$_L['Logout']}</a></a>
			</li>
		</ul>
	</header>
	<div class="main-container clearfix">
		<aside class="nav-wrap nav-expand" id="site-nav" data-perfect-scrollbar>
			<div class="nav-head">
				<a href="{$_url}dashboard" class="site-logo text-uppercase">
					<i class="ion ion-wifi"></i>
					<span class="text">{$_L['Logo']}</span>
				</a>
			</div>

			<nav class="site-nav clearfix" role="navigation">
			{if $_admin['user_type'] eq 'Admin' || $_admin['user_type'] eq 'Sales'}
				<div class="profile clearfix mb15">
					<img src="https://robohash.org/{$_admin['id']}?set=set3&size=100x100&bgset=bg1" alt="admin">
					<div class="group">
						<div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{$_admin['fullname']}<span class="caret"></a></span>
							<ul class="dropdown-menu">
								<li><a href="{$_url}settings/users-edit/{$_admin['id']}"><i class="ion ion-person"></i> {$_L['My_Account']}<div class="ripple-wrapper"></div></a></li>
								<li><a href="{$_url}settings/change-password"><i class="ion ion-settings"></i> {$_L['Change_Password']}</a></li>
								<li><a href="{$_url}logout"><i class="ion ion-power"></i> {$_L['Logout']}</a></li>
							</ul>
						</div>
						<small class="desig">{if $_admin['user_type'] eq 'Admin'} {$_L['Administrator']} {else} {$_L['Sales']} {/if}</small>
					</div>
				</div>
			{else}
				<div class="profile clearfix mb15">
					<img src="https://robohash.org/{$_user['id']}?set=set3&size=100x100&bgset=bg1" alt="admin">
					<div class="group">
						<div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{$_user['fullname']}<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="{$_url}accounts/profile"><i class="ion ion-person"></i> {$_L['My_Account']}<div class="ripple-wrapper"></div></a></li>
								<li><a href="{$_url}accounts/change-password"><i class="ion ion-settings"></i> {$_L['Change_Password']}</a></li>
								<li><a href="{$_url}logout"><i class="ion ion-power"></i> {$_L['Logout']}</a></li>
							</ul>
						</div>
						<small class="desig">{$_L['Member']}</small>
					</div>
				</div>
			{/if}

				<ul id="leftMenu" class="list-unstyled clearfix nav-list mb15">
					<li {if $_system_menu eq 'dashboard'}class="active"{/if}>
						<a href="{$_url}dashboard">
							<i class="ion ion-monitor"></i>
							<span class="text">{$_L['Dashboard']}</span>
						</a>
					</li>
					<!-- Message on progress, hide it  -->
					<li class="hidden {if $_system_menu eq 'message'}open{/if}">
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-email"></i>
							<span class="text">{$_L['Private_Message']}</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li {if $_system_menu eq 'message'}class="active"{/if}><a href="{$_url}message/inbox">{$_L['Inbox']}</a></li>
							<li {if $_system_menu eq 'message'}class="active"{/if}><a href="{$_url}message/outbox">{$_L['Outbox']}</a></li>
							<li {if $_system_menu eq 'message'}class="active"{/if}><a href="{$_url}message/compose">{$_L['Compose']}</a></li>
						</ul>
					</li>
				{if $_admin['user_type'] eq 'Admin' || $_admin['user_type'] eq 'Sales'}
					<li {if $_system_menu eq 'master'}class="open"{/if}>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion-gear-a"></i>
							<span class="text">Master</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li {if $_system_menu eq 'master'}class="active"{/if}><a href="{$_url}master/region">{$_L['Region']}</a></li>
							<li {if $_system_menu eq 'master'}class="active"{/if}><a href="{$_url}master/location">{$_L['Location']}</a></li>
							<li {if $_system_menu eq 'master'}class="active"{/if}><a href="{$_url}master/sublocation">{$_L['SubLoc']}</a></li>
							<li {if $_system_menu eq 'master'}class="active"{/if}><a href="{$_url}master/odc">ODC</a></li>
							<li {if $_system_menu eq 'master'}class="active"{/if}><a href="{$_url}master/odp">ODP</a></li>
							<li {if $_system_menu eq 'master'}class="active"{/if}><a href="{$_url}master/customers">{$_L['Customers']}</a></li>
						</ul>
					</li>
					<li {if $_system_menu eq 'pairing'}class="open"{/if}>
						<a href="#" onClick="toggleDropdownMobile(this)">
							<i class="ion ion ion-card"></i>
							<span class="text">Pairing</span>
							<i class="arrow ion-chevron-left"></i>
						</a>
						<ul class="inner-drop list-unstyled">
							<li {if $_system_menu eq 'pairing'}class="active"{/if}><a href="{$_url}pairing/location-odc">{$_L['Location']} - ODC</a></li>
							<li {if $_system_menu eq 'pairing'}class="active"{/if}><a href="{$_url}pairing/subloc-odp">{$_L['SubLoc']} - ODP</a></li>
						</ul>
					</li>
					<li class="title-divider"><hr>Region</li>
					{foreach $dreg as $reg}
						<li {if $_system_menu eq $reg['nama']}class="open"{/if}>
							<a href="#" onClick="toggleDropdownMobile(this)">
								<i class="ion ion-cube"></i>
								<span class="text">{$reg['nama']}</span>
								<i class="arrow ion-chevron-left"></i>
							</a>
							<ul class="inner-drop list-unstyled">
								{foreach $dloc as $loc}
									{if $reg['id'] eq $loc['id_region']}
										<li {if $_system_menu eq 'region'}class="active"{/if}><a href="{$_url}region/{$reg['id']}/{$loc['id']}">{$loc['nama']}</a></li>
									{/if}
								{/foreach}
							</ul>
						</li>
					{/foreach}
				{/if}
				</ul>
			</nav>

			<footer class="nav-foot">
				<p>{date('Y')} &copy; <span>{$_c['CompanyName']}</span></p>
			</footer>
		</aside>
		<script>
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
		</script>
		<div class="content-container" id="content">
			<div class="page {if $_system_menu eq 'dashboard'}page-dashboard{/if}{if $_system_menu eq 'reports'}page-invoice{/if}">

			{if isset($notify)}
				{$notify}
			{/if}