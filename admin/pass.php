<?php
	//拿到数据库连接
	require ("../common/sessionCheck.php");
	require ('../common/conn.php');
	require ('../common/Core.class.php');
	require ('../common/init.php');
	
	
	$func = new Core();
	$result = $func->getPassUser($conn);
	if($result->num_rows == 0){
		echo "<script>alert('暂时没有通过面试的同学!')</script>";
		echo "<script language='javascript'> window.history.back(-1);</script>"; 
		exit();
	
	}
	
	$passUser = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($passUser, $result_row);
	}
	$smarty->assign("passUser",$passUser);
	$smarty->display('pass.html');
	
?>