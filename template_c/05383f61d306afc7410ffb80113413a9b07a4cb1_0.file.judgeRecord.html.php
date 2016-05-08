<?php /* Smarty version 3.1.27, created on 2016-04-17 18:14:44
         compiled from "E:\Apache24\htdocs\ZYPC2016-1\tpl\judgeRecord.html" */ ?>
<?php
/*%%SmartyHeaderCode:10685571362147e6eb9_51832985%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05383f61d306afc7410ffb80113413a9b07a4cb1' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016-1\\tpl\\judgeRecord.html',
      1 => 1459995011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10685571362147e6eb9_51832985',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571362148832d5_74392057',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571362148832d5_74392057')) {
function content_571362148832d5_74392057 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10685571362147e6eb9_51832985';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo '<script'; ?>
 src="./js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
	<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="./css/buttons.css" rel="stylesheet" media="screen">
	<?php echo '<script'; ?>
 src="./js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body >
		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<center>
						<form class="form-search" action="judgeRecordResult.php" method="post">
							<input class="input-medium search-query" name="jname" type="text" placeholder="请输入面试的官的姓名"/> 
							<br><br>
							<button type="submit" class="btn">开始查询</button>
							
						</form>
					</center>
				</div>
			</div>
		</div>

</body>
</html><?php }
}
?>