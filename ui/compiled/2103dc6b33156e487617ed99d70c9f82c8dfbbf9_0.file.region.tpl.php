<?php
/* Smarty version 3.1.39, created on 2022-04-18 15:50:16
  from 'C:\xampp\htdocs\alpro\ui\theme\default\region.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_625d264891aba4_79764926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2103dc6b33156e487617ed99d70c9f82c8dfbbf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\region.tpl',
      1 => 1647332566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_625d264891aba4_79764926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-12">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
region/<?php echo $_smarty_tpl->tpl_vars['idreg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
">
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
										&nbsp;
									</div>
									<?php if ((isset($_smarty_tpl->tpl_vars['msg']->value))) {?>
										<div class="mb10">
											<span class=""><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</span>
										</div>
									<?php } else { ?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['odc']->value, 'odca');
$_smarty_tpl->tpl_vars['odca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['odca']->value) {
$_smarty_tpl->tpl_vars['odca']->do_else = false;
?>
										<div class="mb10">
											<span class="text-bold">ODC : </span> <?php echo $_smarty_tpl->tpl_vars['odca']->value['nama_odc'];?>

										</div>
										<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr style="font-size:1.2rem;">
													<th class="text-center">ID</th>
													<th class="text-center">ODP <?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
													<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Capacity'];?>
</th>
													<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Over'];?>
</th>
													<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Action'];?>
</th>
												</tr>
											</thead>
											<tbody>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['odp']->value, 'odpa');
$_smarty_tpl->tpl_vars['odpa']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['odpa']->value) {
$_smarty_tpl->tpl_vars['odpa']->do_else = false;
?>
														<?php if ($_smarty_tpl->tpl_vars['odpa']->value['id_odc'] == $_smarty_tpl->tpl_vars['odca']->value['id_odc']) {?>
														<tr style="font-size:1.2rem;">
															<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['odpa']->value['id'];?>
</td>
															<td><?php echo $_smarty_tpl->tpl_vars['odpa']->value['nama'];?>
</td>
															<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['odpa']->value['kapasitas'];?>
</td>
															<td class="text-center"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['portodpsisa']->value, 'portsi');
$_smarty_tpl->tpl_vars['portsi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['portsi']->value) {
$_smarty_tpl->tpl_vars['portsi']->do_else = false;
if ($_smarty_tpl->tpl_vars['portsi']->value['idodp'] == $_smarty_tpl->tpl_vars['odpa']->value['id']) {
echo $_smarty_tpl->tpl_vars['portsi']->value['portsisa'];
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td>
															<td style="width:160px;" class="text-center">
																<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
region/<?php echo $_smarty_tpl->tpl_vars['idreg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['odpa']->value['id'];?>
" class="btn btn-primary btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['odpa']->value['id'];?>
"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>
															</td>
														</tr>
														<?php }?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</tbody>
										</table>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
