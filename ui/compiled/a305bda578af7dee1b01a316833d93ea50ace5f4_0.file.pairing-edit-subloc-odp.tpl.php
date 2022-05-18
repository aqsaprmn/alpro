<?php
/* Smarty version 3.1.39, created on 2022-02-17 20:17:03
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\pairing-edit-subloc-odp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620e4acf3706f9_24093609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a305bda578af7dee1b01a316833d93ea50ace5f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\pairing-edit-subloc-odp.tpl',
      1 => 1645103772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_620e4acf3706f9_24093609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_SubLoc'];?>
 - ODP</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pairing/edit_subloc_odp_post">
						<div class="row">
							<div class="col-md-6">
								<p class=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
</p>
								<div class="form-group">
								<input type="text" class="form-control hidden" name="idodp" value="<?php echo $_smarty_tpl->tpl_vars['idodp']->value;?>
">
								<input type="text" class="form-control hidden" name="idsublokasi" value="<?php echo $_smarty_tpl->tpl_vars['idsubloc']->value;?>
">
								<input type="text" class="form-control hidden" name="idsublokasiodp" value="<?php echo $_smarty_tpl->tpl_vars['e']->value->id;?>
">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'subloc');
$_smarty_tpl->tpl_vars['subloc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subloc']->value) {
$_smarty_tpl->tpl_vars['subloc']->do_else = false;
?>
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
												<span class="input-group-addon">
													<input type="radio" name="sublokasi" value="<?php echo $_smarty_tpl->tpl_vars['subloc']->value['id'];?>
" required <?php if ($_smarty_tpl->tpl_vars['subloc']->value['id'] == $_smarty_tpl->tpl_vars['e']->value->id_sub_lokasi) {?>checked<?php }?>> 
												</span>
												<input type="text" class="form-control disabled" name="namasublokasi" value="<?php echo $_smarty_tpl->tpl_vars['subloc']->value['nama'];?>
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
								<p class="">ODP</p>
								<div class="form-group">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'odp');
$_smarty_tpl->tpl_vars['odp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['odp']->value) {
$_smarty_tpl->tpl_vars['odp']->do_else = false;
?>
										<div class="row">
											<div class="col-md-10">
												<div class="input-group">
												<span class="input-group-addon">
													<input type="radio" name="odp" value="<?php echo $_smarty_tpl->tpl_vars['odp']->value['id'];?>
" required <?php if ($_smarty_tpl->tpl_vars['odp']->value['id'] == $_smarty_tpl->tpl_vars['e']->value->id_odp) {?>checked<?php }?>>
												</span>
												<input type="text" class="form-control disabled" name="namaodp" value="<?php echo $_smarty_tpl->tpl_vars['odp']->value['nama'];?>
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
pairing/subloc-odp"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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
