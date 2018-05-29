<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>MIFOOD-details</title>
 <link rel="stylesheet" type="text/css" href="/MIFOOD/Public/css/test.css" />
<link href="/MIFOOD/Public/css/page.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="/MIFOOD/Public/css/search.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/MIFOOD/Public/css/bootstrap.css">
<link href="/MIFOOD/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/MIFOOD/Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="/MIFOOD/Public/js/Chart.js"></script>
<link rel="stylesheet" href="/MIFOOD/Public/css/self-index.css">
<link rel="stylesheet" href="/MIFOOD/Public/css/font-awesome.css">
<script type="text/javascript" src="/MIFOOD/Public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/numscroller-1.0.js"></script>
<link href="/MIFOOD/Public/css/page.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script type="text/javascript">
  $(function(){
    var location = <?php echo ($location); ?> ;
   if(location !=''){
      window.location.href="#href-location";
    }
    
  });
</script>
</head>
<body>
<div class="agileits_header">
        <div class="w3l_offers">
            <a href="">店铺详情</a>
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

<!-- //script-for sticky-nav -->
    <div class="header-bottom " style="margin-top: 5px;">
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
              <li><a href="/MIFOOD/index.php/Home/Index/index" class="menu__link">首页</a><i>/</i></li>
              <li><a href="/MIFOOD/index.php/Home/Index/top" class="menu__link">Top系列</a><i>/</i></li> 
              <li><a href="/MIFOOD/index.php/Home/Index/classify/category_id/7" class="menu__link">分类</a><i>/</i></li> 
              <li><a href="/MIFOOD/index.php/Home/Index/health" class="menu__link">写食派</a><i>/</i></li> 
            </ul>
          </nav>
        </div>
      </nav>
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
<div class="row" style="margin-top: 10px;">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs">
    <div id="carousel-299058" class="carousel slide">
        <div class="item"> <img class="img-responsive" width="100%" src="/MIFOOD/Public/images/photo.png" alt="thumb">
          <div id="ffff"><div class="carousel-caption col-md-12" ><p id="ffff"></p></div></div>
        </div>
  </div>
</div>

</div>
<div class="container" style="margin-top: 30px;">
  <div class="row">
    <div class="col-lg-12 col-md-12">


<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <img style="width:600px;height:400px;" src="<?php echo ($shop[0]['shop_img']); ?>" alt="Thumbnail Image 1" class="img-responsive">
          </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right">
              <p id="god_name"><?php echo ($shop[0]['shop_name']); ?></p>
              <div id="details_word3">区域：<?php echo ($shop[0]['area']); echo ($shop[0]['zone']); ?></div>
              <div id="details_word3">地址：<?php echo ($shop[0]['address']); ?></div>
              <div id="details_word3">电话：<?php echo ($shop[0]['tel']); ?></div>
              <div id="details_word3">店铺评分：<?php echo ($shop[0]['level']); ?>分</div>
              <div id="details_word3">收藏人数：<?php echo ($shop[0]['loves']); ?>人</div>
              <div id="details_word1">
              <a href="<?php echo ($shop[0]['shop_href']); ?>" target="view_window" class="btn btn-danger" role="button" id="sure">直达链接</a>
              <a href="/MIFOOD/index.php/Home/Index/addLove/shop_id/<?php echo ($shop[0]['shop_id']); ?>" class="btn btn-danger" role="button" id="sure"><?php if($no_love): ?>已收藏<?php else: ?>收藏<?php endif; ?></a>
              </div>
</div>

            </div>
        </div>


      </div>
    </div>
   
  </div>
<hr>
<div class="container" style="margin-top: 20px;">
  <div class="col-md-12" >
      <div class="services-info">
        <h3><span style="border-bottom: 1px #d32323 solid; ">基本菜肴</span></h3>
      </div>
      </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">

<div class="row"><?php if(!$food): ?><h4>暂无菜肴信息</h4>
  <?php else: ?>
