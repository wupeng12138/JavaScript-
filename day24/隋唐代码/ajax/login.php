<?php
	
	$user = @$_REQUEST["user"];
	$pass = @$_REQUEST["pass"];
	
	
	
	$name = "admin";
	$password = "123456";
	
	if($user == $name && $pass == $password){
		echo "登录成功";
	}else{
		echo "登录失败";
	}
	
?>