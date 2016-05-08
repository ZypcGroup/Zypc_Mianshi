<?php /* Smarty version 3.1.27, created on 2016-04-20 07:52:55
         compiled from "E:\Apache24\htdocs\ZYPC2016-1\tpl\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:167495716c4d7d43105_28209740%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17abbb02f53bb1a7a07aa4cc1e9c7dbff34a4294' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016-1\\tpl\\header.html',
      1 => 1461109917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167495716c4d7d43105_28209740',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5716c4d7d4ec88_01681228',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5716c4d7d4ec88_01681228')) {
function content_5716c4d7d4ec88_01681228 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '167495716c4d7d43105_28209740';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo '<script'; ?>
 src="../js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>

	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<link href="../css/buttons.css" rel="stylesheet" media="screen">

	</head>

	<body background="../img/bg5.jpg" style="background-size:cover;" >
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="navbar">
						<div class="navbar-inner">
							<div class="container-fluid">
								 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="welcomeJudger.php" class="brand">智邮普创工作室面试系统</a>
								<div class="nav-collapse collapse navbar-responsive-collapse">
									<ul class="nav">
										<li>
											<a href="userList.php">报名列表</a>
										</li>
										<li>
											<a href="userJudge.php">面试评价</a>
										</li>
										<li>
											<a href="judgeRecord.php">面试官评价记录</a>
										</li>
										<li>
											<a href="userJudgeRecord.php">面试者评价结果</a>
										</li>

										<li>
											<a href="getMessage.php">查看留言列表</a>
										</li>

										<li>
											<a href="alreadyJudge.php">查看已面情况(进行决策)</a>
										</li>

										<li>
											<a href="notJudger.php">查看未面情况</a>
										</li>
										
										<li>
											<a href="pass.php">通过情况</a>
										</li>

										<li>
											<a href="notpass.php">未通过情况</a>
										</li>
										
									</ul>	
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>



	</body>

</html><?php }
}
?>