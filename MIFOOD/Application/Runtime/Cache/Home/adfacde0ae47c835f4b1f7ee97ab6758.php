<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
    <!-- 语言为中文 -->
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                    <title>
                        MIFOOD-health-details
                    </title>
             <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <script type="text/javascript" src="/MIFOOD/Public/js/jquery.min.js"></script>
            <script type="text/javascript" src="/MIFOOD/Public/js/ajax.js"></script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" type="text/css" href="/MIFOOD/Public/css/ajax.css" />
            <link href="/MIFOOD/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/MIFOOD/Public/css/health-details.css" />
<link href="/MIFOOD/Public/css/top.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!-- header -->
  <div class="agileits_header">
        <div class="w3l_offers">
            <a href="">您的健康伴侣</a>
        </div>
        <div class="w3l_search">
            <form action="<?php echo U('Index/search');?>" method="get">
                <input type="text" name="search" value="搜索..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索...';}" required="">
                <input type="submit" value=" ">
            </form>
        </div>
        <div class="w3l-right">
        <ul>
        <?php if($_SESSION['user'] == '' ): ?><li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>登录</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>注册</a></li>
                     <?php else: ?>
                    <li><a href="/MIFOOD/index.php/Home/Index/person" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo ($_SESSION['user']); ?></a></li>
                    <li><a href="/MIFOOD/index.php/Home/Index/log_out"><span class=" glyphicon" aria-hidden="true"></span>退出</a></li><?php endif; ?>
     </ul>
        </div>
            <div class="clearfix"> </div>
    </div>
<!-- //header -->

    <div class="logo_products" id="the_last">
        <div class="container">
            <div class="w3ls_logo_products_left">
                <h1><a href="index.html"><span>new</span> MIFOOD</a></h1>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="special_items">
                    <li><a href="/MIFOOD/index.php/Home/Index/index">首页</a><i>/</i></li>
                    <li ><a href="/MIFOOD/index.php/Home/Index/top">Top系列</a><i>/</i></li>
                    <li><a href="/MIFOOD/index.php/Home/Index/classify/category_id/24">分类</a><i>/</i></li>
                    <li><a href="/MIFOOD/index.php/Home/Index/health"><span style="color:#E64C3C">写食派</span></a></li>
                </ul>
            </div>
        </div>
    </div>
      <div class="col-md-12" id="title1">
        <div class="container">
              <h1>健康常识</h1>
        </div>
  </div>
  <br>
   <br>
   <br>

       <div class="col-md-12" id="title2">
        <div class="container">
              <h2>&nbsp;&nbsp;&nbsp;<?php echo ($health[0]['title']); ?></h2>
        </div>
  </div>
     <div class="col-md-6" id="images" style="width:40%">
        <div class="container" >
           <div class="grids" >
           <img  style="width:400px;height:400px;" class="img-thumbnail" src="<?php echo ($health[0]['img']); ?>" >
           
           </div>
        </div>
     </div>
       <div class="col-md-6" id="images" style="width:60%">
        <div class="container" >
            <ul>
             <li><span class="badge badge-important">文章详情</span></li><br/>
             <li style="width:630px;"><pre><?php echo ($health[0]['content']); ?></pre></li>
            </ul>
        </div>
     </div>
      	<div class="footer col-md-12">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4> 关于我们</h4>
					<p>  经验交流</p>
					<h5> 外卖分析<h5>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>友情链接</h4>
					<ul class="float">
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                天天美食
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                口碑外卖
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                易淘食
                            </a>
                        </li>
                    </ul>
                    <ul class="float">
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                大众点评
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                饿了吗
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                美团外卖
                            </a>
                        </li>
                    </ul>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>热门主题</h4>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD/Public/images/s1.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.htmll"><img src="/MIFOOD/Public/images/s2.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD/Public/images/s3.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD/Public/images/s5.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD/Public/images/s6.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.htmll"><img src="/MIFOOD/Public/images/s7.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- agileits-copyright -->
	<div class="agileits-copyright col-md-12" >
		<div class="container">
			<p>© 2017 Food Corner. All rights reserved | Design by MIFOOD</p>
		</div>
	</div>
     	
<!-- //login -->
  </body>
  <script type="text/javascript" src="/MIFOOD/Public/js/bootstrap-3.1.1.min.js"></script>
  </html>