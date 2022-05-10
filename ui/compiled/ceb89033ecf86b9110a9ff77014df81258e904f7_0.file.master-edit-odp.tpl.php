<?php
/* Smarty version 3.1.39, created on 2022-03-02 15:56:27
  from 'C:\xampp\htdocs\alpro\ui\theme\default\master-edit-odp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_621f313b5614e5_98087729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceb89033ecf86b9110a9ff77014df81258e904f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\master-edit-odp.tpl',
      1 => 1646211385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_621f313b5614e5_98087729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_ODP'];?>
</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/edit_odp_post" > 
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">      
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['nama'];?>
" required autofocus>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">ID ODC</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="idodc" name="idodc"  value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id_odc'];?>
">
								</div>
								<div class="col-md-4" id="dataTable">

									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalIdOdc"><i class="fa fa-cogs"></i>
									</button>

									<div class="modal fade" id="modalIdOdc" tabindex="-1" role="dialog" aria-labelledby="modaldIdOdcLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modalIdOdcLabel">ID ODC</h5>
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
								<label for="portodc" class="col-md-2 control-label">Port ODC</label>
								<div class="col-md-6" id="dataSelect">
									<select class="form-control" data-idodp="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="portodc" name="portodc" required>

									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status Port ODC</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option value="ACTIVE" <?php if ($_smarty_tpl->tpl_vars['d']->value['status_port_odc'] == 'ACTIVE') {?>selected<?php }?>>ACTIVE</option>
										<option value="UNUSED" <?php if ($_smarty_tpl->tpl_vars['d']->value['status_port_odc'] == 'UNUSED') {?>selected<?php }?>>UNUSED</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Capacity'];?>
</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="capacity" name="capacity" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['kapasitas'];?>
" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">LAT</label>
								<div class="col-md-6">
									<input type="text" class="form-control decimal" id="lat" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['lat'];?>
" \>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">LON</label>
								<div class="col-md-6">
									<input type="text" class="form-control decimal" id="lon" name="lon" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['lon'];?>
"> 
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/odp"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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
