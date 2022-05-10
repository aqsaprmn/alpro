<?php
/* Smarty version 3.1.39, created on 2021-10-05 18:47:32
  from 'C:\_mywebsites\apipinter\ui\theme\default\invoice-pembayaran.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615c3b546b6290_26104595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc5f0af9be331f604587da06257f56f90d11d6fa' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\invoice-pembayaran.tpl',
      1 => 1633434444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_615c3b546b6290_26104595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-hovered mb20 panel-default">
            <div class="panel-heading">Penyetoran Pembayaran Voucher</div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
payment/agent-post">
				<input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['user_id'];?>
">
				<input type="hidden" name="setoran" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['setoran'];?>
">
                    <div class="form-group">
						<label class="col-md-2 control-label">Nama Agen</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fullname'];?>
" readonly>
						</div>
                    </div>

                    <div class="form-group">
						<label class="col-md-2 control-label">Nomor Telpon</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phonenumber'];?>
" readonly>
						</div>
                    </div>
					
                    <div class="form-group">
						<label class="col-md-2 control-label">Alamat</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="address" name="address" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
" readonly>
						</div>
                    </div>
					
                    <div class="form-group">
						<label class="col-md-2 control-label">Total Yang Harus Disetor</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="total" name="total" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>
" readonly>
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-success waves-effect waves-light" type="submit">Bayar Sekarang</button> 
							Atau <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher">Nanti Saja</a>
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
