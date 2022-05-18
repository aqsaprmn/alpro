<?php
/* Smarty version 3.1.39, created on 2021-10-04 19:07:46
  from 'C:\_mywebsites\apipinter\ui\theme\default\prepaid-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615aee9201e331_55660240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6443ea4c591b919e7bf5c649f60981ce0dcada9' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\prepaid-edit.tpl',
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
function content_615aee9201e331_55660240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Account'];?>
</h3></div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/edit-post">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Account'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
" readonly>
						</div>
                    </div>

                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service_Plan'];?>
</label>
						<div class="col-md-6">
							<select id="id_plan" name="id_plan" class="form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value['plan_id'] == $_smarty_tpl->tpl_vars['ps']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['ps']->value['name_plan'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
						</div>
                    </div>
					
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</label>
						<div class="col-md-6">
							<div class="input-group date" id="datepicker1">
								<input type="text" class="form-control" id="recharged_on" name="recharged_on" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['recharged_on'];?>
">
								<span class="input-group-addon ion ion-calendar"></span>
							</div>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</label>
						<div class="col-md-6">
							<div class="input-group date" id="datepicker2">
								<input type="text" class="form-control" id="expiration" name="expiration" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['expiration'];?>
">
								<span class="input-group-addon ion ion-calendar"></span>
							</div>
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</button> 
							Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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
