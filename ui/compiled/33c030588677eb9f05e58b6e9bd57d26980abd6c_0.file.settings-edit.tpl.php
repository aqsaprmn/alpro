<?php
/* Smarty version 3.1.39, created on 2022-01-21 15:53:04
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\settings-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ea7470e32c30_14118524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c030588677eb9f05e58b6e9bd57d26980abd6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\settings-edit.tpl',
      1 => 1642750337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_61ea7470e32c30_14118524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_Loc'];?>
</div>
						<div class="panel-body">
						
						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit_location_post" > 
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">           
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['nama'];?>
" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['tipe'];?>
" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="address" name="alamat" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['nama'];?>
" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="status" name="status" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>
" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Home_Pass'];?>
</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="homepass" name="homepass" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['homepass'];?>
" required> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Occupancy'];?>
</label>
								<div class="col-md-6">
									<input type="number" class="form-control" id="occupancy" name="occupancy"  value="<?php echo $_smarty_tpl->tpl_vars['d']->value['occupancy'];?>
" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/location"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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
