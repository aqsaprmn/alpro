<?php
/* Smarty version 3.1.39, created on 2022-03-22 13:35:09
  from 'C:\xampp\htdocs\alpro\ui\theme\default\sections\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62396e1dd051f2_80338377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd75c3e5d7a19167f2d2e1717074600f6231c088' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alpro\\ui\\theme\\default\\sections\\footer.tpl',
      1 => 1647930891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62396e1dd051f2_80338377 (Smarty_Internal_Template $_smarty_tpl) {
?>			</div>
		</div>
	</div>

	<div class="site-settings clearfix hidden-xs">
		<div class="settings clearfix">
			<div class="trigger ion ion-settings left"></div>
			<div class="wrapper left">
				<ul class="list-unstyled other-settings">
					<li class="clearfix mb10">
						<div class="left small">Fixed Header</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox" id="fixedHeader"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
					<li class="clearfix mb10">
						<div class="left small">Nav Full</div>
						<div class="md-switch right">
							<label>
								<input type="checkbox" id="navFull"> 
								<span>&nbsp;</span> 
							</label>
						</div>
					</li>
				</ul>
				<hr/>
				<ul class="themes list-unstyled" id="themeColor">
					<li data-theme="theme-zero" class="active"></li>
					<li data-theme="theme-one"></li>
					<li data-theme="theme-two"></li>
					<li data-theme="theme-three"></li>
					<li data-theme="theme-four"></li>
					<li data-theme="theme-five"></li>
					<li data-theme="theme-six"></li>
					<li data-theme="theme-seven"></li>
				</ul>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/vendors.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/screenfull.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/waves.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/bootstrap-colorpicker.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/bootstrap-slider.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/summernote.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="ui/lib/js/bootbox.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/app.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/custom.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/customAqsha.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/form-elements.init.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/chart.min.js"><?php echo '</script'; ?>
>
<?php if ((isset($_smarty_tpl->tpl_vars['xfooter']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['fetchApi']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['fetchApi']->value;?>

<?php }?>
		
</body>
</html><?php }
}
