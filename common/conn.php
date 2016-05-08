<?php
	$conn = new mysqli("localhost:3306","****","******","******");
	if(mysqli_connect_errno()){
		echo "据库连接失败";
		exit();
	}
?>
