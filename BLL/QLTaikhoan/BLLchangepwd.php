<?php
	session_start();
	require("../../config/config.php");	
	
	//get pass from db
	function getpass(){
		$sql = "select password from users where username='".$_SESSION["login_user"]."'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		return $row[0];
	}
	
	//update new pass
	function update(&$string){
		$sql = "UPDATE users SET password='$string' WHERE username='".$_SESSION["login_user"]."'";
		$process=mysql_query($sql);
		if(!$process){
		  die('Could not update data: ' . mysql_error());
		}else{
			$_SESSION["alert"] = "Thay đổi mật khẩu thành công. Mật khẩu mới của bạn là '$string'";
			header("Location: ../../PL/QLTaikhoan/PLchangepass.php");
			exit();
		}
	}
	
	$getpass = getpass();
	$curpass=addslashes($_POST['curpass']);
	$newpass=addslashes($_POST['newpass']);
	$renew=addslashes($_POST["renew"]);
	if (strcmp($getpass,$curpass) != 0){
		$_SESSION["alert"] = "Mật khẩu hiện tại không đúng, xin mời nhập lại";
		header("Location: ../../PL/QLTaikhoan/PLchangepass.php");
		exit();
	}else if (strcmp($newpass,$renew) != 0 && strcmp($getpass,$curpass) == 0){
		$_SESSION["alert"] = "Mật khẩu mới và phần xác thực không giống nhau";
		header("Location: ../../PL/QLTaikhoan/PLchangepass.php");
		exit();
	}else{
		update($newpass);
	}
?>