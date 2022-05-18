<?php
/* Smarty version 3.1.39, created on 2022-01-13 14:42:13
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61dfd7d5eafa25_49397282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d8eb33e446b9c730046d0b03216211c21de6a26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\voucher.tpl',
      1 => 1642059149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_61dfd7d5eafa25_49397282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading">VOUCHER PINTER</div>
								<div class="panel-body">
								<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin') {?>
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="code" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Code'];?>
...">
												<div class="input-group-btn">
													<button class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<div class="btn-group btn-group-justified" role="group">
												<div class="btn-group" role="group">
												<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/add-voucher" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Voucher'];?>
</a>
												</div>
												<div class="btn-group" role="group">
												<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/print-voucher" target="print_voucher" class="btn btn-info"><i class="ion ion-android-print"> </i> Print</a>
												</div>
											</div>
										</div>&nbsp;
									</div>
								<?php }?>
						<div class="table-responsive">
						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr> 
									<th>Paket</th>
									<th>Kode</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == '0' || $_smarty_tpl->tpl_vars['ds']->value['status'] == '1') {?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['code'];?>
</td>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == '0') {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher-refill/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-primary btn-sm">Aktifkan</a>
										<?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher-refill/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-sm" disabled>Terjual</a>
										<?php }?>
									</td>
								</tr>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
						</div>
						<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

								</div>
							</div>
						</div>
					</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
