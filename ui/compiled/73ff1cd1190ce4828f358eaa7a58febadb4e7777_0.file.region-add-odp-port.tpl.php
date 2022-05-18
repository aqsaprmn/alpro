<?php
/* Smarty version 3.1.39, created on 2022-05-12 13:09:20
  from 'C:\xampp\htdocs\alpro\ui\theme\default\region-add-odp-port.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_627ca490a4a950_21899732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73ff1cd1190ce4828f358eaa7a58febadb4e7777' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\region-add-odp-port.tpl',
      1 => 1652335759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_627ca490a4a950_21899732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
 ODP Port - <?php echo $_smarty_tpl->tpl_vars['namaodp']->value;?>
</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
region/<?php echo $_smarty_tpl->tpl_vars['idreg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idodp']->value;?>
/add_odp_port_post">       
							<div class="form-group">
								<label class="col-md-2 control-label">Port ODP</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="portodp" required>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['portsisa']->value, 'port');
$_smarty_tpl->tpl_vars['port']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['port']->value) {
$_smarty_tpl->tpl_vars['port']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['port']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['port']->value;?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">ID <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="idcustomer" name="idcustomer" autocomplete="off">
								</div>
								<div class="col-md-4" id="dataTable">

									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalIdCust"><i class="fa fa-cogs"></i>
									</button>

									<div class="modal fade" id="modalIdCust" tabindex="-1" role="dialog" aria-labelledby="modaldCustLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modaldCustLabel">ID Pelanggan</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body-h500">
													<div class="col-sm-12"> 
														<input id="search" value="" class="form-control" type="search" placeholder="Search" aria-label="Search">
													</div>
													<div id="loader" class="col-sm-12 text-center dnone h90 justify-content-center">
														<img style="width:50px" src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/images/spinner.gif" class="loader" alt="">
													</div>
													<div class="col-sm-12 dataTable table-responsive h90 overflow-y" >
														<table class="table table-collapse tableInput" style="font-size:1.2rem;">
															<tbody>

															</tbody>
														</table>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Internet_Numb'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="internetnumb" name="internetnumb" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status Port ODC</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option value="ACTIVE">ACTIVE</option>
										<option value="IDLE">IDLE</option>
										<option value="CHURN">CHURN</option>
										<option value="BROKEN">BROKEN</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Revenue</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="revenue" placeholder="Rp." name="revenue" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">LAT</label>
								<div class="col-md-6">
									<input type="text" class="form-control decimal" id="lat" name="lat" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">LON</label>
								<div class="col-md-6">
									<input type="text" class="form-control decimal" id="lon" name="lon" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
</button>
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
region/<?php echo $_smarty_tpl->tpl_vars['idreg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idodp']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
