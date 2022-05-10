<?php
/* Smarty version 3.1.39, created on 2022-01-21 09:02:27
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\app-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61ea14337ae814_28019660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe12ad552e0b32297f07a14ee4054d897024433b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\app-settings.tpl',
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
function content_61ea14337ae814_28019660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General_Settings'];?>
</div>
						<div class="panel-body">

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['App_Name'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="company" name="company" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
">
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['App_Name_Help_Text'];?>
</span>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
						<div class="col-md-6">
							<textarea class="form-control" id="address" name="address" rows="3"><?php echo $_smarty_tpl->tpl_vars['_c']->value['address'];?>
</textarea>
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You_can_use_html_tag'];?>
</span>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['phone'];?>
">
						</div>
                    </div>
                    <div class="form-group hidden">
						<label class="col-md-2 control-label">Theme</label>
						<div class="col-md-6">
							<select name="theme" id="theme" class="form-control">
								<option value="default" <?php if ($_smarty_tpl->tpl_vars['_c']->value['theme'] == 'default') {?>selected="selected" <?php }?>>Default</option>
							</select>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label">Note Invoice</label>
						<div class="col-md-6">
							<textarea class="form-control" id="note" name="note" rows="3"><?php echo $_smarty_tpl->tpl_vars['_c']->value['note'];?>
</textarea>
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You_can_use_html_tag'];?>
</span>
						</div>
                    </div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
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
