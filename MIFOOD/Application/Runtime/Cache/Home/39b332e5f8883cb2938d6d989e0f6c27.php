<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.7, maximum-scale=1.0, user-scalable=no">
	<title>MIFOOD-home</title>
	<link rel="shortcu icon" href="/3.2.1/Application/Public/images/logo2.ico" type="images/x-icon"/>
    <link rel="stylesheet" type="text/css" href="/3.2.1/Application/Public/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/3.2.1/Application/Public/css/home.css" />

</head>
<body  bgcolor="#fff">
<div class="top-header" id="header">
     <div class="wrap">
     <div class="top-header-right">
					<ul>
						<li><a class="location" href="#"><span><img src="/3.2.1/Application/Public/images/location.png" /> </span></a></li>
						<li><a class="diming" href="#"><span>湖南 长沙 </span></a></li>
						<li><a class="login" href="/3.2.1/index.php/Home/Index/login"><span style="border-left:1px solid #fff;border-right:1px solid #fff; padding-left:12px;padding-right:12px">登录 </span></a></li>
						<li><a class="register" href="/3.2.1/index.php/Home/Index/register"><span>注册 </span></a></li>
					</ul>
				</div>
     </div>
</div>
<!-- ---End-top-header--- -->
 <!---- start-nav-- -->
      <div class="header">
        <div class="wrap">
             <!-- start-logo -->
             <div class="logo">
					<a href="home.html"><img src="/3.2.1/Application/Public/images/logo.png" title="mifood" /></a>
				</div>
	  </div>
      <div class="search">
         <form action="<?php echo U('Index/search');?>" method="get">
    <input name="shop" type="text" class="kuan"  placeholder="搜索……"/><!--搜索框-->
     <input name="" type="button" class="an"  /><!--搜索按钮-->
</form>

        </div>
         </div>
        <div id="top-nav">
        <div class="container">
            <ul class="nav">
              <li>
              <span style="background:#D42727;padding:4px 14px 4px 14px;">首页</span></li>
              <li><a href="top.html">Top系列</a></li>
              <li><a href="#">分类</a></li>
              <li><a href="#">写食派</a></li>
            </ul>
                </div>
      </div>
       </div>
     <!-- --banner start-- -->
     <div id="kinMaxShow">
    
    	<div>
        	<a href="home.html" target="_blank"><img src="/3.2.1/Application/Public/images/1.jpg"   /></a>
        </div>
        
        <div>
        	<a href="home.html" target="_blank"><img src="/3.2.1/Application/Public/images/2.jpg"  /></a>
        </div>
        
        <div>
        	<a href="home.html" target="_blank"><img src="/3.2.1/Application/Public/images/3.jpg"   /></a>
        </div>
		
        <div>
        	<a href="home.html" target="_blank"><img src="/3.2.1/Application/Public/images/4.jpg"   /></a>
        </div>

        <div>
        	<a href="home.html" target="_blank"><img src="/3.2.1/Application/Public/images/5.jpg"   /></a>
        </div>
     </div>
     <div class="background-color">
        <div class="contain">
  <header>
    <h1 style="font-size:26px;font-weight:bold">跳跳菜单</h1>
    <p>总有一个是你喜欢的</p>
    </header>

 <div id="menu">
  <ul>
    <li> <a class='normal' href='#'>
      <img src="/3.2.1/Application/Public/images/menu1.png"  />
      </a>
      <div class='info'>
         <h3>烧烤烤肉</h3>
         <hr style="color:#fff"></hr>
        <p ><br />户外<br />室内<br />烧烤夜宵<br />烧烤自助<br />烧烤吧<br /></p>
      </div>
    </li>
    <li> <a class='normal' href='/3.2.1/index.php/Home/Index/classify'>
      <img src="/3.2.1/Application/Public/images/menu2.png"  />
      </a>
      <div class='info'>
        <h3>饮品</h3>
         <hr style="color:#fff"></hr>
        <p><br />奶茶<br />茶颜悦色<br />咖啡<br />贡茶<br />卡乐杯台式饮品</p>
      </div>
    </li>
    <li> <a class='normal' href='/3.2.1/index.php/Home/Index/classify'>
     <img src="/3.2.1/Application/Public/images/menu3.png"  />
      </a>
      <div class='info'>
        <h3>水果沙拉</h3>
         <hr style="color:#fff"></hr>
        <p><br />到店吃<br />外卖<br />西餐沙拉<br />凯撒沙拉</p>
      </div>
    </li>
    <li> <a class='normal' href='/3.2.1/index.php/Home/Index/classify/category_id/4'>
    <img src="/3.2.1/Application/Public/images/menu4.png"  />
      </a>
      <div class='info'>
        <h3>糕点类</h3>
         <hr style="color:#fff"></hr>
        <p><br />生日蛋糕<br />饼干<br />面包店</p>
      </div>
    </li>
    <li> <a class='normal' href='/3.2.1/index.php/Home/Index/classify'>
     <img src="/3.2.1/Application/Public/images/menu5.png"  />
      </a>
      <div class='info'>
        <h3>自助餐</h3>
         <hr style="color:#fff"></hr>
        <p><br />自助烤肉<br />自助种类多<br />自助海鲜</p>
      </div>
    </li>
    <li> <a class='normal' href='/3.2.1/index.php/Home/Index/classify'>
      <img src="/3.2.1/Application/Public/images/menu6.png"  />
      </a>
      <div class='info'>
        <h3>海鲜类</h3>
         <hr style="color:#fff"></hr>
        <p><br />虾<br />鱼<br /></p>
      </div>
       <li> <a class='normal' href='/3.2.1/index.php/Home/Index/classify'>
      <img src="/3.2.1/Application/Public/images/menu7.png"  />
      </a>
      <div class='info'>
        <h3>石锅鱼</h3>
         <hr style="color:#fff"></hr>
        <p><br />鲫鱼<br />鲤鱼<br />草鱼<br />红烧鱼<br /></p>
      </div>
    </li>
     <li> <a class='normal' href='/3.2.1/index.php/Home/Index/classify'>
      <img src="/3.2.1/Application/Public/images/menu8.png"  />
      </a>
      <div class='info'>
        <h3>家常菜</h3>
         <hr style="color:#fff"></hr>
        <p><br />炒茄子<br />炒豆角<br />炒土豆<br /></p>
      </div>
    </li>
    </li>
  </ul>
  </div>
    <a href=""><div class="more">浏览更多……</div></a>
