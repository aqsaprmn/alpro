<?php
/* Smarty version 3.1.39, created on 2021-08-23 08:44:12
  from 'C:\_mywebsites\apipinter\ui\theme\default\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6122fd6cadb347_46627655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8352e9fd66e746c8d8055ef825bbcc4ca53df03b' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\404.tpl',
      1 => 1629343892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/user-header.tpl' => 1,
    'file:sections/user-footer.tpl' => 1,
  ),
),false)) {
function content_6122fd6cadb347_46627655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/user-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="page page-err clearfix">
				<div class="err-container">
					<h1 class="m404 mb0">404 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
home" class="ion ion-forward" title="go to dashboard"></a></h1>
					<p class="text-desc mb20">Coming Soon!! Next Version...</p>
				</div>
			</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/user-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
