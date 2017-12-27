<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">

    <title>美工</title>

<!--CSS-->

<link rel="icon" href="/Public/home/images/logo.png" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="/Public/home/Fancybox/jquery.fancybox.css" media="screen" />
<link href="/Public/home/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/Public/home/css/index.css" rel="stylesheet" type="text/css">
<link href="/Public/home/css/float.css" rel="stylesheet" type="text/css">
<link href="/Public/home/css/nav.css" rel="stylesheet">
<link href="/Public/home/css/foot.css" rel="stylesheet">
<link href="/Public/home/css/img.css" rel="stylesheet">

<!--JS-->
<script src="/Public/home/js/jquery-1.11.1.min.js"></script>
<script src="/Public/home/js/bootstrap.min.js"></script>
<script src="/Public/home/js/meigong.js"></script>
<script src="/Public/home/js/index1.js"></script>
<script src="/Public/home/js/index.js"></script>
<script src="/Public/home/js/float.js"></script>
<script src="/Public/home/js/img.js"></script>
<script type="text/javascript" src="/Public/home/fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".various2").fancybox({
			'width'				: '40%',
			'height'			: '70%',
			'autoScale'			: false,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'type'				: 'iframe',
			'centerOnScroll'	: true,
		});
		$(".various3").fancybox({
			'width'				: '40%',
			'height'			: '70%',
			'autoScale'			: false,
			'transitionIn'		: 'none',
			'transitionOut'		: 'none',
			'type'				: 'iframe',
			'centerOnScroll'	: true,
		});
	});
</script>

</head>
<body>
<div class="nav_box">
	<div class="nav_main">
    	<div class="logo_box">
        	<a href="<?php echo U('index/index');?>"><img class="logo" src="/Public/home/images/logo.png"></a>
        </div>
        <div class="seat">
        	&nbsp;        	
        </div>
       	<div class="nav_ul">
        	<ul>
            	<li><a href="<?php echo U('index/tbsp');?>">淘宝视频</a></li>
                <li><a href="<?php echo U('index/jdal');?>">经典案例</a></li>
                <li><a href="<?php echo U('index/meigong');?>">淘宝美工</a></li>
                <li><a href="<?php echo U('index/fancybox');?>" class="various2">免费咨询</a></li>
                <li><a href="#">MG动画</a></li>
                <li><a href="<?php echo U('index/news');?>">新闻资讯</a></li>
                
                <li><a href="<?php echo U('index/about');?>">关于我们</a></li>
                <li><a href="<?php echo U('index/join');?>">加入我们</a></li>
            </ul>
        </div>
        <div class="serch_box">
        	<form class="form_search" method="post" action="<?php echo U('public/index');?>">
            	<div class="big">
            	<select class="lie" name="video">
                	<option value="1">淘宝视频</option>
                    <option value="2">热门视频</option>
                </select>
            	<input type="text" class="search_val" placeholder="请输入视频名称" style="color:black" name="text" >
                </div>
            	<input type="submit" src="/Public/home/images/03.png" value="" class="serch_img">
            </form>
        </div>
    </div>
</div>
<!--上方为电脑版导航-->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="/Public/home/images/wap_logo.png"></a>
  
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo U('index/tbsp');?>">淘宝视频</a></li>
            <li><a href="<?php echo U('index/jdal');?>">经典案例</a></li>       
           	<li><a href="<?php echo U('index/fancybox');?>" class="various2">免费咨询</a></li>
            <li><a href="#">MG动画</a></li>
            <li><a href="<?php echo U('index/news');?>">新闻资讯</a></li>
            <li><a href="<?php echo U('index/about');?>">关于我们</a></li>
            <li><a href="<?php echo U('index/join');?>">加入我们</a></li>
        </ul>
    </div>
    </div>
</nav>
<!--上方为手机版导航-->

