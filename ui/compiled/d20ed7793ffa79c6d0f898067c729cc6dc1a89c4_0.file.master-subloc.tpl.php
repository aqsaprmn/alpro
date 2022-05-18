<?php
/* Smarty version 3.1.39, created on 2022-02-17 10:04:31
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\master-subloc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620dbb3fcfe696_52377613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd20ed7793ffa79c6d0f898067c729cc6dc1a89c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\master-subloc.tpl',
      1 => 1645065805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_620dbb3fcfe696_52377613 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Main'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/sublocation/">
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
master/add_sublocation" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
</a>
										</div>&nbsp;
									</div>
	
									<table class="table table-bordered table-striped">
										<thead>
											<tr style="font-size:1.2rem;">
												<th class="text-center">Id <?php echo $_smarty_tpl->tpl_vars['_L']->value['Location'];?>
</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
												<th class="text-center">Status</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Home_Pass'];?>
</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Map'];?>
</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Occupancy'];?>
</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Action'];?>
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
												<tr style="font-size:1.2rem;">
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['loc']->value['id_lokasi'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['loc']->value['nama'];?>
</td>
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['loc']->value['status'];?>
</td>
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['loc']->value['homepass'];?>
</td>
													<td class="text-center">Map</td>
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['loc']->value['occupancy'];?>
</td>
													<td align="center">
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
 master/edit_sublocation/<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/delete_sublocation_post/<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" class="btn btn-danger btn-sm cdelete-subloc"><i class="fa fa-trash-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
													</td>
												</tr>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</tbody>
									</table>
									<?php if ($_smarty_tpl->tpl_vars['paginator']->value == !null) {?>
									<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

									<?php }?>
								</div>
							</div>
						</div>
					</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
