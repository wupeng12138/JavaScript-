<html>
	<head>
		<title></title>
		<meta charset="UTF-8">
	</head>
	<body>
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
			
			$res = mysql_query("SELECT * FROM stu");
			
		?>
		<table border="1" cellspacing="0" width="600" align="center">
			<tr>
				<th>id</th>
				<th>姓名</th>
				<th>性别</th>
				<th>机试</th>
				<th>笔试</th>
				<th>操作</th>
			</tr>
		<?php
			while($arr = mysql_fetch_assoc($res)){
				
		?>
			<tr>
				<td><?php echo $arr["id"];?></td>
				<td><?php echo $arr["姓名"];?></td>
				<td><?php echo $arr["性别"];?></td>
				<td><?php echo $arr["机试"];?></td>
				<td><?php echo $arr["笔试"];?></td>
				<td><a href="delete.php?id=<?php echo $arr['id'];?>">删除</a></td>
			</tr>
		<?php
			}
		?>
		</table>
	</body>
</html>