<?php
/* Smarty version 3.1.39, created on 2022-07-14 15:54:49
  from 'C:\xampp\htdocs\alpro\ui\theme\default\region-odp-port.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cfd9d9062268_30438666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4c3278f73941883849d7ca80ece7f99b81439ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\region-odp-port.tpl',
      1 => 1657788404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_62cfd9d9062268_30438666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
								<div class="panel-body">
									<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
region/<?php echo $_smarty_tpl->tpl_vars['idreg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idodp']->value;?>
">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="keyword" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_Data'];?>
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
region/<?php echo $_smarty_tpl->tpl_vars['idreg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idodp']->value;?>
/add_odp_port" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
 ODP Port</a>
										</div>&nbsp;
									</div>
									<?php if ((isset($_smarty_tpl->tpl_vars['msg']->value))) {?>
									<div class="mb10">
										<span class=""><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</span>
									</div>
									<?php } else { ?>
									<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr style="font-size:1.1rem;">
												<th class="text-center">Port ODP</th>
												<th class="text-center hidden">ID <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cust_Name'];?>
</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cust_Address'];?>
</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Internet_Numb'];?>
</th>
												<th class="text-center">Status Port ODP</th>
												<th class="text-center">Revenue</th>
												<th class="text-center hidden">LAT</th>
												<th class="text-center hidden">LON</th>
												<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Action'];?>
</th>
											</tr>
										</thead>
										<tbody>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['port']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
												<tr style="font-size:1.1rem;">
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['po']->value['port_odp'];?>
</td>
													<td class="text-center hidden"><?php echo $_smarty_tpl->tpl_vars['po']->value['id_pelanggan'];?>
</td>
													<td style="width:160px;" class=""><?php echo $_smarty_tpl->tpl_vars['po']->value['nama'];?>
</td>
													<td class=""><?php echo $_smarty_tpl->tpl_vars['po']->value['alamat'];?>
</td>
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['po']->value['no_inet'];?>
</td>
													<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['po']->value['status_port_odp'];?>
</td>
													<td class="">Rp. <?php echo $_smarty_tpl->tpl_vars['po']->value['revenue'];?>
</td>
													<td class="text-center hidden"><?php echo $_smarty_tpl->tpl_vars['po']->value['lat'];?>
</td>
													<td class="text-center hidden"><?php echo $_smarty_tpl->tpl_vars['po']->value['lon'];?>
</td>
													<td style="width:160px;" class="text-center">
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
region/<?php echo $_smarty_tpl->tpl_vars['idreg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idodp']->value;?>
/edit_odp_port/<?php echo $_smarty_tpl->tpl_vars['po']->value['id'];?>
" class="btn btn-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
														<a href="" id="<?php echo $_smarty_tpl->tpl_vars['po']->value['id'];?>
" data-reg="<?php echo $_smarty_tpl->tpl_vars['idreg']->value;?>
" data-loc="<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
" data-odp="<?php echo $_smarty_tpl->tpl_vars['idodp']->value;?>
" class="btn btn-danger btn-sm cdelete-odp-port"><i class="fa fa-trash-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
													</td>
												</tr>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</tbody>
									</table>
									<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
