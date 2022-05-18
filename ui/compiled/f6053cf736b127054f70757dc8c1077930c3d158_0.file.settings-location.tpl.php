<?php
/* Smarty version 3.1.39, created on 2022-02-04 16:09:03
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\settings-location.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61fced2fee4167_22177612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6053cf736b127054f70757dc8c1077930c3d158' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\settings-location.tpl',
      1 => 1643965741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_61fced2fee4167_22177612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Main_Loc'];?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/location/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Name'];?>
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
settings/add_location" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Loc'];?>
</a>
										</div>&nbsp;
									</div>
	
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</th>
												<th>Status</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Home_Pass'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Occupancy'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_SubLoc'];?>
</th>	
											</tr>
										</thead>
										<tbody>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'loc');
$_smarty_tpl->tpl_vars['loc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->do_else = false;
?>
												<tr>
													<td><?php echo $_smarty_tpl->tpl_vars['loc']->value['nama'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['loc']->value['tipe'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['loc']->value['alamat'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['loc']->value['status'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['loc']->value['homepass'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['loc']->value['occupancy'];?>
</td>
													<td align="center" colspan="2">
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit/<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" class="btn btn-warning btn-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/delete_location_post/<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" class="btn btn-danger btn-sm cdelete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
													</td>
													<td align="center">
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add_sub_location/<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
"	
														id="<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" 
														class="btn btn-primary btn-sm"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
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
