<?php
/* Smarty version 3.1.39, created on 2022-02-17 10:08:48
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\master-add-region.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620dbc400f7802_24361036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b92928841e8487ae195893ca7bbc87dbdfbd54a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\master-add-region.tpl',
      1 => 1645067321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header-new.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_620dbc400f7802_24361036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header-new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Region'];?>
</div>
						<div class="panel-body">
							<form id="formInputTable" class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/add_region_post">            
								<div class="form-group">
									<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="name" name="name" required autocomplete="off" autofocus>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add'];?>
</button>
										Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
master/region"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
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
