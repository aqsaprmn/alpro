<?php
/* Smarty version 3.1.39, created on 2021-09-29 16:08:50
  from 'C:\_mywebsites\apipinter\ui\theme\default\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61542d2285eb37_63957193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0121ffc9978cf363f20c55ce3de88e70061c5431' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\register.tpl',
      1 => 1632906528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61542d2285eb37_63957193 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Register'];?>
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
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/main.min.css">

 	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'> -->
	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/ie/matchMedia.js"><?php echo '</script'; ?>
>  <![endif]--> 

</head>
<body id="app" class="app off-canvas body-full">

	<div class="container">
		<div class="hidden-xs" style="height:150px"></div>
		<div class="form-head mb20">
			<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold" style="text-shadow: 2px 2px 4px #757575;"><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</h1>
			<hr>
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

				</div>
			</div>
		<?php }?>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
				<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Registration_Info'];?>
</div>
				<div class="panel-body" style="height:375px;max-height:375px;overflow:scroll;">
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_path']->value)."/../pages/Registration_Info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				</div>
				</div>
			</div>
			<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
register/post" method="post">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">1. <?php echo $_smarty_tpl->tpl_vars['_L']->value['Register_Member'];?>
</div>
					<div class="panel-body">
						<div class="form-container">
							<div class="md-input-container md-float-label">
								<input type="text" required class="md-input" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
" name="username">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
							</div>
							<div class="md-input-container md-float-label">
								<input type="text" required class="md-input" id="fullname" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
" name="fullname">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</label>
							</div>
							<div class="md-input-container md-float-label">
								<input type="text" name="address" id="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" class="md-input">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
							</div>
							<div class="md-input-container md-float-label">
								<input type="text" required class="md-input" value="<?php echo $_smarty_tpl->tpl_vars['phonenumber']->value;?>
" id="phonenumber" name="phonenumber">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">2. <?php echo $_smarty_tpl->tpl_vars['_L']->value['Register_Member'];?>
</div>
					<div class="panel-body">
						<div class="form-container">
							<div class="md-input-container md-float-label">
								<input type="password" required class="md-input" id="password" name="password">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
							</div>
							<div class="md-input-container md-float-label">
								<input type="password" required class="md-input" id="cpassword" name="cpassword">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm_Password'];?>
</label>
							</div>
							<hr>
							<div class="btn-group btn-group-justified mb15">
								<div class="btn-group">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Register'];?>
</button>
								</div>
								<div class="btn-group">
									<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="scripts/vendors.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
