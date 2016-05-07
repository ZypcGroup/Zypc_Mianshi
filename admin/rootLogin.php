<?php
	
	require ("../common/init.php");

	
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	if($username == "zypc@2016" && $password == "zypc@2016" ){
		@session_start();
		$_SESSION['username']= $username;
		$smarty->display("rootChoice.html");

	}else{
		echo "<script>alert('管理员用户名或密码错误!')</script>";
		echo "<script language='javascript'>  window.history.back(-1);</script>"; 

	}

?>