<?PHP
Session_Start();
if(!$_SESSION['name']){
	header('Location:../index.php');
}
?>
<!doctype html>
<html>
<head >
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/bs/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/bs/common/css/common.css">
<link rel="stylesheet" href="/bs/common/css/test.css">
<link rel="stylesheet" href="/bs/common/css/login.css">
<link rel="stylesheet" href="/bs/user/css/user.css">
<script type="text/javascript" src="/bs/common/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/bs/common/js/Tony_Tab.js"></script>
<script type="text/javascript" src="/bs/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper">
<div class="header ib-header">
	<div class="ib-header--inner">
		<a class="header-logo" href="">logo</a>
		<ul class="ib-nav">
		   <li class=""><a href="/bs/index.php">首页</a></li>
		   <li class=""><a href="/bs/project/index.php" >项目汇集</a></li>
		   <li class=""><a>财经要闻</a></li>
		   <li class="dropdown active">
		   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		   我的
		   <b class="caret"></b>
		   </a>
		   <ul class="dropdown-menu" style="min-width: 100px;">
                    <li class="text-center"><a href="follow.php">我的关注</a></li>
                    <li class="text-center"><a href="fans.php">我的粉丝</a></li>
                    <li class="text-center"><a href="letter.php">我的私信</a></li>
                    <li class="text-center"><a href="finance.php">我要融资</a></li>
                    <li class="text-center"><a href="loginOut.php">退出登陆</a></li>
                </ul>
		   </li>
		</ul>
		<div class="login-nav">
		<?php 
		if(!empty($_SESSION['name'])){
                echo '<span style="font-size:18px;" class="text-danger">'.$_SESSION['name'].'</span>';
        }else{
              echo '<a href="" data-toggle="modal" data-target="#register-modal">注册</a>
                <a href="" data-toggle="modal" data-target="#login-modal">登录</a>';
        }
        ?>
		</div>
	</div>
</div>
</div>
</body>
</html>