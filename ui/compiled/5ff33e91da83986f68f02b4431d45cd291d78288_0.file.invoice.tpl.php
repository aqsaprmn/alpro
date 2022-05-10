<?php
/* Smarty version 3.1.39, created on 2021-10-05 10:15:02
  from 'C:\_mywebsites\apipinter\ui\theme\default\invoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615bc3362ba866_99763142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ff33e91da83986f68f02b4431d45cd291d78288' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\invoice.tpl',
      1 => 1633348729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_615bc3362ba866_99763142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
	<div class="col-md-6 col-sm-12">
		<div class="panel panel-hovered panel-default panel-stacked mb30">
			<div class="panel-heading">KUITANSI</div>
			<div class="panel-body">
				<div class="well">
				<fieldset>
					<center>
					<b><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_c']->value['address'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['_c']->value['phone'];?>
<br>
					</center>
					====================================================<br>
					KUITANSI: <b><?php echo $_smarty_tpl->tpl_vars['in']->value['invoice'];?>
</b> - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
 : <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
<br>
					Nama Agen : <?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>
<br>
					====================================================<br>
					Tipe : <b><?php echo $_smarty_tpl->tpl_vars['in']->value['type'];?>
</b><br>
					Nama Paket : <b><?php echo $_smarty_tpl->tpl_vars['in']->value['plan_name'];?>
</b><br>
					Harga : <b><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['in']->value['price'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</b><br>
					<br>
					Kode Voucher : <b><?php echo $_smarty_tpl->tpl_vars['in']->value['username'];?>
</b><br>
					<br>
					<br>
					Mulai Berlaku : <b><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['in']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['in']->value['time'];?>
</b><br>
					Habis Berlaku : <b><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['in']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['in']->value['time'];?>
</b><br>
					=====================================================<br>
					<center><?php echo $_smarty_tpl->tpl_vars['_c']->value['note'];?>
</center>
				</fieldset>
				</div>
				<form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/print" target="_blank">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['in']->value['id'];?>
">
					<button type="submit" class="btn btn-default btn-sm" disabled><i class="fa fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Click_Here_to_Print'];?>
</button>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher" class="btn btn-primary"><i class="ion-reply-all"></i><?php echo $_smarty_tpl->tpl_vars['_L']->value['Finish'];?>
</a>
				</form>
				
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var s5_taf_parent = window.location;
	function popup_print() {
	window.open('print.php?page=<?php echo '<?php ';?>
echo $_GET['act'];<?php echo '?>';?>
','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=800,height=600,left=50,top=50,titlebar=yes')
	}
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
