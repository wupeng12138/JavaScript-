<?php
	header('Access-Control-Allow-Origin:*');//允许所有来源访问
	header('Access-Control-Allow-Method:POST,GET');//允许访问的方式
	
	
//	echo "function fn123(){console.log('hello my name is php')}";
	
	$call = @$_REQUEST["callback"];
	
	$a = '[{"name":"admin","age":"18"},{"name":"liyang","age":"16"}]';
	
//	echo "fn(".$a.")";
	
	echo $call."(".$a.")";
	
//	callback(123123)
	
//	fn(123456789);
	
?>