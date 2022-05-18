<?php
/* Smarty version 3.1.39, created on 2022-02-17 16:32:28
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\pairing-add-subloc-odp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620e162c1bba52_34710871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '551975976401044781ee4cfaf834e262888d2f09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\pairing-add-subloc-odp.tpl',
      1 => 1645090237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_620e162c1bba52_34710871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
 - ODP</div>
						<div class="panel-body">
						<form id="formInputTable" class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pairing/add_subloc_odp_post">
						<div class="row">
							<div class="col-md-6">
								<p class=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['SubLoc'];?>
</p>
								<div class="form-group">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'loc');
$_smarty_tpl->tpl_vars['loc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->do_else = false;
?>
										<div class="row">
											<div class="col-lg-10 col-md-6">
												<div class="input-group">
												<span class="input-group-addon">
													<input type="radio" name="sublokasi" value="<?php echo $_smarty_tpl->tpl_vars['loc']->value['id'];?>
"> 
												</span>
												<input type="text" class="form-control disabled" name="namasublokasi" value="<?php echo $_smarty_tpl->tpl_vars['loc']->value['nama'];?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'odp');
$_smarty_tpl->tpl_vars['odp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['odp']->value) {
$_smarty_tpl->tpl_vars['odp']->do_else = false;
?>
										<div class="row">
											<div class="col-lg-10 col-md-6">
												<div class="input-group">
												<span class="input-group-addon">
													<input type="radio" name="odp" value="<?php echo $_smarty_tpl->tpl_vars['odp']->value['id'];?>
" required>
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
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
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
