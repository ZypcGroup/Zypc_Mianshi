<?php /* Smarty version 3.1.27, created on 2016-04-20 09:03:22
         compiled from "E:\Apache24\htdocs\ZYPC2016-1\tpl\rootChoice.html" */ ?>
<?php
/*%%SmartyHeaderCode:242265716d55a9718c8_87589687%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d59adf58d67f743503f512a4b28be0bc7d839d' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016-1\\tpl\\rootChoice.html',
      1 => 1461114197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242265716d55a9718c8_87589687',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5716d55a9f2765_46060034',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5716d55a9f2765_46060034')) {
function content_5716d55a9f2765_46060034 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '242265716d55a9718c8_87589687';
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
		<div style="width:500px;height:380px;position:absolute;left:50%;margin-left:-250px;top:50%;margin-top:-190px;">
 		<center>
 		 <a href="../tpl/addJudger.html" class="button button-raised button-primary button-pill">添加面试官</a>
 		 <a href="../admin/judgerList.php" class="button button-raised button-primary button-pill">面试官列表</a>
		</div>
	</body>

</html><?php }
}
?>