<!--上方为手机版导航-->
<div class="container" style="height:300px; margin-top:2em;">
	<div class="row">
        <div class="col-md-3 col-xs-6">
        	<div class="content">
        	<img src="/Public/home/images/1.png" class="photo img-responsive center-block">
             	<p class="text-danger">￥4200-10200</p>
                <p class="title">从美工到视觉设计师任您选择</p>
            </div>  
        </div>
        <div class="col-md-3 col-xs-6">
        	<div class="content">
        		<img src="/Public/home/images/2.png" class="photo img-responsive center-block" >
            	<p class="text-danger">￥&nbsp;150</p>
                <p class="title">专注主图，让你的店铺更显眼</p>
            </div>   
        </div>
        <div class="col-md-3 col-xs-6">
        	<div class="content">
        		<img src="/Public/home/images/3.png" class="photo img-responsive center-block">
            	<p class="text-danger">￥&nbsp;1500</p>
                <p class="title">耳目一新，过目难忘</p>
            </div>    
        </div>
        <div class="col-md-3 col-xs-6">
        	<div class="content">
        		<img src="/Public/home/images/4.png" class="photo img-responsive center-block">
            	<p class="text-danger">￥&nbsp;1200</p>
                <p class="title">抓住重点，精修产品	</p>
            </div>    
        </div>
    </div>
</div>
<div class="container bigbox" style="margin-top:1em;">
	<h3 style="text-align:center;">案例展示</h3>
    <span class="glyphicon glyphicon-chevron-right right1"></span>
      <span class="glyphicon glyphicon-chevron-left left1"></span>
	<div class="row back" style="margin-top:2em;">
    	 <div class="col-md-12 col-xs-12" style="text-align:center;margin-bottom:2em;">
        	<img src="/Public/home/images/21212.png" class="img-responsive center-block">
        </div>
        <div class="col-md-12 col-xs-12" style="text-align:center;margin-bottom:2em;">
        	<img src="/Public/home/images/212.png" class="img-responsive center-block">
        </div>
        <div class="col-md-12 col-xs-12" style="text-align:center;margin-bottom:2em;">
        	<img src="/Public/home/images/2123.png" class="img-responsive center-block">
        </div>
    </div>
</div>

<!--底部栏pc-->
<div class="footer">
	<div class="footer_main">
    	<div class="footer_main_b">
    	<ul>
			<li>关于我们</li>
			<li>推广服务</li>
			<li>公司账号</li>
			<li>法律声明</li> 
			<li>企业资质</li>
 			<li>联系我们</li>
			<li>合作伙伴</li>
			<li>意见反馈</li>
        </ul>
        <p class="jsj">
        北京中细软网络科技有限公司 版权所有 ©2002-2016 京ICP备11017069号-5 京公网安备11010802012915号
        <br>地址：北京市房山区长阳路中细软知识产权科技园中细软大厦
        </p>
        </div>
         <div class="footer_main_d">
        	全国免费服务热线： <span style="color:#cc1414">400-168-6868</span><br>
			公司地址： 浙江省杭州市未来科技城
        </div>
    </div>
</div>
<!--底部栏wap-->
<div class="container-fluid xfoter" style="background-color:#4e4e4e;" >
	<div style="float:left;">
		<h6 style="color:#e4e3e3;">关于我们</h6>
		<ul class="footer2">
			<li>推广服务</li>
			<li>企业资质</li> 
		</ul>      
		<ul class="footer3">
			<li>法律声明</li>
			<li>意见反馈</li>
		</ul>
	</div>

	<div style="float:right; margin-top:0.5em;">
		<p style="color:#e4e3e3; float:right;">全国服务热线<br>
			<span style="color:#e40907;">400-168-1688</span>
			<br>
			 公司地址:
			 <br>
			 杭州市余杭区
			 <br>
			 安通电子信息科创园
		 </p>
	</div>       
</div>

<!--右侧悬浮菜单-->
	<div class="slide">
		<ul class="icon">			
			<li class="qq"></li>
			<li class="tel"></li>
			<li class="wx"></li>
			<a href="#"><li class="top"></li></a>
		</ul>
		
		<ul class="info">
			<li class="qq">
				<p>在线沟通，请点我<a href="http://wpa.qq.com/msgrd?v=3&uin=925556122&site=qq&menu=yes" target="_blank">在线咨询</a></p>
			</li>
			<li class="tel">
				<p>咨询热线：<br>400-800-8888<br>客服qq：<br>862164018</p>
			</li>
			<li class="wx">
				<div class="img"><img src="/Public/home/images/1441956938.png"/></div>
			</li>
			
		</ul>
	</div>
	<div id="btn" class="index_cy"></div>

</body>
</html>