<?php
/* Smarty version 3.1.39, created on 2022-01-06 16:11:06
  from 'C:\xampp\htdocs\apipinter\ui\theme\default\refill.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61d6b22a2931e0_05154769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f4df42236d75a5eea3b96a6e735ad27e08c75a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\apipinter\\ui\\theme\\default\\refill.tpl',
      1 => 1633005491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_61d6b22a2931e0_05154769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">Aktikan Voucher</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/refill-post" >            
							<div class="form-group">
								<label class="col-md-2 control-label">Kode Voucher</label>

								<div class="col-md-6">
									<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
									<input type="text" class="form-control" id="code" name="code" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['code'];?>
" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Kata Sandi</label>
								<div class="col-md-6">
									<input type="password" class="form-control" id="password" name="password" placeholder="Ketikkan kata sandi">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-success waves-effect waves-light" type="submit">Aktifkan</button> 
									Atau <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher">Batal</a>
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
