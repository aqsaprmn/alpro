<?php
/* Smarty version 3.1.39, created on 2022-02-10 22:32:18
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\pairing-edit-location-odc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62053002634551_67041806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c8c3139541f71664ad7d2fd7a9d8e0e0ec03503' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\pairing-edit-location-odc.tpl',
      1 => 1644507104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_62053002634551_67041806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_Loc'];?>
 - ODC</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pairing/edit_location_odc_post">
						<div class="row">
							<div class="col-md-6">
								<p class=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Location'];?>
</p>
								<div class="form-group">
								<input type="text" class="form-control hidden" name="idodc" value="<?php echo $_smarty_tpl->tpl_vars['idodc']->value;?>
">
								<input type="text" class="form-control hidden" name="idlokasi" value="<?php echo $_smarty_tpl->tpl_vars['idloc']->value;?>
">
								<input type="text" class="form-control hidden" name="idlokasiodc" value="<?php echo $_smarty_tpl->tpl_vars['e']->value->id;?>
">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'loc');
$_smarty_tpl->tpl_vars['loc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->do_else = false;
?>
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
												<span class="input-group-addon">
													<input type="radio" name="lokasi" value="<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
" required <?php if ($_smarty_tpl->tpl_vars['loc']->value['id'] == $_smarty_tpl->tpl_vars['e']->value->id_lokasi) {?>checked<?php }?>> 
												</span>
												<input type="text" class="form-control disabled" name="namalokasi" value="<?php echo $_smarty_tpl->tpl_vars['loc']->value['nama'];?>
">
												</div>
											</div>
										</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
							<div class="col-md-6">
								<p class="">ODC</p>
								<div class="form-group">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'odc');
$_smarty_tpl->tpl_vars['odc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['odc']->value) {
$_smarty_tpl->tpl_vars['odc']->do_else = false;
?>
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
												<span class="input-group-addon">
													<input type="radio" name="odc" value="<?php echo $_smarty_tpl->tpl_vars['odc']->value['id'];?>
" required <?php if ($_smarty_tpl->tpl_vars['odc']->value['id'] == $_smarty_tpl->tpl_vars['e']->value->id_odc) {?>checked<?php }?>>
												</span>
												<input type="text" class="form-control disabled" name="namaodc" value="<?php echo $_smarty_tpl->tpl_vars['odc']->value['nama'];?>
">
												</div>
											</div>
										</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						</div>	
							<div class="form-group">
								<div class=" col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pairing/location-odc"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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
