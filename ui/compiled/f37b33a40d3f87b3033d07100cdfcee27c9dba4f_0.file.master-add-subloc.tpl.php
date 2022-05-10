<?php
/* Smarty version 3.1.39, created on 2022-03-04 23:55:59
  from 'C:\xampp\htdocs\alpro\ui\theme\default\master-add-subloc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6222449f2207f6_24035493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f37b33a40d3f87b3033d07100cdfcee27c9dba4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\master-add-subloc.tpl',
      1 => 1646412717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6222449f2207f6_24035493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="<?php if ((isset($_smarty_tpl->tpl_vars['idloc']->value))) {
echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/add_sublocation_post/<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
/<?php } else {
echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/add_sublocation_post/<?php }?>">      
							<div class="form-group">
								<label class="col-md-2 control-label">ID <?php echo $_smarty_tpl->tpl_vars['_L']->value['Location'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="idlokasi" id="idlokasi" required autocomplete="off" value="<?php if ((isset($_smarty_tpl->tpl_vars['idloc']->value))) {
echo $_smarty_tpl->tpl_vars['idloc']->value;
}?>">
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
									<input type="text" class="form-control" id="name" name="name" required autocomplete="off" autofocus>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status</label>
								<div class="col-md-6">
									<select class="form-select form-select-lg" name="status">
										<option value="Aktif" selected>Aktif</option>
										<option value="In-Aktif">In-Aktif</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Home_Pass'];?>
</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="homepass" name="homepass" autocomplete="off"> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Occupancy'];?>
</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="occupancy" name="occupancy" autocomplete="off">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
</button>
									Or <a href="<?php if ((isset($_smarty_tpl->tpl_vars['idloc']->value))) {
echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/vsubloc_loc<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
/<?php } else {
echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/sublocation/<?php }?>"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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
