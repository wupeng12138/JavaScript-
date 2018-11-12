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
	
	//插入记录
//	if(mysql_query("INSERT stu (姓名,性别,机试,笔试) VALUES('admin','男3',55.5,66.5)")){
//		echo "插入成功";
//	}else{
//		echo mysql_error();
//	};
	
	//更新数据
//	if(mysql_query("UPDATE stu set 笔试=80 WHERE id=2")){
//		echo "修改成功";
//	}else{
//		echo mysql_error();
//	};
	
	//删除数据
//	if(mysql_query("DELETE FROM stu WHERE id=3")){
//		echo "删除成功";
//	}else{
//		echo mysql_error();
//	};

	//查询数据
	$res = mysql_query("SELECT * FROM stu");
//	echo mysql_result($res,0,4);	//将数据按找矩阵的格式返回
//	print_r(mysql_fetch_row($res));	//索引数组，每次执行，遍历一条记录，多次执行才能拿到所有记录
//	while($arr = mysql_fetch_row($res)){
//	//	print_r($arr);
//		foreach($arr as $key=>$value){
//			echo $value;
//			echo "<br>";
//		}
//	}
//	echo "<br>";
//	print_r(mysql_fetch_array($res,MYSQL_ASSOC));

//	print_r(mysql_fetch_assoc($res));
//	while($arr = mysql_fetch_assoc($res)){	//关联数组，每次执行，遍历一条记录，多次执行才能拿到所有记录
//		echo $arr["姓名"];
//	}
	
//	print_r(mysql_fetch_object($res))		//对象数组，每次执行，遍历一条记录，多次执行才能拿到所有记录
	while($obj = mysql_fetch_object($res)){
		echo $obj->机试;
		echo "<br>";
	};
	
	mysql_close($mysql);
?>