<?php
/* Smarty version 3.1.39, created on 2022-05-12 13:09:45
  from 'C:\xampp\htdocs\alpro\ui\theme\default\region-edit-odp-port.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_627ca4a99245a4_67278986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b15e1f27c6c14b5219aed04d8f0d8845f7f1c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\region-edit-odp-port.tpl',
      1 => 1652335736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_627ca4a99245a4_67278986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
 <?php echo $_smarty_tpl->tpl_vars['namaodp']->value;?>
 -  Port <?php echo $_smarty_tpl->tpl_vars['port']->value['port_odp'];?>
</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
region/<?php echo $_smarty_tpl->tpl_vars['idreg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idodp']->value;?>
/edit_odp_port_post">       
							<input type="hidden" class="form-control" id="idport" name="idport" value="<?php echo $_smarty_tpl->tpl_vars['port']->value['id'];?>
">
							<div class="form-group">
								<label class="col-md-2 control-label">Port ODP</label>
								<div class="col-md-6">
									<input type="text" class="form-control disabled" id="portodp" name="portodp" required autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['port']->value['port_odp'];?>
">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">ID <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="idcustomer" name="idcustomer" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['port']->value['id_pelanggan'];?>
">
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
									<input type="text" class="form-control" id="internetnumb" name="internetnumb" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['port']->value['no_inet'];?>
">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status Port ODC</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option <?php if ($_smarty_tpl->tpl_vars['port']->value['status_port_odp'] == 'ACTIVE') {?>selected<?php }?> value="ACTIVE">ACTIVE</option>
										<option <?php if ($_smarty_tpl->tpl_vars['port']->value['status_port_odp'] == 'IDLE') {?>selected<?php }?> value="IDLE">IDLE</option>
										<option <?php if ($_smarty_tpl->tpl_vars['port']->value['status_port_odp'] == 'CHURN') {?>selected<?php }?> value="CHURN">CHURN</option>
										<option <?php if ($_smarty_tpl->tpl_vars['port']->value['status_port_odp'] == 'BROKEN') {?>selected<?php }?> value="BROKEN">BROKEN</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Revenue</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="revenue" name="revenue" autocomplete="off" 
									placeholder="Rp." value="<?php echo $_smarty_tpl->tpl_vars['revenue']->value;?>
">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">LAT</label>
								<div class="col-md-6">
									<input type="text" maxlength="13" class="form-control decimal" id="lat" name="lat" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['port']->value['lat'];?>
">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">LON</label>
								<div class="col-md-6">
									<input type="text" maxlength="13" class="form-control decimal" id="lon" name="lon" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['port']->value['lon'];?>
">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
region/<?php echo $_smarty_tpl->tpl_vars['idreg']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idodp']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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