<?php if(is_array($food)): foreach($food as $key=>$food): if($food['food_img']): ?><div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left"   id="details_word1">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="/MIFOOD/Public/images/offer.png" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
            <img style="width:200px;height:200px;" src="<?php echo ($food['food_img']); ?>" alt="..." >
            <div class="caption" id="details_word2">
              <h4><?php echo ($food['food_name']); ?></h4>

            </div>
                    <div class="snipcart-details top_brand_home_details">
  
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div></div><?php endif; endforeach; endif; endif; ?>
  </div>
  <!-- <div class="row"><h4>美食：</h4>
  <?php if(is_array($foods)): foreach($foods as $key=>$foods): if(!$foods['food_img']): ?><h4><?php echo ($foods['food_name']); ?></h4><?php endif; endforeach; endif; ?></div> -->
</div>
</div>
</div>
<hr>

<?php if($ave_comment): ?><div class="container" style="margin-top: 20px;">
  <div class="col-md-12" >
      <div class="services-info">
        <h3><span style="border-bottom: 1px #d32323 solid; ">好评率分析</span></h3>
      </div>
      </div>
</div>
<section>
  <div class="container" id="yyy" style="margin-top: 50px;">
    <div class="row">
      <div class="col-lg-12 col-md-12">
      <div style="width: 80%" id="lll">
          <div>
            <canvas id="myChart" width="800" height="350"></canvas>
          </div>
      </div>
      </div>
      </div>
    </div>
</section>
<hr><?php endif; ?>
<div id="href-location"> </div>
<div class="container" style="margin-top: 20px;">
  <div class="col-md-12" >
      <div class="services-info">
        <h3><span style="border-bottom: 1px #d32323 solid; ">店铺评论</span></h3>
      </div>
      </div>
</div>
<div class="container" style="margin-top: 50px;">
  <div class="row">
    <div class="col-lg-12 col-md-12" id="biaoqian1">
      <div class="row">
    
        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
          <ul class="nav nav-pills" role="tablist">
            <li role="presentation" class="active">
            <a>环境 <span class="badge"><?php echo ((isset($numType[0]['count(1)']) && ($numType[0]['count(1)'] !== ""))?($numType[0]['count(1)']):"0"); ?></span></a></li>
            <li role="presentation" class="active">
          </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
          <ul class="nav nav-pills" role="tablist">
            <li role="presentation" class="active">
            <a>服务 <span class="badge"><?php echo ((isset($numType[1]['count(1)']) && ($numType[1]['count(1)'] !== ""))?($numType[1]['count(1)']):"0"); ?></span></a></li>
            <li role="presentation" class="active">
          </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
          <ul class="nav nav-pills" role="tablist">
            <li role="presentation" class="active">
            <a>口味 <span class="badge"><?php echo ((isset($numType[2]['count(1)']) && ($numType[2]['count(1)'] !== ""))?($numType[2]['count(1)']):"0"); ?></span></a></li>
            <li role="presentation" class="active">
          </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
          <ul class="nav nav-pills" role="tablist">
            <li role="presentation" class="active">
            <a>菜量 <span class="badge"><?php echo ((isset($numType[3]['count(1)']) && ($numType[3]['count(1)'] !== ""))?($numType[3]['count(1)']):"0"); ?></span></a></li>
            <li role="presentation" class="active">
          </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
          <ul class="nav nav-pills" role="tablist">
            <li role="presentation" class="active">
            <a>回头客 <span class="badge"><?php echo ((isset($numType[4]['count(1)']) && ($numType[4]['count(1)'] !== ""))?($numType[4]['count(1)']):"0"); ?></span></a></li>
            <li role="presentation" class="active">
          </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
          <ul class="nav nav-pills" role="tablist">
            <li role="presentation" class="active">
            <a>其他 <span class="badge"><?php echo ((isset($numType[5]['count(1)']) && ($numType[5]['count(1)'] !== ""))?($numType[5]['count(1)']):"0"); ?></span></a></li>
            <li role="presentation" class="active">
          </li>
          </ul>
        </div>
      </div>
       </div>
    </div>
</div>
<nav>

<div class="container">
  <div class="row">
      <div class="col-lg-12">
        <ul class="nav nav-tabs" id="select">
          <li><a href="#home" data-toggle="tab">全部评论</a></li>
          <li><a href="#profile" data-toggle="tab">晒图评价</a></li>
          <li><a href="#messages" data-toggle="tab">低分评价</a></li>
        </ul>
  <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="home">
        <div id='ajaxpage'>
