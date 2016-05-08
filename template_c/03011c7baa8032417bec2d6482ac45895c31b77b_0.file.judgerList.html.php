<?php /* Smarty version 3.1.27, created on 2016-04-20 08:59:49
         compiled from "E:\Apache24\htdocs\ZYPC2016-1\tpl\judgerList.html" */ ?>
<?php
/*%%SmartyHeaderCode:194145716d48548adb6_89252043%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03011c7baa8032417bec2d6482ac45895c31b77b' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016-1\\tpl\\judgerList.html',
      1 => 1461113986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194145716d48548adb6_89252043',
  'variables' => 
  array (
    'judgerArray' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5716d48551f4d0_88412113',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5716d48551f4d0_88412113')) {
function content_5716d48551f4d0_88412113 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '194145716d48548adb6_89252043';
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