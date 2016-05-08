<?php /* Smarty version 3.1.27, created on 2016-04-20 08:11:41
         compiled from "E:\Apache24\htdocs\ZYPC2016-1\tpl\judgeRecordResult.html" */ ?>
<?php
/*%%SmartyHeaderCode:190875716c93d7f1476_19733204%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '275cd0856d5a70b997023159f6b1c95647ccd71e' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016-1\\tpl\\judgeRecordResult.html',
      1 => 1461109913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190875716c93d7f1476_19733204',
  'variables' => 
  array (
    'recordsArray' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5716c93d9701d6_90923207',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5716c93d9701d6_90923207')) {
function content_5716c93d9701d6_90923207 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '190875716c93d7f1476_19733204';
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

		<center><h1>面试官评价记录</h1></center>
		<table class="table table-hover table-bordered" contenteditable="true">
				<tr>
					<th>面试官姓名</th>
					<th>面试者姓名</th>
					<th>基本技能</th>
					<th>加分技能</th>
					<th>总体评价</th>
					<th>等级评价</th>
					<th>状态</th>
					<th>评价时间</th>
				</tr>
			
			<?php
$_from = $_smarty_tpl->tpl_vars['recordsArray']->value;
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
				
					<tr >
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['jname'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['basic'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['advance'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['general'];?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['val']->value['grade'] == '1') {?>
    						<td>A</td>
						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['grade'] == '2') {?>
   							<td>B</td>
   						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['grade'] == '3') {?>
   								<td>C</td>
   						<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['grade'] == '4') {?>
   								<td>D</td>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == 'A') {?>
							 <td>A轮面试</td>
							<?php } else { ?>
   							<td>B轮面试</td>
						<?php }?>	
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['time'];?>
</td>
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