<div class='page1' style='display:none;'><a href="<?php echo U('details',array('p'=>1)) ;?>"  onclick="pageScroll()" title="">自动点击执行AJAX请求显示第一页内容</a></div> 
</div>
        <?php if(is_array($comment)): $k = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($k % 2 );++$k;?><div class="media" id="media1">
            <div class="media-body">
            <!-- <div class="thumbnail"> -->
            <h4 class="media-heading" id="content_name"><?php echo ($comment['commenter']); ?></h4>
            <div id="details_word2"><?php echo ($comment['content']); ?></div><hr>
            <!-- </div> -->
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
           <?php echo ($page); ?>
        </div>

        <div class="tab-pane" id="profile">
        <?php if(is_array($photoComment)): $k = 0; $__LIST__ = $photoComment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photoComment): $mod = ($k % 2 );++$k;?><div class="media" id="media2">
                  <div class="media-body">
                  <!-- <div class="thumbnail"> -->
            <h4 class="media-heading" id="content_name"><?php echo ($photoComment['commenter']); ?></h4>
            <div id="details_word2"><?php echo ($photoComment['content']); ?></div>
            <div><?php if(is_array($photos[$k-1])): foreach($photos[$k-1] as $key=>$photos[$k-1]): ?><img style="width:100px;height:100px;margin-right: 6px;margin-top: 5px" src="<?php echo ($photos[$k-1]['src']); ?>" alt="..." ><?php endforeach; endif; ?><hr>
            <!-- </div> --></div>
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <?php echo ($photoPage); ?>

          </div>
        <div class="tab-pane" id="messages">
        <?php if(is_array($lowComment)): $k = 0; $__LIST__ = $lowComment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$LowComment): $mod = ($k % 2 );++$k;?><div class="media" id="media3">
                  <div class="media-body">
                  <!-- <div class="thumbnail"> -->
            <h4 class="media-heading" id="content_name"><?php echo ($LowComment['commenter']); ?></h4>
            <div id="details_word2"><?php echo ($LowComment['content']); ?></div><hr>
            </div>
            <!-- </div> -->
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
          <?php echo ($lowPage); ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</nav>
<div class="footer">
    <div class="container">
    <div class="row">
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
  </div>
  <!-- //footer -->
  <!-- agileits-copyright -->

  <div class="agileits-copyright">
    <div class="container">
      <div class="row">
      </div>
      <p>© 2017 Food Corner. All rights reserved | Design by MIFOOD</p>
    </div>
  
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="/MIFOOD/Public/js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="/MIFOOD/Public/js/bootstrap.min.js"></script>
</body>
<script>
//为data准备的数据
var arr2=new Array();
// for($i=0;<?php echo ($ave_comment[$i]); ?>;$i++){arr2[11-$i]={$ave_comment[$i]};} 
//   for($i=0;{!$ave_comment[$i]};$i++){arr2[11-$i]=4;}

arr2[0]=<?php echo ($ave_comment[11]); ?>;arr2[1]=<?php echo ($ave_comment[10]); ?>;arr2[2]=<?php echo ($ave_comment[9]); ?>;arr2[3]=<?php echo ($ave_comment[8]); ?>;
arr2[4]=<?php echo ($ave_comment[7]); ?>;
arr2[5]=<?php echo ($ave_comment[6]); ?>;arr2[6]=<?php echo ($ave_comment[5]); ?>; arr2[7]=<?php echo ($ave_comment[4]); ?>;arr2[8]=<?php echo ($ave_comment[3]); ?>;
arr2[9]=<?php echo ($ave_comment[2]); ?>;arr2[10]=<?php echo ($ave_comment[1]); ?>;arr2[11]=<?php echo ($ave_comment[0]); ?>; //此处获得数据百分值，程序的看这里

