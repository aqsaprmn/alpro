<?php
/* Smarty version 3.1.39, created on 2021-09-30 19:38:16
  from 'C:\_mywebsites\apipinter\ui\theme\default\refill.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155afb8d75bf3_86236741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8161fd5231abd9012d819a68b26c688c729d970a' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\refill.tpl',
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
function content_6155afb8d75bf3_86236741 (Smarty_Internal_Template $_smarty_tpl) {
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
