<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>HZAU学生综合管理系统</title>
	<link rel="shortcut icon" href="/hzauscms/logo.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/hzauscms/Public/front/css/login.css">
</head>
<body>
<div id="wrapper">
	<div class="header">
		<div class="container">
			<a href="/hzauscms/index.php/Home/Index/index"><img src="/hzauscms/Public/front/images/header2.png" alt="hzauscms" class="header-img"></a>
			<div class="search-area">
				<input type="text" class="search" placeholder="请输入关键词"><button class="dosearch">搜索</button>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="container">
			<div class="main-left">
				<div class="main-left-information">
					<h1>毕业季</h1>
					<p>那些年错过的大雨<br>　那些年错过的爱情<br>　　好想拥抱你拥抱错过的勇气</p>
				</div>
			</div>
			<div class="main-right">
				<div class="form-head">登录</div>
				<form action="">
					<span><input type="text" name="username" placeholder="请输入用户名/学号" class="username"></span>
					<span><input type="password" name="password" placeholder="请输入密码" class="password"></span>
					<span><input type="text" name="code" placeholder="验证码" class="code">验证码1234</span>
					<!-- <span class="error">错误的用户名或密码</span> -->
					<span style="margin-top:20px;"><input type="submit" name="submit" value="登录" class="submit"></span>
					<div><input type="checkbox" name="checkbox" value="remenber">记住密码<a href="" class="forget">忘记密码?</a></div>
				</form>	
			</div>
			<div class="main-bottom">
				<div class="section">
					<img src="/hzauscms/Public/front/images/login/zaocao.jpg" alt="">
					<h5>查早操</h5>
					<h6>更规范</h6>
				</div>
				<div class="section">
					<img src="/hzauscms/Public/front/images/login/wangui.jpg" alt="">
					<h5>查晚归</h5>
					<h6>更高效</h6>
				</div>
				<div class="section">
					<img src="/hzauscms/Public/front/images/login/weisheng.jpg" alt="">
					<h5>查卫生</h5>
					<h6>更严谨</h6>
				</div>
				<div class="section">
					<img src="/hzauscms/Public/front/images/login/ketang.jpg" alt="">
					<h5>查课堂</h5>
					<h6>更及时</h6>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<span class="footer-left">
				<h6>@2016 hzau</h6>
				<a href="http://www.hzau.edu.cn/2014/ch/" target="blanket">华中农业大学</a>
				<a href="http://coi.hzau.edu.cn/" target="blanket">信息学院</a>
				<a href="http://jw.hzau.edu.cn/" target="blanket">教务系统</a>
			</span>
			<span class="footer-right">
				技术支持　<a href="http://www.52feidian.com/" target="blanket"><img src="/hzauscms/Public/front/images/logo.png" alt="沸点"> 沸点工作室</a>
			</span>
		</div>
	</div>
</div>
</body>
</html>