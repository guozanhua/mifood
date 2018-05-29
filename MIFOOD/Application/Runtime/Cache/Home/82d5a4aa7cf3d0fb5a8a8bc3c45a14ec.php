<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>MIFOOD-top</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="text/javascript" src="/MIFOOD/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/ajax.js"></script>
<!-- //for-mobile-apps -->
 <link rel="stylesheet" type="text/css" href="/MIFOOD/Public/css/ajax.css" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/MIFOOD/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/MIFOOD/Public/css/top.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="/MIFOOD/Public/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<link rel="stylesheet" href="/MIFOOD/Public/css/owl.carousel.css">
<!-- //font-awesome icons -->
<!-- js -->
<script src="/MIFOOD/Public/js/jquery.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/MIFOOD/Public/js/move-top.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
 <script src="/MIFOOD/Public/js/vendor/jquery-1.10.2.min.js"></script>
<!-- start-smoth-scrolling -->
</head>
    
<body>
<!-- header -->
    <div class="agileits_header">
        <div class="w3l_offers">
            <a href="">真的很TOP !</a>
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
                    <li><a href="/MIFOOD/index.php/Home/Index/index">首页</a><i>/</i></li>
                    <li ><a href="/MIFOOD/index.php/Home/Index/top"><span style="color:#E64C3C">Top系列</span></a><i>/</i></li>
                    <li><a href="/MIFOOD/index.php/Home/Index/classify/category_id/24">分类</a><i>/</i></li>
                    <li><a href="/MIFOOD/index.php/Home/Index/health">写食派</a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- //header -->
    <section id="hero-area">
      <img class="img-responsive" src="/MIFOOD/Public/images/header.jpg" alt="">
    </section>
    <!--
    Header start 
  
    <!--
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="200ms" data-wow-delay="300ms" data-ride="carousel" data-interval="3000">
                        <div class="title">
                            <h3>Top<span>店铺</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                        <?php if(is_array($topLoves)): foreach($topLoves as $key=>$vo): ?><div class="top-title">
                            <a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($vo['shop_id']); ?>">
                                <img src="<?php echo ($vo['shop_img']); ?>" alt="" width="250" height="290">
                                </a>
                                <p>【<?php echo ($vo['shop_name']); ?>】</p>
                            </div><?php endforeach; endif; ?>
                           
                        
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
    <!--
    blog start
    ============================ -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading">TOP<span>精品菜系</span></h1>
                        <ul>
                        <?php if(is_array($timeShops)): $i = 0; $__LIST__ = array_slice($timeShops,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$timeShops): $mod = ($i % 2 );++$i;?><li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                                <div class="blog-img"><a href="/MIFOOD/index.php/Home/Index/details/shop_id/<?php echo ($timeShops['shop_id']); ?>">
                                    <img src="<?php echo ($timeShops['shop_img']); ?>" width="293" height="220" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>  <?php echo ($timeShops['shop_name']); ?></h3>
                                    <p> 【<?php echo ($timeShops['address']); ?>】</p>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </ul>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
        </section>

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
<!-- login -->
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
                                                <input type="password" name="password" value="" class="password"      onFocus="this.value = '';"  required="" placeholder="6~15个字符">
                        <div id="tooltip2" class="tooltip-info prompt">
                        <span class="tooltip-icon-border"></span> 
                        <span class="tooltip-icon-bg"></span> 
                        <span class="state"></span>
                        <span id="mess2" class="mess"></span>
                    </div>
                                                
                                            </div>
                                            <div class="sign-up">
                                                <h4>确认密码 :</h4>
                                                <input type="password" name="confirm_password" value="" class="confirm_password" onFocus="this.value = '';"  required="" placeholder="6~15个字符">
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
            <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="registerModal" role="dialog" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                ×
                            </button>
                            <h3 class="modal-title text-center" id="myModalLabel">
                                城市选择
                            </h3>
                        </div>
                        <div class="modal-body">
                           <!-- <form class="form-inline" method="post" action="<?php echo U('Index/top');?>"> -->
      <div data-toggle="distpicker">
        <div class="form-group" id="header_option">
          <label class="sr-only" for="province1">Province</label>
         <!-- 省份 -->
    <select name="pro" id="pro">
    <option value="" data-code="">—— 市 ——</option>
 <?php if(is_array($region)): foreach($region as $key=>$v): ?><option value="<?php echo ($v["provice_id"]); ?>"><?php echo ($v["provice_name"]); ?></option><?php endforeach; endif; ?>
    </select>

        </div>
        <div class="form-group" id="header_option">
          <label class="sr-only" for="city1">City</label>
          <!-- 城市 -->
    <select name="city" id="city">
    <option value="" data-code="">—— 市 ——</option>
         <option></option>
          <?php if(is_array($regions)): foreach($regions as $key=>$vo): ?><option value="<?php echo ($vo["city_id"]); ?>"><?php echo ($vo["city_name"]); ?></option><?php endforeach; endif; ?>

    </select>
        
        </div>
        
      </div>
  <!--   </form>  -->

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary" id="search-tijiao">
                    提交更改
                </button>
                        </div>
                    </div>
                         </div>
            </div>
<!-- Bootstrap Core JavaScript -->
<script src="/MIFOOD/Public/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
<script src="/MIFOOD/Public/js/minicart.min.js"></script>
<script src="/MIFOOD/Public/js/plugins.js"></script>
<script src="/MIFOOD/Public/js/top.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/move-top.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/distpicker.data.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/distpicker.js"></script>
<script src="/MIFOOD/Public/js/minicart.min.js"></script>

<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>
  
</body>
</html>