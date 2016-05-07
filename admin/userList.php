<?php
	//拿到数据库连接
	require ("../common/sessionCheck.php");
	require ('../common/conn.php');
	require ('../common/Core.class.php');
	require ('../common/init.php');
	
	
	$func = new Core();
	$result = $func->getAllUsers($conn);
	
	if($result->num_rows == 0){
		echo "<script>alert('暂时没有报名记录!')</script>";
		echo "<script language='javascript'> window.history.back(-1);</script>"; 
		exit();
	
	}
	
	$userArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($userArray, $result_row);
	}
	$smarty->assign("userArray",$userArray);
	$smarty->display('userList.html');
	
?>