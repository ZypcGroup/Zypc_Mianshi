<?php /* Smarty version 3.1.27, created on 2016-04-24 18:28:42
         compiled from "E:\Apache24\htdocs\ZYPC2016\tpl\judgerList.html" */ ?>
<?php
/*%%SmartyHeaderCode:11500571c9fda004d91_26209975%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25ed86108449930b7c24f2757f3ffcecaf31372c' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016\\tpl\\judgerList.html',
      1 => 1461113986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11500571c9fda004d91_26209975',
  'variables' => 
  array (
    'judgerArray' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571c9fda204987_76595902',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571c9fda204987_76595902')) {
function content_571c9fda204987_76595902 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11500571c9fda004d91_26209975';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo '<script'; ?>
 src="../js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="../css/buttons.css" rel="stylesheet" media="screen">
	<?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body background="../img/bg5.jpg" style="background-size:cover;" >
		<center><img src="../img/user1.png" style='max-height:160px;max-width:160px;' /></center>
		<table class="table table-hover table-bordered" contenteditable="true">
				<thead>
				<tr>
					<th>面试官编号</th>
					<th>面试官姓名</th>
					<th>面试官姓名电话</th>
				</tr>
			</thead>
			<?php
$_from = $_smarty_tpl->tpl_vars['judgerArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$foreach_val_Sav = $_smarty_tpl->tpl_vars['val'];
?>
				<tbody>
					<tr class="info">
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['jid'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['jname'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['jtel'];?>
</td>
					</tr>
				</tbody>
			<?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
		</table>
		

</body>
</html><?php }
}
?>