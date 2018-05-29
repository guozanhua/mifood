<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.7, maximum-scale=1.0, user-scalable=no">
	<title>MIFOOD-register</title>
	<link rel="stylesheet" type="text/css" href="/3.2.1/Application/Public/css/style.css" />
 <link rel="stylesheet" href="/3.2.1/Application/Public/css/login.css" />
 <script type="text/javascript" src="/3.2.1/Application/Public/js/jquery1.min.js"></script>
<script type="text/javascript" src="/3.2.1/Application/Public/js/ajax.js"></script> 
<body>

<div class="register-container">
	<h1>MiFood</h1>
	
	<div class="connect">
		<p>Mi 最好的店铺. taste 最好的food.</p>
	</div>
	<form action="<?php echo U('Index/register1');?>" method="post" id="registerForm">
		<div>
			<input type="text" name="username" class="username" placeholder="您的用户名" autocomplete="off"  value=""/>
				<div id="tooltip1" class="tooltip-info prompt">
					<span class="tooltip-icon-border"></span> 
					<span class="tooltip-icon-bg"></span> 
					<span class="state"></span> 
					<span id="mess1" class="mess"></span>
				</div>
		</div>
		<div>
			<input type="password" name="password" class="password" placeholder="输入密码" oncontextmenu="return false" onpaste="return false"  value=""/>
						<div id="tooltip2" class="tooltip-info prompt">
						<span class="tooltip-icon-border"></span> 
						<span class="tooltip-icon-bg"></span> 
						<span class="state"></span>
					    <span id="mess2" class="mess"></span>
					</div>
		</div>
		<div>
			<input type="password" name="confirm_password" class="confirm_password" placeholder="再次输入密码" oncontextmenu="return false" onpaste="return false"  value=""/>
						<div id="tooltip22" class="tooltip-info prompt">
						<span class="tooltip-icon-border"></span> 
						<span class="tooltip-icon-bg"></span> 
						<span class="state"></span> 
						<span id="mess22" class="mess"></span>
					    </div>

		</div>
		<div>
			<input type="email" name="email" class="email" placeholder="输入邮箱地址" oncontextmenu="return false" onpaste="return false"  value="" />
						<div id="tooltip3" class="tooltip-info prompt">
						<span class="tooltip-icon-border"></span> 
						<span class="tooltip-icon-bg"></span> 
						<span class="state"></span> 
						<span id="mess3" class="mess"></span>
					    </div>
		</div>

		<button id="submit" type="submit">注 册</button>
	</form>
	<a href="/3.2.1/index.php/Home/Index/login">
		<button type="button" class="register-tis">已经有账号？</button>
	</a>

</div>


<script src="/3.2.1/Application/Public/js/jquery.min.js"></script>
<script src="/3.2.1/Application/Public/js/common.js"></script>
<!--背景图片自动更换-->
<script src="/3.2.1/Application/Public/js/supersized.3.2.7.min.js"></script>
<script src="/3.2.1/Application/Public/js/supersized-init.js"></script>
<!--表单验证-->
<script src="/3.2.1/Application/Public/js/jquery.validate.min.js?var1.14.0"></script>
<script src="/3.2.1/Application/Public/js/jquery.1.7.1.min.js"></script>
</body>
</html>