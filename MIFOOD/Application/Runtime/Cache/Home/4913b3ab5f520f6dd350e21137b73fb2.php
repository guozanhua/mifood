<?php if (!defined('THINK_PATH')) exit();?><html><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.7, maximum-scale=1.0, user-scalable=no">
  <title>MIFOOD-page</title>
  <link rel="icon" href="/3.2.1/Application/Public/images/logo2.ico" type="images/x-icon"/>
    <link rel="stylesheet" type="text/css" href="/3.2.1/Application/Public/css/test.css" />
  <link rel="stylesheet" type="text/css" href="/3.2.1/Application/Public/css/test.css" />

</head>
<body> 
lllllllllllllll
<div id='ajaxpage'>
<div class='page' style='display:none;'><a href="<?php echo U('page',array('p'=>1));?>" title="">自动点击执行AJAX请求显示第一页内容</a></div> 
</div>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i; echo ($list['shop_name']); ?><br><?php echo ($list['address']); endforeach; endif; else: echo "" ;endif; ?>
<?php echo ($page); ?> 
</body></html>
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
</script>