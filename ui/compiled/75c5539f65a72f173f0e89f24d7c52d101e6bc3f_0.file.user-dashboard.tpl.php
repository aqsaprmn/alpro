<?php
/* Smarty version 3.1.39, created on 2021-08-23 08:44:35
  from 'C:\_mywebsites\apipinter\ui\theme\default\user-dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6122fd83cb2872_71667346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75c5539f65a72f173f0e89f24d7c52d101e6bc3f' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\user-dashboard.tpl',
      1 => 1629683069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/user-header.tpl' => 1,
    'file:sections/user-footer.tpl' => 1,
  ),
),false)) {
function content_6122fd83cb2872_71667346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
							<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
, <?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
</div>
							<div class="panel-body" style="height:296px;max-height:296px;overflow:scroll;">
								<p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome_Text_User'];?>
</p>
									<ul>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/buyonline">Buy Voucher Online</a></li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</a></li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/list-activated"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Activated_Voucher'];?>
</a></li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/change-password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>
</li>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Private_Message'];?>
</li>
									</ul>
							</div>
							</div>
						</div>
						<div class="col-md-6">
							<br class="visible-xs-inline visible-sm-inline">
							<div class="panel panel-default">
							<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Announcement'];?>
</div>
							<div class="panel-body" style="height:296px;max-height:296px;overflow:scroll;">
								<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_path']->value)."/../pages/Announcement.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
							</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<div class="panel panel-default table-condensed">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</div>
								<table class="table table-striped table-bordered">
									<tr>
										<td class="small text-success text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</td>
										<td class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['username'];?>
</td>
									</tr>
									<tr>
										<td class="small text-primary text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</td>
										<td class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['namebp'];?>
</td>
									</tr>
									<tr>
										<td class="small text-info text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</td>
										<td class="small mb15"><?php if ($_smarty_tpl->tpl_vars['_bill']->value['time'] != '') {
echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['_bill']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['_bill']->value['time'];
}?>&nbsp;</td>
									</tr>
									<tr>
										<td class="small text-danger text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</td>
										<td class="small mb15"><?php if ($_smarty_tpl->tpl_vars['_bill']->value['time'] != '') {
echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['_bill']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['_bill']->value['time'];
}?>&nbsp;</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="col-sm-6">
							<br class="visible-xs-inline visible-sm-inline">
							<div class="panel panel-primary panel-hovered panel-stacked mb30">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</div>
								<div class="panel-body">
									<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation-post" >
										<div class="form-group">
											<label class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code_Voucher'];?>
</label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="code" name="code" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Enter_Voucher_Code'];?>
">
											</div>
										</div>
										
										<div class="form-group">
											<div align="center">
												<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</button> 
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
