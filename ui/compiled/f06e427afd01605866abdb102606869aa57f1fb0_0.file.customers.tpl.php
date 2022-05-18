<?php
/* Smarty version 3.1.39, created on 2022-01-21 10:03:38
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ea228a006786_61272390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06e427afd01605866abdb102606869aa57f1fb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\customers.tpl',
      1 => 1642733247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_61ea228a006786_61272390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Accounts'];?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="username" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Username'];?>
...">
												<div class="input-group-btn">
													<button class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Customer'];?>
</a>
										</div>&nbsp;
									</div>
	
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Witel'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Site'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['SC_Number'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Internet_Number'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Installation'];?>
</th>	
												<th>Status</th>	
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Update_Delete'];?>
</th>	
											</tr>
										</thead>
										<tbody>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['phonenumber'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['created_at'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['created_at'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['created_at'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['created_at'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['created_at'];?>
</td>
												
												<td align="center">
													<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-warning btn-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
													<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-sm cdelete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
												</td>
											</tr>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</tbody>
									</table>
									<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

								</div>
							</div>
						</div>
					</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
