<?php
/* Smarty version 3.1.39, created on 2021-08-19 11:11:48
  from 'C:\_mywebsites\apipinter\ui\theme\default\app-localisation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611dda04e25730_41698266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4d2fb9145bc19b4bfe32e001d0ba60619d651c8' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\app-localisation.tpl',
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
function content_611dda04e25730_41698266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Localisation'];?>
</div>
						<div class="panel-body">

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation-post" >
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Timezone'];?>
</label>
						<div class="col-md-6">
							<select name="tzone" id="tzone" class="form-control">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tlist']->value, 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_c']->value['timezone'] == $_smarty_tpl->tpl_vars['value']->value) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date_Format'];?>
</label>
						<div class="col-md-6">
							<select class="form-control" name="date_format" id="date_format">
								<option value="d/m/Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format'] == 'd/m/Y') {?> selected="selected" <?php }?>><?php echo date('d/m/Y');?>
</option>
								<option value="d.m.Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format'] == 'd.m.Y') {?> selected="selected" <?php }?>><?php echo date('d.m.Y');?>
</option>
								<option value="d-m-Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format'] == 'd-m-Y') {?> selected="selected" <?php }?>><?php echo date('d-m-Y');?>
</option>
								<option value="m/d/Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format'] == 'm/d/Y') {?> selected="selected" <?php }?>><?php echo date('m/d/Y');?>
</option>
								<option value="Y/m/d" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format'] == 'Y/m/d') {?> selected="selected" <?php }?>><?php echo date('Y/m/d');?>
</option>
								<option value="Y-m-d" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format'] == 'Y-m-d') {?> selected="selected" <?php }?>><?php echo date('Y-m-d');?>
</option>
								<option value="M d Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format'] == 'M d Y') {?> selected="selected" <?php }?>><?php echo date('M d Y');?>
</option>
								<option value="d M Y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format'] == 'd M Y') {?> selected="selected" <?php }?>><?php echo date('d M Y');?>
</option>
								<option value="jS M y" <?php if ($_smarty_tpl->tpl_vars['_c']->value['date_format'] == 'jS M y') {?> selected="selected" <?php }?>><?php echo date('jS M y');?>
</option>
							</select>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Default_Language'];?>
</label>
						<div class="col-md-4">
							<select class="form-control" name="lan" id="lan">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lan']->value, 'lans');
$_smarty_tpl->tpl_vars['lans']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lans']->value) {
$_smarty_tpl->tpl_vars['lans']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['lans']->value['folder'];?>
" <?php if ($_smarty_tpl->tpl_vars['_c']->value['language'] == $_smarty_tpl->tpl_vars['lans']->value['folder']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lans']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<div class="col-md-2">
							<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/language" type="button" class="btn btn-line-success btn-icon-inline"><i class="ion ion-android-add"></i><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Language'];?>
</a>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Decimal_Point'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="dec_point" name="dec_point" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Thousands_Separator'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="thousands_sep" name="thousands_sep" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency_Code'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="currency_code" name="currency_code" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
">
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['currency_help'];?>
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