//用于存放图表上的数据
var lineChartData = {  
//表的X轴参数
labels : ["16-03","16-04","16-05","16-06","16-07","16-08","16-09","16-10","16-11","16-12","17-01","17-02"],
datasets : [
    {
        fillColor : "transparent",     //背景色，常用transparent透明
        strokeColor : "transparent",  //线条颜色，也可用"#ffffff"
        pointColor : "transparent",   //点的填充颜色
        pointStrokeColor : "transparent",            //点的外边框颜色
        data : [5,5,5,5,5,5,5,5,5,5,5,5]      //点的Y轴值     
        //这里后台千万别动，它本来这里多了一条线，我全搞透明了，删掉也不行
    },

    {
        fillColor : "transparent",
        strokeColor : "rgba(151,187,205,1)",
        pointColor : "rgba(151,187,205,1)",
        pointStrokeColor : "#fff",
        data : []    //data中的参数，通过下方for循环，获取arr2中的数据
    }
  ]
}

   for(var i = 0; i < arr2.length;i++)
   { 
    lineChartData.datasets[1].data.push(arr2[i]);//将数组arr2中的值写入data
   }

//定义图表的参数   
var defaults = {
    scaleStartValue :0,     // Y 轴的起始值
    scaleLineColor : "rgba(0,0,0,.1)",    // Y/X轴的颜色
    scaleLineWidth : 1,        // X,Y轴的宽度
    scaleShowLabels : true,    // 刻度是否显示标签, 即Y轴上是否显示文字   
    scaleLabel : "<%=value%>", // Y轴上的刻度,即文字
    scaleFontFamily : "'Arial'",  // 字体  
    scaleFontSize : 20,        // 文字大小 
    scaleFontStyle : "normal",  // 文字样式  
    scaleFontColor : "#666",    // 文字颜色  
    scaleShowGridLines : true,   // 是否显示网格  
    scaleGridLineColor : "rgba(0,0,0,.05)",   // 网格颜色
    scaleGridLineWidth : 1,      // 网格宽度  
    bezierCurve : false,         // 是否使用贝塞尔曲线? 即:线条是否弯曲     
    pointDot : true,             // 是否显示点数  
    pointDotRadius : 6,          // 圆点的大小  
    pointDotStrokeWidth : 1,     // 圆点的笔触宽度, 即:圆点外层边框大小 
    datasetStroke : true,        // 数据集行程
    datasetStrokeWidth : 2,      // 线条的宽度, 即:数据集
    datasetFill : false,         // 是否填充数据集 
    animation : true,            // 是否执行动画  
    animationSteps : 60,          // 动画的时间   
    animationEasing : "easeOutQuart",    // 动画的特效   
    onAnimationComplete : null    // 动画完成时的执行函数   
    }

    window.onload = function(){
        var ctx = document.getElementById("myChart").getContext("2d");
        window.myLine = new Chart(ctx).Line(lineChartData,defaults); 
    }

</script>
</html>
<script type="text/javascript">
//这是分页中各个分页的AJAX请求
$(function(){
$('#ajaxpage').on('click','.page a',function () { 
$.ajax({
type: "GET",
url:$(this).attr('href'), //取得分页a标签链接地址，正好是要提交的控制器和传参：Index/ajaxPage/p/1
success:function(data){
$('#ajaxpage').html(data); //将分页控制器输出的模版加载到容器中
}
});
return false; //使a标签失效，防止页面跳转
});
});
$(function () {
$('.page a').trigger('click');
});

function pageScroll(){ 
//把内容滚动指定的像素数（第一个参数是向右滚动的像素数，第二个参数是向下滚动的像素数） 
window.scrollBy(0,1000); 
//延时递归调用，模拟滚动向上效果 
scrolldelay = setTimeout('pageScroll()',100); 
//获取scrollTop值，声明了DTD的标准网页取document.documentElement.scrollTop，否则取document.body.scrollTop；因为二者只有一个会生效，另一个就恒为0，所以取和值可以得到网页的真正的scrollTop值 
var sTop=document.documentElement.scrollTop+document.body.scrollTop; 
//判断当页面到达顶部，取消延时代码（否则页面滚动到顶部会无法再向下正常浏览页面） 
if(sTop==0) clearTimeout(scrolldelay); 
} 
</script>