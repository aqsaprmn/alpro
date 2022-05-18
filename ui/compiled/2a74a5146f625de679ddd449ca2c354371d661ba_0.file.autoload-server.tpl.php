<?php
/* Smarty version 3.1.39, created on 2021-08-19 11:10:49
  from 'C:\_mywebsites\apipinter\ui\theme\default\autoload-server.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611dd9c9a24e22_96839199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a74a5146f625de679ddd449ca2c354371d661ba' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\autoload-server.tpl',
      1 => 1629343892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611dd9c9a24e22_96839199 (Smarty_Internal_Template $_smarty_tpl) {
?><option value="">Select Routers</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
