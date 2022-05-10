<?php
/* Smarty version 3.1.39, created on 2022-03-05 00:05:24
  from 'C:\xampp\htdocs\alpro\ui\theme\default\master-edit-subloc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_622246d4357413_49550072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d1bff058d8feb8557c69938624c40f346bc4b76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\master-edit-subloc.tpl',
      1 => 1646413508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_622246d4357413_49550072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_SubLoc'];?>
</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="<?php if ((isset($_smarty_tpl->tpl_vars['idloc']->value))) {
echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/edit_sublocation_post/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;
} else {
echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/edit_sublocation_post/<?php }?>"> 
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">      
							<div class="form-group">
								<label class="col-md-2 control-label">ID <?php echo $_smarty_tpl->tpl_vars['_L']->value['Location'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="idlokasi" name="idlokasi" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id_lokasi'];?>
" required autofocus>
								</div>
								<div class="col-md-4" id="dataTable">

									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalIdLok"><i class="fa fa-cogs"></i>
									</button>

									<div class="modal fade" id="modalIdLok" tabindex="-1" role="dialog" aria-labelledby="modaldIdLokLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="modalIdLokLabel">ID <?php echo $_smarty_tpl->tpl_vars['_L']->value['Location'];?>
</h5>
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
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['nama'];?>
" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option value="Aktif" <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Aktif') {?>selected<?php }?>>Aktif</option>
										<option value="In-Aktif" <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'In-Aktif') {?>selected<?php }?>>In-Aktif</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Home_Pass'];?>
</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="homepass" name="homepass" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['homepass'];?>
"> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Occupancy'];?>
</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="occupancy" name="occupancy"  value="<?php echo $_smarty_tpl->tpl_vars['d']->value['occupancy'];?>
">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
									Or <a href="<?php if ((isset($_smarty_tpl->tpl_vars['idloc']->value))) {
echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/vsubloc_loc<?php echo $_smarty_tpl->tpl_vars['idloc']->value;
} else {
echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/sublocation<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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
