<?php
	session_start();
	require("../config/config.php");	
	
	if(isset($_POST["username"]) && isset($_POST["password"])){
		// username and password sent from Form 
		$myusername=addslashes($_POST['username']); 
		$mypassword=addslashes($_POST['password']); 

		$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		//$active=$row['active'];
		$count=mysql_num_rows($result);
		

		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1)
		{
			//session_register("myusername");
			$_SESSION['login_user']=$myusername;
			header('Location: ../so-yeu-ly-lich.php');
		}
		else 
		{
			echo "không tồn tại người dùng có email hoặc password như đã nhập";
		}
	}else{
		echo "không vào được database";
	}
	
?>