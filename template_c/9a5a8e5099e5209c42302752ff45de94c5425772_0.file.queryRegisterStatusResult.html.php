<?php /* Smarty version 3.1.27, created on 2016-04-20 15:10:27
         compiled from "E:\Apache24\htdocs\ZYPC2016-1\tpl\queryRegisterStatusResult.html" */ ?>
<?php
/*%%SmartyHeaderCode:2032257172b634fc746_15858955%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a5a8e5099e5209c42302752ff45de94c5425772' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016-1\\tpl\\queryRegisterStatusResult.html',
      1 => 1461136217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2032257172b634fc746_15858955',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57172b635cf677_98242846',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57172b635cf677_98242846')) {
function content_57172b635cf677_98242846 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2032257172b634fc746_15858955';
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
	<link href="../css/test.css" rel="stylesheet" media="screen">
	<link href="../css/list.css" rel="stylesheet" media="screen">
	</head>
	<body background="../img/bg2.jpg" style="background-size:cover;" >
		
		<div class="elegant-aero" style="width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:-190px;">

			<form action="queryRegisterStatus.php" method="post">
			<table>
				<h1><b>查询结果</b></h1>
				<label>
					<span>编号:</span>
					<input type="text"  name="schoolnum" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
" disabled="disabled" />
				</label>

				
				<label>
					<span>姓名:</span>
					<input type="text"  name="schoolnum" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" disabled="disabled" />
				</label>


				<label>
					<span>班级:</span>
					<input type="text"  name="schoolnum" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['class'];?>
" disabled="disabled" />
				</label>


				<label>
					<span>电话:</span>
					<input type="text"  name="schoolnum" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['tel'];?>
" disabled="disabled" />
				</label>

				

				<label>
				<span>Message:</span>
				<?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == '0') {?>
				<textarea id="message" name="datail" disabled="disabled" placeholder="报名成功,请保持手机通畅,等待我们的通知"></textarea>
				<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == '-1') {?>
				<textarea id="message" name="datail" disabled="disabled" placeholder="A轮面试中"></textarea>
				<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'A') {?>
				<textarea id="message" name="datail" disabled="disabled" placeholder="A轮面试中"></textarea>

				<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == '-2') {?>
				<textarea id="message" name="datail" disabled="disabled" placeholder="B轮面试中"></textarea>

				<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'C') {?>
								<textarea id="message" name="datail" disabled="disabled" placeholder="恭喜你优秀的你通过我们工作室的纳新面试,以后我们就可以一起学习交流啦,再次之前请耐心的我们的短信通知噢。"></textarea>

				<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'D') {?>
								<textarea id="message" name="datail" disabled="disabled" placeholder="很遗憾,您没有通过此次面试.如果您觉得面试时没有完全发挥自己的实力或者对我们工作室情有独钟,可私下联系我们的Boss.我们的工作室在图书馆五楼514."></textarea>

				<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == 'B') {?>
								<textarea id="message" name="datail" disabled="disabled" placeholder="两轮面试结束,等待决策结果"></textarea>
				<?php }?>

			</label>
				<table>
			</form>


			 <a href="../index.html" class="button button-raised button-primary button-pill">信息正确，返回主页</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="../index/message.html" class="button button-raised button-primary button-pill">信息错误，进入留言系统</a>
			
			
		</div>

	</body>
</html><?php }
}
?>