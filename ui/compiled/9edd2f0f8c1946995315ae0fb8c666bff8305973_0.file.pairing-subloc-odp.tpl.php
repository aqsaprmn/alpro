<?php
/* Smarty version 3.1.39, created on 2022-02-18 08:33:19
  from 'C:\xampp\htdocs\alpro\ui\theme\default\pairing-subloc-odp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620ef75fc35a95_68554515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9edd2f0f8c1946995315ae0fb8c666bff8305973' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\pairing-subloc-odp.tpl',
      1 => 1645147998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_620ef75fc35a95_68554515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Main'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
 - ODP</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/odc/">
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
pairing/add_subloc_odp" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
 - ODP</a>
										</div>&nbsp;
									</div>
									<div class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead>
											<tr style="font-size:1.2rem;">
												<th class="text-center">ID ODP</th>
												<th class="text-center">ODP <?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
												<th class="text-center">ID <?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Action'];?>
</th>
											</tr>
										</thead>
										<tbody>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'sublocodp');
$_smarty_tpl->tpl_vars['sublocodp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sublocodp']->value) {
$_smarty_tpl->tpl_vars['sublocodp']->do_else = false;
?>
												<tr style="font-size:1.2rem;">
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sublocodp']->value['id_odp'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['sublocodp']->value['nama_odp'];?>
</td>
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['sublocodp']->value['id_sub_lokasi'];?>
</td>
													<td><?php echo $_smarty_tpl->tpl_vars['sublocodp']->value['nama_sub_lokasi'];?>
</td>
													<td align="center">
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pairing/edit_subloc_odp/<?php echo $_smarty_tpl->tpl_vars['sublocodp']->value['id_odp'];?>
/<?php echo $_smarty_tpl->tpl_vars['sublocodp']->value['id_sub_lokasi'];?>
" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pairing/delete_subloc_odp_post/<?php echo $_smarty_tpl->tpl_vars['sublocodp']->value['id_odp'];?>
/<?php echo $_smarty_tpl->tpl_vars['sublocodp']->value['id_sub_lokasi'];?>
" id=""
														data-idodp="<?php echo $_smarty_tpl->tpl_vars['sublocodp']->value['id_odp'];?>
" 
														data-idsublokasi="<?php echo $_smarty_tpl->tpl_vars['sublocodp']->value['id_sub_lokasi'];?>
" class="btn btn-danger btn-sm cdelete-subloc-odp"><i class="fa fa-trash-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
													</td>
												</tr>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</tbody>
									</table>
									</div>
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
