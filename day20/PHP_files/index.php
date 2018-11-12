
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		
	.container{

		display: flex;
		justify-content: center;

	}

	.container form{
		display: flex;
		flex-direction: column;
		flex: 1;
		padding: 40px;
	}
	
	.container ul{
		flex:1;
		display: flex;
		flex-direction: column;
		padding: 40px;
	}

	.container ul li{
		margin-top: 10px;
		list-style: none;
		line-height: 30px;
		border-bottom: 1px solid #b6b6b6;
	}

	.container form input{
		margin-top: 10px;
	}
	.error{
		color: red;
	}

	</style>
</head>
<body>

	<?php 

		$userErr=$passwordErr=$sexErr= $heightErr=$ageErr="";
		$user = $password = $sex = $height = $age = "";

		if($_REQUEST){

			if($_REQUEST['user']==""){

				$userErr = "用户名不能为空";

			}else{
				$user = $_REQUEST['user'];
			}

			if($_REQUEST['password']==""){
				$passwordErr="请输入正确密码";
			}else{
				$password=$_REQUEST['password'];
			}

			if($_REQUEST['sex']==""){
				$sexErr="请输入性别";
			}else{
				$sex=$_REQUEST['sex'];
			}

			if($_REQUEST['height']==""){
				$heightErr="请输入身高";
			}else{
				$height=$_REQUEST['height'];
			}

			if($_REQUEST['age']==""){
				$ageErr="请输入身高";
			}else{
				$age=$_REQUEST['age'];
			}

		}

	 ?>
	<div class="container">


	<form action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<h2>用户信息注册:</h2>
		
			用户名:<input type="text" name="user"> <span class="error"><?php echo $userErr; ?></span>
			密  码:<input type="text" name="password"><span class="error"><?php echo $passwordErr; ?></span>
			性  别:<input type="text" name="sex"><span class="error"><?php echo $sexErr; ?></span>
			身  高:<input type="text" name="height"><span class="error"><?php echo $heightErr; ?></span>
			年  龄:<input type="text" name="age"><span class="error"><?php echo $ageErr; ?></span>
			<input type="submit" value="提交数据">
	</form>

	<ul>
		<h2>提交信息:</h2>
		<li>用户名: <span><?php echo $user ?></span></li>
		<li>密  码:<?php echo $password ?></span></li>
		<li>性  别:<?php echo $sex ?></span></li>
		<li>身  高:<?php echo $height ?></span></li>
		<li>年  龄:<?php echo $age ?></span></li>
	</ul>



	 </div>
</body>
</html>