<?php /* Smarty version 3.1.27, created on 2016-04-24 18:30:01
         compiled from "E:\Apache24\htdocs\ZYPC2016\tpl\userJudge.html" */ ?>
<?php
/*%%SmartyHeaderCode:11224571ca0291c04e0_89375810%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52dd493f661c9cc6a4f6b5babd23c225640ec574' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016\\tpl\\userJudge.html',
      1 => 1460424273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11224571ca0291c04e0_89375810',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571ca0292d5aa3_95005423',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571ca0292d5aa3_95005423')) {
function content_571ca0292d5aa3_95005423 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11224571ca0291c04e0_89375810';
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
						<form class="form-search" action="userJudgeDeal.php" method="get">
							<input class="input-medium search-query" name="schoolnum" type="text" placeholder="请输入面试者的学号"/> 
							<br><br>
							<button type="submit" class="btn">开始评价</button>
							
						</form>
					</center>
				</div>
			</div>
		</div>

</body>
</html><?php }
}
?>