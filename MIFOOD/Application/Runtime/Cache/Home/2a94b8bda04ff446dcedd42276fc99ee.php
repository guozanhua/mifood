<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
    <!-- 语言为中文 -->
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                    <title>
                        MIFOOD-home
                    </title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="text/javascript" src="/MIFOOD/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/ajax.js"></script>
<!-- //for-mobile-apps -->
 <link rel="stylesheet" type="text/css" href="/MIFOOD/Public/css/ajax.css" />
 <script src="/MIFOOD/Public/js/jquery.min.js"></script>
<link href="/MIFOOD/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/MIFOOD/Public/css/jquery-ui.css" />
<link href="/MIFOOD/Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/MIFOOD/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/MIFOOD/Public/css/leftlunbo.css" rel="stylesheet" type="text/css"  />
<!-- js -->
<script type="text/javascript" src="/MIFOOD/Public/js/numscroller-1.0.js"></script>
	<script src="/MIFOOD/Public/js/responsiveslides.min.js"></script>	<!--animate-->
<link href="/MIFOOD/Public/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/MIFOOD/Public/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>

</head>
<body>
<!-- header -->
<div class="agileits_header">
        <div class="w3l_offers">
            <a href="">真实评价工具</a>
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
<!-- script-for sticky-nav -->
    <script>
    $(document).ready(function() {
         var navoffeset=$(".agileits_header").offset().top;
         $(window).scroll(function(){
            var scrollpos=$(window).scrollTop(); 
            if(scrollpos >=navoffeset){
                $(".agileits_header").addClass("fixed");
            }else{
                $(".agileits_header").removeClass("fixed");
            }
         });
         
    });
    </script>
<!-- //script-for sticky-nav -->
    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left">
                <h1><a href="index.html"><span>new</span> MIFOOD</a></h1>
            </div>
            <div class="w3ls_logo_products_left1">
                <ul class="special_items">
                    <li><a href="/MIFOOD/index.php/Home/Index/index"><span style="color:#E64C3C">首页</span></a><i>/</i></li>
                    <li ><a href="/MIFOOD/index.php/Home/Index/top">Top系列</a><i>/</i></li>
                    <li><a href="/MIFOOD/index.php/Home/Index/classify/category_id/24">分类</a><i>/</i></li>
                    <li><a href="/MIFOOD/index.php/Home/Index/health">写食派</a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- //header -->

