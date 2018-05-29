<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MIFOOD—person</title>
   <link rel="stylesheet" type="text/css" href="/MIFOOD/Public/css/test.css" />
  <link href="/MIFOOD/Public/css/search3.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="/MIFOOD/Public/css/jquery-ui3.css" />
  <link href="/MIFOOD/Public/css/bootstrap-responsive3.css" rel="stylesheet">
  <link href="/MIFOOD/Public/css/owl.carousel3.css" rel="stylesheet" type="text/css" media="all">
  <link href="/MIFOOD/Public/css/popuo-box3.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="/MIFOOD/Public/css/huiding3.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/MIFOOD/Public/js/jquery3.min.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/script3.js"></script> 
<script type="text/javascript" src="/MIFOOD/Public/js/move-top.js"></script>
	<link rel="stylesheet" type="text/css" href="/MIFOOD/Public/css/bootstrap3.css">
	<link rel="stylesheet" href="/MIFOOD/Public/css/style3.css">
  <link rel="stylesheet" href="/MIFOOD/Public/css/page.css">

</head>
<body>
	<div class="header wow zoomIn">
  <div class="container">
    <div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
      <ul>
        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>
        <li><a href=""><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>mifood@example.com</a></li>
      </ul>
    </div>
<div class="header_right">
      <div class="login">
        <ul>
        <li><a href="/MIFOOD/index.php/Home/Index/person" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo ($_SESSION['user']); ?></a></li></ul></div>
      
  </div>
    <!-- login -->
      

    <div class="clearfix"></div>
  </div>
</div>


	<div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#" id="title">
                       MIFood
                    </a>
                </li>
                <div class="container">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="top-section">
	                            <div class="profile-image">
	                                <img src="/MIFOOD/Public/images/profile.jpg" alt="Volton">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">
	                        <div id="my_name">
	                            <h3 class="profile-title"><?php echo ($_SESSION['user']); ?></h3>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div id="left_bottom_menu">

                <li>
                    <a href="#two"><i class="fa fa-fw fa-home"></i> 收藏的店铺</a>
                </li>
                <li>
                    <a href="#five"><i class="fa fa-fw fa-paperclip"></i> 个性化菜单</a>
                </li>
                 <li>
                    <a href="/MIFOOD/index.php/Home/Index/mail"><i class="fa fa-fw fa-envelope"></i> 接受邮件提醒</a>
                </li>
              <!--   <li>
                    <a href="/MIFOOD/index.php/Home/Index/mail_out"><i class="fa fa-fw fa-envelope"></i> 拒绝邮件提醒</a>
                </li> -->
                <li>
                    <a href="/MIFOOD/index.php/Home/Index/log_out"><i class="fa fa-fw fa-link"></i>退出登录</a>
                </li>
                <li>
                    <a href="/MIFOOD/index.php/Home/Index/log_off"><i class="fa fa-fw fa-power-off"></i> 注销</a>
                </li>
                </div>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
        </div>



			<div class="header-bottom ">
    <div class="container">
      <nav class="navbar navbar-default"  id="hhh">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <div class="logo grid">
            <div class="grid__item color-3">
              <h1><a class="link link--nukun" href="index.html" style="color: #000;"><i></i>MI<span style="color: #d32323;">F</span>OOD</a></h1>
            </div>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <nav class="menu menu--horatio">
            <ul class="nav navbar-nav menu__list" id="xxx">
              <li><a href="/MIFOOD/index.php/Home/Index/index" class="menu__link">首页</a></li>
              <li><a href="/MIFOOD/index.php/Home/Index/top" class="menu__link">Top系列</a></li> 
              <li><a href="/MIFOOD/index.php/Home/Index/classify/category_id/7" class="menu__link">分类</a></li> 
              <li><a href="/MIFOOD/index.php/Home/Index/health" class="menu__link">写食派</a></li> 
        <!--      <li class="menu__item"><a href="contact.html" class="menu__link">联系我们</a></li> -->
            </ul>
          </nav>
        </div>
      </nav>
    </div>
  </div>


            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h3 class="page-header" id="two">收藏的店铺</h3>
                        <div id='ajaxpage'>
<div class='page1' style='display:none;'><a href="<?php echo U('person',array('p'=>1));?>" title="">自动点击执行AJAX请求显示第一页内容</a></div> 
</div>
                        <div class="row">
  <?php if(is_array($loves)): foreach($loves as $k=>$loves): if(($k < 4) and ($loves[0]['shop_id'])): ?><div class="col-md-3 top_brand_left"   id="details_word1">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="/MIFOOD/Public/images/offer.png" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
              <img style="width:300px;height:180px;" src="<?php echo ($loves[0]['shop_img']); ?>" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h4><?php echo ($loves[0]['shop_name']); ?></h4>
              <div>地铁：<?php echo ($loves[0]['area']); echo ($loves[0]['zone']); ?></div>
              <hr>
              <p><a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($loves[0]['shop_id']); ?>" class="btn btn-danger" role="button">去看看</a></p>
               <p><a href="/MIFOOD/index.php/Home/Index/delLove/shop_id/<?php echo ($loves[0]['shop_id']); ?>" class="btn btn-danger" role="button">删除收藏</a></p>
            </div>
          <div class="snipcart-details top_brand_home_details">
  
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div><?php endif; endforeach; endif; ?>
 <?php echo ($page); ?>
      </div> 

 <h3 class="page-header" id="five">推荐菜单</h3>
<div class="row">
<?php if(is_array($topLoves)): $i = 0; $__LIST__ = array_slice($topLoves,3,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topLoves): $mod = ($i % 3 );++$i;?><div class="col-md-3 top_brand_left"   id="details_word1">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="/MIFOOD/Public/images/offer.png" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
            <img style="width:300px;height:180px;" src="<?php echo ($topLoves['shop_img']); ?>" alt="..." >
            <div class="caption">
              <h4><?php echo ($topLoves['shop_name']); ?></h4>
                  <p> <a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($topLoves['shop_id']); ?>" class="btn btn-danger" role="button">去看看</a></p>
            </div>
          <div class="snipcart-details top_brand_home_details">
  
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?> 
</div>                  </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>


    <!-- /#wrapper -->
<br><br>
    <div class="footer" id="footer_px">
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
	
	<script src="/MIFOOD/Public/js/jquery33.min.js"></script>
	<script src="/MIFOOD/Public/js/bootstrap3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		  var trigger = $('.hamburger'),
		      overlay = $('.overlay'),
		     isClosed = false;

		    trigger.click(function () {
		      hamburger_cross();      
		    });

		    function hamburger_cross() {

		      if (isClosed == true) {          
		        overlay.hide();
		        trigger.removeClass('is-open');
		        trigger.addClass('is-closed');
		        isClosed = false;
		      } else {   
		        overlay.show();
		        trigger.removeClass('is-closed');
		        trigger.addClass('is-open');
		        isClosed = true;
		      }
		  }
		  
		  $('[data-toggle="offcanvas"]').click(function () {
		        $('#wrapper').toggleClass('toggled');
		  });  
		});
	</script>
</body>
</html>