</div>

     <div id="footer">
     <div class="footer-kuang">
     <div class="footer-logo">
     </div>
  <hr style="color:#15A12B;width:970px;margin-top:16px;float:left;
  filter:alpha(opacity:60); opacity:0.6;  -moz-opacity:0.6;-khtml-opacity: 0.6;"   >
     <div  id="footer-left">
          <ul>
           <li> <span class="bottom_set">我们的网站</span></li>
            <li>经验交流</li>
            <li>外卖分析</li>
          </ul>
        </div>
           <div  id="footer-center">
          <ul>
           <div class="titile"> <span class="bottom_set">友情链接</span></div>
            <li><a href="http://www.ttmeishi.com/">天天美食</a></li>
           <li><a href="http://www.ttmeishi.com/">口碑外卖</a></li>
           <li><a href="http://www.ttmeishi.com/">易淘食</a></li>
           <li><a href="http://www.ttmeishi.com/">大众点评</a></li>
           <li><a href="http://www.ttmeishi.com/">饿了吗</a></li>
            <li><a href="http://www.ttmeishi.com/">美团外卖</a></li>
          </ul>
        </div>
        <div id="footer-right">
        <ul>
            <li><span class="bottom_set">关于我们</span></li>
            <li>2017年MIFood团队</li>
            <li>邮箱：xxxx@.com</li>
          </ul>
        </div>
        <hr  style="color:#15A12B;width:970px;margin-top:4px;float:left;
  filter:alpha(opacity:60); opacity:0.6;  -moz-opacity:0.6;-khtml-opacity: 0.6;" >
      <div id="the_last">
        <ul id="the_last_function">
          <li><a href="#header">首页</a></li>
          <li><a href="homgpage.html">个人主页</a></li>
          <li><a href="#">联系我们</a></li>
        </ul>
       
        
      </div>
       <div id="my_name">
         <span style="padding-top:8px"> Copyright@2017MIFood团队</span>
        </div>
        </div>
     </div>
         </div>
     <a href="#header"><button>返回顶部</button></a>
     
</body>
 <script src="/3.2.1/Application/Public/js/jquery-1.10.2.min.js" type="text/javascript"></script>  <!-- banner js --> 
<script src="/3.2.1/Application/Public/js/jquery.kinMaxShow-1.1.min.js" type="text/javascript" charset="utf-8"></script>
 <!-- 标签js -->
<script type="text/javascript" src="/3.2.1/Application/Public/js/tjsp.js"></script> 
<script type="text/javascript" src="/3.2.1/Application/Public/js/menu.js"></script>
<script type="text/javascript">
$(function(){
	
	$("#kinMaxShow").kinMaxShow();


});

</script>
<script type="text/javascript">
        $.ajax({
            url:"/3.2.1/index.php/Home/Index/ajaxchuli",//这里指向的就不再是页面了，而是一个方法。
            data:{},
            type:"POST",
            dataType:"JSON",
            success: function(data){
                //alert(data[0].code);//这里要用索引，使用eq读取不出来数据。
                var str="";
                for(a in data)
                {
                    str = str+"<option value='"+data[a].code+"'>"+data[a].name+"</option>";
                }
                $("#nation").html(str);
            }
        })
</script>

</html>