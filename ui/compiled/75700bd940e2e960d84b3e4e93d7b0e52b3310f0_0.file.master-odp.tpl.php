<?php
/* Smarty version 3.1.39, created on 2022-02-15 16:14:35
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\master-odp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620b6efb079f21_88839903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75700bd940e2e960d84b3e4e93d7b0e52b3310f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\master-odp.tpl',
      1 => 1644916473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_620b6efb079f21_88839903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">Main ODP</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/odp/">
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
master/add_odp" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
 ODP</a>
										</div>&nbsp;
									</div>
	
									<table class="table table-bordered table-striped">
										<thead>
											<tr style="font-size:1.2rem;">
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
												<th class="text-center">ID ODC</th>
												<th class="text-center">LAT</th>
												<th class="text-center">LON</th>
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
													<td><?php echo $_smarty_tpl->tpl_vars['loc']->value['nama'];?>
</td>
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['loc']->value['id_odc'];?>
</td>
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['loc']->value['lat'];?>
</td>
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['loc']->value['lon'];?>
</td>
													<td align="center">
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/edit_odp/<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/delete_odp_post/<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" class="btn btn-danger btn-sm cdelete-odp"><i class="fa fa-trash-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
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
