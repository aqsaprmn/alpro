<?php
/* Smarty version 3.1.39, created on 2021-08-19 21:33:41
  from 'C:\_mywebsites\apipinter\ui\theme\default\invoice-print.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611e6bc5493fb1_60257697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4dfca49c1b837c14ab703c2443432007e4f1ca1' => 
    array (
      0 => 'C:\\_mywebsites\\apipinter\\ui\\theme\\default\\invoice-print.tpl',
      1 => 1629343892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611e6bc5493fb1_60257697 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/images/favicon.ico">

	<?php echo '<script'; ?>
 type="text/javascript">
	function printpage() {
		window.print();  
	}
	<?php echo '</script'; ?>
>
</head>

<body topmargin="0" leftmargin="0" onload="printpage()">
<div class="row">
    <div class="col-md-12">
        <table width="200">
			<tr>
				<td>
				<fieldset>
					<center>
					<b><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_c']->value['address'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['_c']->value['phone'];?>
<br>
					</center>
					============================================<br>
					INVOICE: <b><?php echo $_smarty_tpl->tpl_vars['d']->value['invoice'];?>
</b>  -  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
 : <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
 : <?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>
<br>
					============================================<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['d']->value['type'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['d']->value['plan_name'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['d']->value['price'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</b><br>
					<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
 : **********<br>
					<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
 : <b><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['d']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['d']->value['time'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
 : <b><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['d']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['d']->value['time'];?>
</b><br>
					============================================<br>
					<center><?php echo $_smarty_tpl->tpl_vars['_c']->value['note'];?>
</center>
				</fieldset>
				</td>
			</tr>
		</table>
    </div>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/jquery-1.10.2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php if ((isset($_smarty_tpl->tpl_vars['xfooter']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>

</body>
</html>
<?php }
}
