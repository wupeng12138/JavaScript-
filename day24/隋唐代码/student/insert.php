<?php
	
	$user = $_REQUEST["user"];
	$sex = $_REQUEST["sex"];
	$cpt = $_REQUEST["cpt"];
	$pen = $_REQUEST["pen"];
	
	//登录数据库
	$mysql = @mysql_connect("127.0.0.1:3306","root","admin");
	if(!$mysql){
		echo mysql_error();
	};
	//选库
	if(!mysql_select_db("1801")){
		echo mysql_error();
	};
	//设置字符集
	if(!mysql_query("set names utf8")){
		echo mysql_error();
	};
	
	
	if(mysql_query("INSERT stu (姓名,性别,机试,笔试) VALUES('".$user."','".$sex."',".$cpt.",".$pen.")")){
		echo "<script>alert('插入成功'); window.location.href='show.php'</script>";
	}else{
		echo mysql_error();
	};
	
?>