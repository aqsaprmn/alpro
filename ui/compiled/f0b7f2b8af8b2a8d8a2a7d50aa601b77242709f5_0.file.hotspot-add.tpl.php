<?php
/* Smarty version 3.1.39, created on 2021-08-19 11:11:13
  from 'C:\_mywebsites\apipinter\ui\theme\default\hotspot-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611dd9e184ea60_96974979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0b7f2b8af8b2a8d8a2a7d50aa601b77242709f5' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\hotspot-add.tpl',
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
function content_611dd9e184ea60_96974979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Plan'];?>
</div>
						<div class="panel-body">

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/add-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="name" name="name">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Type'];?>
</label>
						<div class="col-md-10">
							<input type="radio" id="Unlimited" name="typebp" value="Unlimited" checked> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Unlimited'];?>
 
							<input type="radio" id="Limited" name="typebp" value="Limited"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Limited'];?>
 
						</div>
                    </div>
					<div style="display:none;" id="Type">
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Limit_Type'];?>
</label>
							<div class="col-md-10">
								<input type="radio" id="Time_Limit" name="limit_type" value="Time_Limit" checked> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Time_Limit'];?>
 
								<input type="radio" id="Data_Limit" name="limit_type" value="Data_Limit"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Data_Limit'];?>
 
								<input type="radio" id="Both_Limit" name="limit_type" value="Both_Limit"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Both_Limit'];?>
 
							</div>
						</div>
					</div>
					<div style="display:none;" id="TimeLimit">
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Time_Limit'];?>
</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="time_limit" name="time_limit" value="0">
							</div>
							<div class="col-md-2">
								<select class="form-control" id="time_unit" name="time_unit">
									<option value="Hrs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hrs'];?>
</option>
									<option value="Mins"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mins'];?>
</option>
								</select>
							</div>
						</div>
					</div>
					<div style="display:none;" id="DataLimit">
						<div class="form-group">
							<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Data_Limit'];?>
</label>
							<div class="col-md-4">
								<input type="text" class="form-control" id="data_limit" name="data_limit" value="0">
							</div>
							<div class="col-md-2">
								<select class="form-control" id="data_unit" name="data_unit">
									<option value="MB">MBs</option>
									<option value="GB">GBs</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['BW_Name'];?>
</label>
						<div class="col-md-6">
							<select id="id_bw" name="id_bw" class="form-control">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_BW'];?>
...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_bw'];?>
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
							<input type="text" class="form-control" id="pricebp" name="pricebp">
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Shared_Users'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="sharedusers" name="sharedusers" value="1">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Validity'];?>
</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="validity" name="validity">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="validity_unit" name="validity_unit">
								<option value="Days"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Days'];?>
</option>
								<option value="Months"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months'];?>
</option>
							</select>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Router_Name'];?>
</label>
						<div class="col-md-6">
							<select id="routers" name="routers" class="form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['r']->value, 'rs');
$_smarty_tpl->tpl_vars['rs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
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
