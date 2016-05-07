<?php /* Smarty version 3.1.27, created on 2016-04-20 07:52:55
         compiled from "E:\Apache24\htdocs\ZYPC2016-1\tpl\welcomeJudger.html" */ ?>
<?php
/*%%SmartyHeaderCode:14125716c4d79f7439_39471089%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe93727f768cbff834b8161d37ede6120aa707f8' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016-1\\tpl\\welcomeJudger.html',
      1 => 1461109946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14125716c4d79f7439_39471089',
  'variables' => 
  array (
    'judgerName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5716c4d7cc2266_79873024',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5716c4d7cc2266_79873024')) {
function content_5716c4d7cc2266_79873024 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14125716c4d79f7439_39471089';
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
	
	<body >
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="hero-unit">
						<h1>
							欢迎<?php echo $_smarty_tpl->tpl_vars['judgerName']->value;?>
面试官
						</h1>
							<p>
							欢迎进入智邮普创工作室2016纳新面试系统，作为面试官，我们应该对每一个报名面试的同学做出认真评价。
							</p>
							<br><br>
							<p>
							<a class="btn btn-primary btn-large" href="userList.php">查看报名列表</a>
							<a class="btn btn-primary btn-large" href="userJudge.php">开始面试评价</a>
							</p>
					</div>
				</div>
			</div>
		</div>
</body>
</html><?php }
}
?>