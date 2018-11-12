<?php
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
	
	$id = $_REQUEST["id"];
	
	if(mysql_query("DELETE FROM stu WHERE id=".$id)){
		echo "<script>alert('删除成功'); window.location.href='show.php'</script>";
	}else{
		echo mysql_error();
	};
?>