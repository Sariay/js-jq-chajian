<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>需求</title>
<style>
	a,input:focus{outline: none;}
	body{font-size:1em;}
</style>
</head>

<body>
<form methos="get" id="ch" action="<?php echo U('index/fancybox');?>">
	<h1 style="color:#FF0000">拍片需求</h1>
	<p style="color: #FF0000">10秒提交，立即致电免费策划！</p>
	<select  style="width: 100%;height: 40px;margin-bottom: 25px;font-size: 16px;padding-left: 8px;" name="video" class="xz1">
		<option>视频类型</option>
		<option value="产品片">产品片</option>
		<option value="营销片">营销片</option>
		<option value="宣传片">宣传片</option>
		<option value="微电影">微电影</option>
		<option value="其他">其他</option>
	</select>
	<select style="width: 100%;height: 40px;margin-bottom: 25px;font-size: 16px;padding-left: 8px;" name="price" class="xz2">
		<option>制作预算</option>
		<option value="1000-5000">1000-5000</option>
		<option value="5000-10000">5000-10000</option>
		<option value="200000-50000">200000-50000</option>
		<option value="50000-100000">50000-100000</option>
		<option value="100000以上">100000以上</option>
	</select>
	<input type="text" style="width: 98%;height: 40px;margin-bottom: 25px;font-size: 16px;padding-left: 8px;" placeholder="联系人姓名" name="name">
	<input type="text" style="width: 98%;height: 40px;margin-bottom: 25px;font-size: 16px;padding-left: 8px;" class="sj" placeholder="手机号码" name="tel">
	<input type="submit" style="width: 100%;height: 40px;background:#FF0000;border: none;cursor: pointer;font-size: 16px;color: #fff;" value="免费策划">
	
</form>
<script src="/Public/home/js/jquery-1.11.1.min.js"></script>
<script>
	$(function(){
		$("#ch").submit(function(){
			var a=$(".xz1").val();
			var b=$(".xz2").val();
			var c=$(".sj").val();
			var d=c.length
			var e=0;
			
			if(a=="视频类型"){alert("请选择视频类型");return false;}
			if(b=="制作预算"){alert("请选择制作预算");return false;}
			if(!(/^1[34578]\d{9}$/.test(c))){alert("请填写正确的手机格式");return false;}else{e=1}
			if(a!="视频类型"&&b!="制作预算"&&e==1){
				alert("提交成功我们的工作人员会尽快与您联系")
				
				
			}
		})
	})
</script>
</body>
</html>