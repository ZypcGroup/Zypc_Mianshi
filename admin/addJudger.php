<?php
	
	require ("../common/conn.php");
	require ("../common/Core.class.php");


	@session_start();
	$rootName = $_SESSION['username'];

	if($rootName == null ){	
		echo "<script>alert('进入面试系统前请先登录！')</script>";
		echo "<script>location.href=\"rootLogin.html\"</script>";
	}
	

	$name = $_POST['name'];
	$tel = $_POST['tel'];

	//对两个值进行过滤和验证

	$core = new Core();
	$core->addJudger($conn,$name,$tel);
	echo "<script>alert('面试官信息录入成功!')</script>";
	echo "<script language='javascript'> top.location='../tpl/rootChoice.html';</script>"; 

?>