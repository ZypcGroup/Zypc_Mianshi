<?php /* Smarty version 3.1.27, created on 2016-04-20 08:20:02
         compiled from "E:\Apache24\htdocs\ZYPC2016-1\tpl\pass.html" */ ?>
<?php
/*%%SmartyHeaderCode:10095716cb32eb6681_38000093%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7503e4cf24e5eb22f09d4cd6aff6117004067d22' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016-1\\tpl\\pass.html',
      1 => 1461109928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10095716cb32eb6681_38000093',
  'variables' => 
  array (
    'passUser' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5716cb3304eec5_74327377',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5716cb3304eec5_74327377')) {
function content_5716cb3304eec5_74327377 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10095716cb32eb6681_38000093';
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
	<link href="../css/list.css" rel="stylesheet" media="screen">
	<?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body background="../img/bg5.jpg" style="background-size:cover;" >
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<center><h1>通过面试同学列表</h1></center>
		<div >
		
			<table class="table table-hover table-bordered" contenteditable="true" >
				<tr>
						<th>编号</th>
						<th>姓名</th>
						<th>学号</th>
						<th>电话</th>
						<th>班级</th>
						<th>面试记录</th>
					</tr>
				
				<?php
$_from = $_smarty_tpl->tpl_vars['passUser']->value;
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
					
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['userid'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['schoolnum'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['tel'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['class'];?>
</td>
							<td><a href="userJudgeRecordResult.php?schoolnum=<?php echo $_smarty_tpl->tpl_vars['val']->value['schoolnum'];?>
">点此查看面试记录</a></td>
							
						</tr>
				
				<?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
			</table>
</body>
</html><?php }
}
?>