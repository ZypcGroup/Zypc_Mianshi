<?php /* Smarty version 3.1.27, created on 2016-04-24 19:19:39
         compiled from "E:\Apache24\htdocs\ZYPC2016\tpl\userList.html" */ ?>
<?php
/*%%SmartyHeaderCode:11337571cabcb232e31_25311865%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0f801cb8f472a944662198c2d9235c3ab728789' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016\\tpl\\userList.html',
      1 => 1461496088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11337571cabcb232e31_25311865',
  'variables' => 
  array (
    'userArray' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571cabcb31d470_20482245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571cabcb31d470_20482245')) {
function content_571cabcb31d470_20482245 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11337571cabcb232e31_25311865';
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
	<body background="../img/bg5.jpg" style="background-size:cover;">
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<center><h1>报名列表</h1></center>
		<table class="table table-hover table-bordered" >
				<thead>
				<tr>
					<th>编号</th>
					<th>姓名</th>
					<th>学号</th>
					<th>电话</th>
					<th>班级</th>
					<th>状态</th>
					<th>报名时间</th>
					
				</tr>
			</thead>
			<?php
$_from = $_smarty_tpl->tpl_vars['userArray']->value;
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
					<tr >
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
						<?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == 'A') {?>
							 <td>A轮面试结束,等待B轮面试</td>
						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['status'] == 'B') {?>
   							<td>B轮面试结束,等待面试结果</td>
   						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['status'] == '0') {?>
   							<td>报名成功，等待面试</td>
   						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['status'] == '-1') {?>
   							<td>A轮面试中</td>
   						<?php } else { ?>
   							<td>B轮面试中</td>
						<?php }?>	
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['regtime'];?>
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