<!-- banner -->
<div class="banner">

				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-info">
								<h3>&nbsp;味致浓时是故乡<span>&nbsp;Mifood带你找回家的味道 </span> 
								<p>&nbsp;所有的乡愁都是因为，我饿了</p>
								<!-- <a href="top.html" class="hvr-outline-out button2 scroll">怀乡吃</a> -->
							</div>
						</div>
					</div>
				</li> 
				<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-info">
								<h3>&nbsp;唯有爱和美食不可辜负<span>&nbsp;好的美食在于寻找</span></h3>
								<p>&nbsp;是谁来自山川湖海，却囿于昼夜</p>
								<!-- <a href="top.html" class="hvr-outline-out button2 scroll">寻找吃</a> -->
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner3">
						<div class="container">
							<div class="banner-info">
								<h3>&nbsp;吃是最好的安慰<span>&nbsp;或是和你    或是和她/他</h3>
								<p>&nbsp;每时每刻，都有一道唤醒回忆的菜</p>
								<!-- <a href="top.html" class="hvr-outline-out button2 scroll">回忆吃</a> -->
							</div>
						</div>
					</div>
				</li> 
				<li>
					<div class="banner4">
						<div class="container">
							<div class="banner-info">
								<h3>&nbsp;好好吃饭用心生活，比什么都幸福<span>&nbsp;谁没在寒风中等过那顿路边摊？</span></h3>
								<p>&nbsp;好的事物包含着温情与良心</p>
					<!-- 			<a href="top.html" class="hvr-outline-out button2 scroll">幸福吃</a> -->
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
</div>
<!-- //banner -->
    <section id="news">
    <div class="container">
      <div class="col-md-12 text-center">
        <div class="inner clearfix" id="new-top">
    
        	<h3><img src="/MIFOOD/Public/images/h3_top02.png" width="134" height="50" alt="更新情報"></h3>
        	</div>
            
            <div class="wrapper_news clearfix">
            
                <div class="list_box info wow fadeInUp animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                    <h4><span>甜点饮品</span></h4>
                    <ul>
                    <?php if(is_array($sumLoves)): $i = 0; $__LIST__ = array_slice($sumLoves,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li class="clearfix">
			    <div class="mask"><span class="cross"></span></div>   
			    <p width="252" height="168">
			    <img  width="100%" height="100%" src="<?php echo ($new['shop_img']); ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">			    </p>
                			    <div class="txt">
                                <span><?php echo ($new['shop_name']); ?></span>
                                <h5>【<?php echo ($new['address']); ?>】</h5>
                            </div>
			   <a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($new['shop_id']); ?>"></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>               
                    </ul>
                </div><!--list_blog-->
                <div class="list_box shina wow fadeInUp animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <h4><span>火锅</span></h4>
                      <ul>
                      
              <?php if(is_array($sumLoves)): $i = 0; $__LIST__ = array_slice($sumLoves,3,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li class="clearfix">
			    <div class="mask"><span class="cross"></span></div>   
			    <p>
			    <img width="252" height="168" src="<?php echo ($new['shop_img']); ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">			    </p>
                			    <div class="txt">
                                <span><?php echo ($new['shop_name']); ?></span>
                                <h5>【<?php echo ($new['address']); ?>】</h5>
                            </div>
			   <a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($new['shop_id']); ?>"></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>                   
                    </ul>
			</div>
			<!--list_blog-->
                
                
                <div class="list_box event wow fadeInUp animated" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                    <h4><span>西餐</span></h4>
                    <ul>			                        
<?php if(is_array($sumLoves)): $i = 0; $__LIST__ = array_slice($sumLoves,6,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li class="clearfix">
			    <div class="mask"><span class="cross"></span></div>   
			    <p>
			    <img width="252" height="168" src="<?php echo ($new['shop_img']); ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">			    </p>
                			    <div class="txt">
                                <span><?php echo ($new['shop_name']); ?></span>
                                <h5>【<?php echo ($new['address']); ?>】</h5>
                            </div>
			    <a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($new['shop_id']); ?>"></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?> 
                    </ul>
                </div><!--list_blog-->
        
        	</div><!--wrapper_news-->
            
            <div class="col-md-12 col-sm-12" id="news-btn" data-wow-delay="0.5s" >
               <a href="/MIFOOD/index.php/Home/Index/top"><button>浏 览 更 多</button></a>
            </div>
    	</div><!--innner-->
    	</div>
    </section><!--news--> 
	
	<!-- special -->
	<div class="special">
		<div class="container">
		<div class="col-md-12" >
			<div class="services-info">
				<h3><img src="/MIFOOD/Public/images/new.png" />今日新品</h3>
			</div>
			</div>
			<div class="special-grids">
				<div class="col-md-6 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img">
						<div class="wpf-demo-6">
							<div class="w3ls-special-text">
								<p><sub>$</sub>125</p>
							</div>
							<figcaption class="view-caption">
								<h4><?php echo ($timeShops[2]['shop_name']); ?></h4> 
								<a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($timeShops[2]['shop_id']); ?>">搜索</a>
							</figcaption>
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>乐享美味，西餐、中餐……</h4>
						<p><?php echo ($timeShops[2]['address']); ?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img wthree-img">
						<div class="wpf-demo-6">
							<div class="w3ls-special-text">
								<p><sub>$</sub>130</p>
							</div>
							<figcaption class="view-caption">
								<h4><?php echo ($timeShops[1]['shop_name']); ?> </h4> 
								<a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($timeShops[1]['shop_id']); ?>">搜索</a>
							</figcaption>
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>推荐：韩国美味料理</h4>
						<p><?php echo ($timeShops[1]['address']); ?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>乐享优质生活~~</h4>
						<p><?php echo ($timeShops[2]['address']); ?></p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img2">
						<div class="wpf-demo-6">
							<div class="w3ls-special-text">
								<p><sub>$</sub>190</p>
							</div>
							<figcaption class="view-caption">
								<h4><?php echo ($timeShops[0]['shop_name']); ?></h4> 
								<a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($timeShops[0]['shop_id']); ?>">搜索</a>
							</figcaption>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>视觉享受：泡芙小可爱</h4>
						<p><?php echo ($timeShops[3]['address']); ?></p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img3">
						<div class="wpf-demo-6">
							<div class="w3ls-special-text">
								<p><sub>$</sub>105</p>
							</div>
							<figcaption class="view-caption">
								<h4><?php echo ($timeShops[3]['shop_name']); ?></h4> 
								<a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($timeShops[3]['shop_id']); ?>">搜索</a>
							</figcaption>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	</div>
<!-- contact -->
     	<!-- footer -->
	<div class="footer">
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
	<div class="agileits-copyright">
		<div class="container">
			<p>© 2017 Food Corner. All rights reserved | Design by MIFOOD</p>
		</div>
	</div>
<!-- //contact -->
<!-- login -->

			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									
									<div class="login-right">
										<h3>登录</h3> 
										<form action="<?php echo U('Index/logins');?>" method="post">
											<div class="sign-in">
												<h4>用户名:</h4>
												<input  class="username" type="text" name="username"   required="" value="">	
											</div>
											<div class="sign-in">
												<h4>密码 :</h4>
												<input type="password" name="password"  required="" value="" class="password">
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>记住密码</label>
											</div>
											<div class="sign-in">
												<input id="submit1" type="submit" value="登 录" >
											</div>
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<!-- login -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>注册</h3>
										<form action="<?php echo U('Login/register');?>" method="post">
											<div class="sign-in">
												<h4>用户名 :</h4>
												<input type="text" name="username" value="" class="username" required="" placeholder="您的用户名">
					<div id="tooltip1" class="tooltip-info prompt">
					<span class="tooltip-icon-border"></span> 
					<span class="tooltip-icon-bg"></span> 
					<span class="state"></span> 
					<span id="mess1" class="mess"></span>
				</div>	
											</div>
											<div class="sign-up">
												<h4>Email:</h4>
												<input type="text" name="email" value="" class="email" onFocus="this.value = '';"  required="" placeholder="请写入合法的邮箱地址">
						<div id="tooltip3" class="tooltip-info prompt">
						<span class="tooltip-icon-border"></span> 
						<span class="tooltip-icon-bg"></span> 
						<span class="state"></span> 
						<span id="mess3" class="mess"></span>
					</div>	
											</div>
											<div class="sign-up">
												<h4>密码 :</h4>
												<input type="password" name="password"  class="password"      onFocus="this.value = '';"  required="" placeholder="6~15个字符" value="">
						<div id="tooltip2" class="tooltip-info prompt">
						<span class="tooltip-icon-border"></span> 
						<span class="tooltip-icon-bg"></span> 
						<span class="state"></span>
					    <span id="mess2" class="mess"></span>
					</div>
												
											</div>
											<div class="sign-up">
												<h4>确认密码 :</h4>
												<input type="password" name="confirm_password" class="confirm_password" onFocus="this.value = '';"  required="" placeholder="6~15个字符" value="">
						<div id="tooltip22" class="tooltip-info prompt">
						<span class="tooltip-icon-border"></span> 
						<span class="tooltip-icon-bg"></span> 
						<span class="state"></span> 
						<span id="mess22" class="mess"></span>
					</div>
												
											</div>
											<div class="sign-up">
												<input id="submit" type="submit" value="免费注册" >
											</div>
											
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<script type="text/javascript" src="/MIFOOD/Public/js/bootstrap-3.1.1.min.js"></script>
<script src="/MIFOOD/Public/js/owl.carousel.js"></script>  

</body>
</html>