<?php
	//拿到数据库连接
	require ('../common/sessionCheck.php');
	require ('../common/conn.php');
	require ('../common/Core.class.php');
	require ('../common/init.php');

	$core = new Core();
	$result = $core->getMessage($conn);
	
	if($result->num_rows == 0){
		echo "<script>alert('暂时没有留言信息!')</script>";
		echo "<script language='javascript'> window.history.back(-1);</script>"; 
		exit();
	
	}
	
	$messageArray = array();
	while( $result_row = mysqli_fetch_assoc($result) ){
		array_push($messageArray, $result_row);
	}
	$smarty->assign("messageArray",$messageArray);
	$smarty->display('messageResult.html');


?>