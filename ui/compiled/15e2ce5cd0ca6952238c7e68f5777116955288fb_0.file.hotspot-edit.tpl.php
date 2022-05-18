<?php
/* Smarty version 3.1.39, created on 2021-09-17 15:37:17
  from 'C:\_mywebsites\apipinter\ui\theme\default\hotspot-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614453bd1eaf59_82584775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e2ce5cd0ca6952238c7e68f5777116955288fb' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\hotspot-edit.tpl',
      1 => 1629343892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_614453bd1eaf59_82584775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_Plan'];?>
</div>
						<div class="panel-body">

						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/edit-post">
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['name_plan'];?>
" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Type'];?>
</label>
								<div class="col-md-10">
									<input type="radio" id="Unlimited" name="typebp" value="Unlimited" <?php if ($_smarty_tpl->tpl_vars['d']->value['typebp'] == 'Unlimited') {?> checked <?php }?>> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Unlimited'];?>
 
									<input type="radio" id="Limited" name="typebp" value="Limited" <?php if ($_smarty_tpl->tpl_vars['d']->value['typebp'] == 'Limited') {?> checked <?php }?>> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Limited'];?>
 
								</div>
							</div>
							<div <?php if ($_smarty_tpl->tpl_vars['d']->value['typebp'] == 'Unlimited') {?> style="display:none;" <?php }?> id="Type">
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Limit_Type'];?>
</label>
									<div class="col-md-10">
										<input type="radio" id="Time_Limit" name="limit_type" value="Time_Limit" <?php if ($_smarty_tpl->tpl_vars['d']->value['limit_type'] == 'Time_Limit') {?> checked <?php }?>> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Time_Limit'];?>
 
										<input type="radio" id="Data_Limit" name="limit_type" value="Data_Limit" <?php if ($_smarty_tpl->tpl_vars['d']->value['limit_type'] == 'Data_Limit') {?> checked <?php }?>> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Data_Limit'];?>
 
										<input type="radio" id="Both_Limit" name="limit_type" value="Both_Limit" <?php if ($_smarty_tpl->tpl_vars['d']->value['limit_type'] == 'Both_Limit') {?> checked <?php }?>> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Both_Limit'];?>
 
									</div>
								</div>
							</div>
							<div <?php if ($_smarty_tpl->tpl_vars['d']->value['typebp'] == 'Unlimited') {?> style="display:none;" <?php } elseif (($_smarty_tpl->tpl_vars['d']->value['time_limit']) == '0') {?> style="display:none;" <?php }?> id="TimeLimit">
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Time_Limit'];?>
</label>
									<div class="col-md-4">
										<input type="text" class="form-control" id="time_limit" name="time_limit" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['time_limit'];?>
">
									</div>
									<div class="col-md-2">
										<select class="form-control" id="time_unit" name="time_unit" >
											<option value="Hrs" <?php if ($_smarty_tpl->tpl_vars['d']->value['time_unit'] == 'Hrs') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hrs'];?>
</option>
											<option value="Mins" <?php if ($_smarty_tpl->tpl_vars['d']->value['time_unit'] == 'Mins') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mins'];?>
</option>
										</select>
									</div>
								</div>
							</div>
							<div <?php if ($_smarty_tpl->tpl_vars['d']->value['typebp'] == 'Unlimited') {?> style="display:none;" <?php } elseif (($_smarty_tpl->tpl_vars['d']->value['data_limit']) == '0') {?> style="display:none;" <?php }?> id="DataLimit">
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Data_Limit'];?>
</label>
									<div class="col-md-4">
										<input type="text" class="form-control" id="data_limit" name="data_limit" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['data_limit'];?>
">
									</div>
									<div class="col-md-2">
										<select class="form-control" id="data_unit" name="data_unit">
											<option value="MB" <?php if ($_smarty_tpl->tpl_vars['d']->value['data_unit'] == 'MB') {?> selected <?php }?>>MBs</option>
											<option value="GB" <?php if ($_smarty_tpl->tpl_vars['d']->value['data_unit'] == 'GB') {?> selected <?php }?>>GBs</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['BW_Name'];?>
</label>
								<div class="col-md-6">
									<select id="id_bw" name="id_bw" class="form-control">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['b']->value, 'bs');
$_smarty_tpl->tpl_vars['bs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bs']->value) {
$_smarty_tpl->tpl_vars['bs']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['bs']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value['id_bw'] == $_smarty_tpl->tpl_vars['bs']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['bs']->value['name_bw'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="price" name="price" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['price'];?>
">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Shared_Users'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="sharedusers" name="sharedusers" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['shared_users'];?>
">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Validity'];?>
</label>
								<div class="col-md-4">
									<input type="text" class="form-control" id="validity" name="validity" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['validity'];?>
">
								</div>
								<div class="col-md-2">
									<select class="form-control" id="validity_unit" name="validity_unit">
										<option value="Days" <?php if ($_smarty_tpl->tpl_vars['d']->value['validity_unit'] == 'Days') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Days'];?>
</option>
										<option value="Months" <?php if ($_smarty_tpl->tpl_vars['d']->value['validity_unit'] == 'Months') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months'];?>
</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Name'];?>
</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="routers" name="routers" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['routers'];?>
" readonly>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
									Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/hotspot"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
								</div>
							</div>
						</form>
				
					</div>
				</div>
			</div>
		</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
