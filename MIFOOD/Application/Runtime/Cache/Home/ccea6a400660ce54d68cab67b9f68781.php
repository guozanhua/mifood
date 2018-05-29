<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.7, maximum-scale=1.0, user-scalable=no">
	<title>MIFOOD-login</title>
	<link rel="shortcu icon" href="/3.2.1/Application/Public/images/logo2.ico" type="images/x-icon"/>
<link rel="stylesheet" href="/3.2.1/Application/Public/css/login.css" />

<body>
<div class="login-container">
	<h1>MiFood</h1>
	
	<div class="connect">
		<p>Mi 最好的店铺. taste 最好的food.</p>
	</div>
	
	<form action="<?php echo U('Index/logins');?>" method="post" id="loginForm">
		<div>
			<input type="text" name="username" class="username" placeholder="用户名" autocomplete="off"/>
		</div>
		<div>
			<input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
		</div>
		<button id="submit" type="submit">登 陆</button>
	</form>

	<a href="/3.2.1/index.php/Home/Index/register">
		<button type="button" class="register-tis">还有没有账号？</button>
	</a>

</div>
<script src="/3.2.1/Application/Public/js/jquery.min.js"></script>
<script src="/3.2.1/Application/Public/js/common.js"></script>
<!--背景图片自动更换-->
<script src="/3.2.1/Application/Public/js/supersized.3.2.7.min.js"></script>
<script src="/3.2.1/Application/Public/js/supersized-init.js"></script>
<!--表单验证-->
<script src="/3.2.1/Application/Public/js/jquery.validate.min.js?var1.14.0"></script>

</body>
</html>