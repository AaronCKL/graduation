<?PHP
Session_Start();
?>
<!doctype html>
<html>
<head >
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/bs/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/bs/common/css/common.css">
<link rel="stylesheet" href="/bs/common/css/test.css">
<link rel="stylesheet" href="/bs/common/css/login.css">
<script type="text/javascript" src="/bs/common/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/bs/common/js/Tony_Tab.js"></script>
<script type="text/javascript" src="/bs/bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
.clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden;}
.clearfix{zoom:1;}
ul, li{list-style:none;}/*去掉无序列表前面的原点*/
img{border:0;}
.focus{height:400px;overflow:hidden;position:relative;}
.focus ul{height:400px;position:absolute;padding: 0;margin: 0;}
.focus ul li{float:left;height:400px;overflow:hidden;position:relative;background:#000;}
.focus .preNext{width:45px;height:100px;position:absolute;top:150px;background:url(img/sprite.png) no-repeat 0 0;cursor:pointer;display:none;}
.focus .pre{left:0;}
.focus .next{right:0;background-position:right top;}
</style>
</head>
<body>
<div class="wrapper">
<div class="header ib-header">
	<div class="ib-header--inner">
		<a class="header-logo" href="">logo</a>
		<ul class="ib-nav">
		   <li class="active"><a href="/bs/index.php">首页</a></li>
		   <li class=""><a href="/bs/project/index.php" >项目汇集</a></li>
		   <li class=""><a>财经要闻</a></li>
		   <li class="dropdown">
		   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		   我的
		   <b class="caret"></b>
		   </a>
		   <ul class="dropdown-menu" style="min-width: 100px;">
                    <li class="text-center"><a href="/bs/user/follow.php">我的关注</a></li>
                    <li class="text-center"><a href="/bs/user/fans.php">我的粉丝</a></li>
                    <li class="text-center"><a href="/bs/user/letter.php">我的私信</a></li>
                    <li class="text-center"><a href="/bs/user/finance.php">我要融资</a></li>
                    <li class="text-center"><a href="/bs/user/loginOut.php">退出登陆</a></li>
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