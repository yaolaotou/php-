<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
<style type="text/css">
	#bg{
		width: 1200px;
		height: 1000px;
		background: #DCD7D6;
		margin: auto;
		padding: auto;
	}
	#logo{
		width: 80px;
		height: 80px;
		background-image: url(img/logo.png);
	}
	#nav{
		width: 1100px;
		height: 80px;
		background-color: #FFF;
		position: relative;
		margin: auto;
		padding: auto;
	}
	#RollingPic{
		width: 1100px;
		height: 300px;
		background-color: #FFF;
		position: relative;
		margin: auto;
		margin-top: 20px;
		padding: auto;
	}
	#RollingPic img {
		width: 1100px;
		height: 300px;
	}
	</style>
</head>

<body>
<div id="bg">
<div id="nav">
	<div id="logo"></div>
	<div id="RollingPic">
		<!--滚动图片，轮播-->
		<img src="img/RollingPic_01.png"/>
	</div>
</div>
</div>
<?php
echo "hello world"	
?>
</body>
</html>