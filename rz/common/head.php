<?php
Session_start();
?>
<!doctype html>
<html>
<head >
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/rz/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/rz/common/css/common.css">
<link rel="stylesheet" href="/rz/common/css/test.css">
<link rel="stylesheet" href="/rz/common/css/login.css">
<link rel="stylesheet" href="/rz/common/css/head.css">
<title>安徽融资网</title>
<script type="text/javascript" src="/rz/common/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/rz/common/js/Tony_Tab.js"></script>
<script type="text/javascript" src="/rz/bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
.clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden;}
.clearfix{zoom:1;}
ul, li{list-style:none;}/*去掉无序列表前面的原点*/
img{border:0;}
.focus{height:400px;overflow:hidden;position:relative;}
.focus ul{height:400px;position:absolute;padding: 0;margin: 0;}
.focus ul li{float:left;height:400px;overflow:hidden;position:relative;background:#000;}
.focus .btnn{position:absolute;width:1350px;height:70px;padding:5px 10px;right:0;bottom:5px;text-align:center;}
.focus .btnn span{display:inline-block;_display:inline;_zoom:1;width:13px;height:13px;_font-size:0;margin-left:5px;cursor:pointer;background:#fff;border-radius:50%;}
.focus .btnn span.on{background:yellow;}
.focus .preNext{width:45px;height:100px;position:absolute;top:150px;background:url(img/sprite.png) no-repeat 0 0;cursor:pointer;display:none;}
.focus .pre{left:0;}
.focus .next{right:0;background-position:right top;}
</style>
</head>
<body>
<div class="wrapper">
<div class="header ib-header">
	<div class="ib-header--inner">
		<a class="header-logo" href=""><img src="/rz/common/img/9.png" width="100px" height="60px"></a>
    <div class="search-wrapper">
	    <form action="search/index.php" method="get">
        <input class="ipt" type="text" name="keyword" placeholder="项目·新闻">
        <button class="btn btn-color"><span class="glyphicon glyphicon-search" style="color: #fff;font-size: 20px;"></span></button>
        </form>
	</div>
		
		<div class="login-nav">
    <?php 
    if(!empty($_SESSION['name'])){
                echo '<li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#ff4040;font-size:18px;">
       '.$_SESSION['name'].'
       <b class="caret"></b>
       </a>
       <ul class="dropdown-menu" style="min-width: 100px;">
                    <li class="text-center"><a href="/rz/user/invest.php">我要投资</a></li>
                    <li class="text-center"><a href="/rz/user/finance.php">我要融资</a></li>
                    <li class="text-center"><a href="/rz/user/loginOut.php">退出登陆</a></li>
                </ul>
       </li>';
        }else{
              echo '<a href="" data-toggle="modal" data-target="#login-modal">Hi，请登录</a>
          <a href="" style="color:rgb(153, 153, 153);" data-toggle="modal" data-target="#register-modal">注册</a>';
        }
    ?>
		</div>
	</div>
</div>
<div class="rz-head-nav">
  <ul class="rz-nav">
       <li class="active"><a href="/rz/index.php">首页</a></li>
       <li class=""><a href="/rz/finance/index.php" >找资金</a></li>
       <li class=""><a href="/rz/project/index.php" >找项目</a></li>
       <li class=""><a href="/rz/news/index.php">资讯</a></li>
    </ul>
  </div>
</div>
<div class="modal fade md-modal" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">账号登录</h4>
      </div>
      <div class="modal-body">
        <form id="login-form" method="POST" action="/rz/user/login.php">
  <div class="form-group">
    <label for="firstname" class="col-sm-3 control-label">手机</label>
    <div class="col-sm-8">
      <input type="text" name="loginMobile" class="form-control" id="loginMobile" placeholder="请输入手机">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-3 control-label">密码</label>
    <div class="col-sm-8">
      <input type="password" name="loginPassword" class="form-control" id="loginPassword" placeholder="请输入密码">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-5">
      <button type="submit" class="btn btn-danger form-control">登录</button>
    </div>
  </div>
</form>
      </div>
    </div>
  </div>
  </div>
  <div class="modal fade md-modal" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">帐号注册</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="/rz/user/register.php" id="register-form">
          <div class="form-group">
          <label for="mobile" class="col-sm-3 control-label">手机</label>
           <div class="col-sm-8">
            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="请输入手机">
           </div>
          </div>
          <div class="form-group">
          <label for="password" class="col-sm-3 control-label">密码</label>
           <div class="col-sm-8">
            <input type="password" name="password" class="form-control" id="password" placeholder="6-15位密码">
           </div>
          </div>
          <div class="form-group">
          <label for="name" class="col-sm-3 control-label">昵称</label>
           <div class="col-sm-8">
            <input type="text" name="name" class="form-control" id="name" placeholder="3-16位昵称">
           </div>
          </div>
          <div class="form-group">
          <div class="col-sm-offset-3 col-sm-5">
            <button type="submit" class="btn btn-danger form-control">确认注册</button>
           </div>
          </div>
          <div class="form-group">
          <div class="col-sm-offset-3 col-sm-8">
            <span>已有注册账号?</span>
            <a href="" data-toggle="modal" data-dismiss="modal" data-target="#login-modal">请登录</a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>