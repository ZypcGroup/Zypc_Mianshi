<?php /* Smarty version 3.1.27, created on 2016-04-24 18:54:16
         compiled from "E:\Apache24\htdocs\ZYPC2016\tpl\startJudgeUser.html" */ ?>
<?php
/*%%SmartyHeaderCode:1257571ca5d866c8c7_74755282%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f686073e712247fb3ec843a0cce4c59e1ffe4624' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\ZYPC2016\\tpl\\startJudgeUser.html',
      1 => 1461495252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1257571ca5d866c8c7_74755282',
  'variables' => 
  array (
    'user' => 0,
    'schoolnum' => 0,
    'rRRows' => 0,
    'recordArray' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_571ca5d8802d24_43692991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571ca5d8802d24_43692991')) {
function content_571ca5d8802d24_43692991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1257571ca5d866c8c7_74755282';
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo '<script'; ?>
 src="js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/buttons.css" rel="stylesheet" media="screen">
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	
	<style type="text/css">
		.hero-unit{
		position: absolute;
		}

		#counter{
			float: right;
			background-color:rgb(240, 207, 213);
			padding: 15px;
			border-radius: 5px;
			margin-right: 50px;
			margin-top: -590px;
		}
		#record{
			float: right;
			background-color:rgb(191, 221, 246);
			padding: 15px;
			border-radius: 5px;
			margin-right: 350px;
			margin-top: -590px;
		}



	</style>
	<?php echo '<script'; ?>
 language="javascript">
		window.onload = function(){
			var inTime = new Date();
			var inTimeMsec = inTime.getTime();
			var t = null;
		    t = setTimeout(time,1000);//开始执行
		    function time()
		    {
		       clearTimeout(t);//清除定时器
		       dt = new Date();
		       var dtMsec = dt.getTime();
		       dt = new Date(dtMsec-inTimeMsec);
		      // alert(dtMsec-inTimeMsec);
		       var h=dt.getHours();
		       var m=dt.getMinutes();
		       var s=dt.getSeconds();
		       // alert(h);
		       //计算出小时数
				var leave1=(dtMsec-inTimeMsec)%(24*3600*1000)    //计算天数后剩余的毫秒数
				var hours=Math.floor(leave1/(3600*1000))
		       	document.getElementById("counter").innerHTML =  "面试时长"+hours+"时"+m+"分"+s+"秒";
		       	t = setTimeout(time,1000); //设定定时器，循环执行             
		    } 
		   
		}		
		
	<?php echo '</script'; ?>
>
	</head>

	<body>
 		<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		 <div class="container">
			<div class="row">
				<div class="span12">
					<ul class="breadcrumb">
						
						<li class="active">
							编号:<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
<span class="divider">/</span>
						</li>
						<li class="active">
							学号:<?php echo $_smarty_tpl->tpl_vars['user']->value['schoolnum'];?>
<span class="divider">/</span>
						</li>
						
						<li class="active">
							姓名:<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
<span class="divider">/</span>
						</li>
						
						<li class="active">
							班级:<?php echo $_smarty_tpl->tpl_vars['user']->value['class'];?>
<span class="divider">/</span>
						</li>
						

						
						<li class="active">
							报名时间:<?php echo $_smarty_tpl->tpl_vars['user']->value['regtime'];?>
<span class="divider">/</span>
						</li>
						
						

					</ul>
				</div>
			</div>
		</div>
		

		<div class="container">
			<div class="row">
				<div class="span12">
					<form action="addUserJudgeRecord.php" align="left" method="post">
						<fieldset>

							 <legend>面试评价</legend> 

							  <label>面试状态</label>
							 <select name="status">  
							 	<?php if ($_smarty_tpl->tpl_vars['user']->value['status'] == "0" || $_smarty_tpl->tpl_vars['user']->value['status'] == "-1") {?>
								  <option value ="A">A轮面试 </option>  
								<?php } elseif ($_smarty_tpl->tpl_vars['user']->value['status'] == "A" || $_smarty_tpl->tpl_vars['user']->value['status'] == "-2") {?>
								  <option value ="B">B轮面试</option>  
								<?php }?>
							</select>  
							 <label>基本技能</label>
							 <input type="hidden" name="schoolnum" value=<?php echo $_smarty_tpl->tpl_vars['schoolnum']->value;?>
 ></input>
							<textarea rows="5" cols="30" name="basic"></textarea><br>
							 <label>加分技能</label>
							<textarea rows="5" cols="30" name="advance"></textarea><br>

							 <label>总体评价</label>
							<textarea rows="5" cols="30" name="general"></textarea><br>

							 <label>等级评价</label>
							 <select name="grade">  
								  <option value ="1">A(100-90) 非常好 可以直接通过 </option>  
								  <option value ="2">B(89-70)  很好  可以直接通过</option>  
								  <option value ="3">C(69-60)</option>  
								  <option value="4">D(60以下)  </option>  
								
							</select>  
							<br>
							<button type="submit" class="btn">提 交 评 价</button>	
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['rRRows']->value == "0") {?>
		 <div id="record">
		 	<table>
		 		<b>暂无评价记录</b>
			</table>
		</div>
		<?php } else { ?>
		 <div id="record">
		 	<table>

				<?php
$_from = $_smarty_tpl->tpl_vars['recordArray']->value;
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
							<tr><td>评价记录</td></tr>
							<tr><td>-----------------------------------------------------------</td></tr>
							<tr><td>姓名:<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td></tr>
							<tr><td>电话<?php echo $_smarty_tpl->tpl_vars['val']->value['tel'];?>
</td></tr>
							<tr><td>班级:<?php echo $_smarty_tpl->tpl_vars['val']->value['class'];?>
</td></tr>
							<?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == 'A') {?>
							  <tr><td>状态:A轮面试</td></tr>
							<?php } else { ?>
   								<tr><td>状态:B轮面试</td></tr>
							<?php }?>							
							<tr><td>面试官姓名:<?php echo $_smarty_tpl->tpl_vars['val']->value['jname'];?>
</td></tr>
							<tr><td>基本评价:<?php echo $_smarty_tpl->tpl_vars['val']->value['basic'];?>
</td></tr>
							<tr><td>加分项:<?php echo $_smarty_tpl->tpl_vars['val']->value['advance'];?>
</td></tr>
							<tr><td>总体评价:<?php echo $_smarty_tpl->tpl_vars['val']->value['general'];?>
</td></tr>
							<?php if ($_smarty_tpl->tpl_vars['val']->value['grade'] == '1') {?>
    							 <tr><td>评价分数:A</td></tr>
							<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['grade'] == '2') {?>
   								<tr><td>评价分数:B</td></tr>
   							<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['grade'] == '3') {?>
   								<tr><td>评价分数:C</td></tr>
   							<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['grade'] == '4') {?>
   								<tr><td>评价分数:D</td></tr>
							<?php }?>
							<tr><td>评价时间:<?php echo $_smarty_tpl->tpl_vars['val']->value['time'];?>
</td></tr>

						
					<?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
				</table>
		</div>
		<?php }?>
		<div id="counter">
		</div>
	</body>

</html><?php }
}
?>