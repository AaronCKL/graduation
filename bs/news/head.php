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
<link rel="stylesheet" href="/bs/project/css/project.css">
<script type="text/javascript" src="/bs/common/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/bs/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper">
<div class="header ib-header">
	<div class="ib-header--inner">
		<a class="header-logo" href=""><img src="/bs/common/img/9.png" width="120px" height="60px"></a>
		<ul class="ib-nav">
		   <li class=""><a href="/bs/index.php">首页</a></li>
		   <li class=""><a href="/bs/project/index.php" >项目汇集</a></li>
		   <li class="active"><a href="/bs/news/index.php">财经要闻</a></li>
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
<div class="modal fade md-modal" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">账号登录</h4>
      </div>
      <div class="modal-body">
        <form id="login-form" method="POST" action="/bs/user/login.php">
          <div class="form-group">
            <input name="loginMobile" type="text" class="form-control mobile" id="loginMobile" placeholder="您的手机号码">
          </div>
          <div class="form-group">
            <input name="loginPassword" type="password" class="form-control password" id="loginPassword" placeholder="6-15位密码">
          </div>
          <!-- <div class="form-group">
              <label for="auto-login" class="wt-checkbox-wrapper">
              <input type="checkbox" id="auto-login" name="auto-login" value="" checked>
              <label for="auto-login" class="wt-checkbox"></label>自动登录
              </label>
          </div> -->
          <div class="form-group">
            <input type="submit" class="submit form-control btn btn-primary" value="登录">
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
        <form method="POST" action="/bs/user/register.php" id="register-form">
          <div class="form-group">
            <input name="mobile" type="text" class="form-control mobile" id="mobile" placeholder="您的手机号码">
          </div>
          <div class="form-group">
            <input type="password" class="form-control password" id="password" name="password" placeholder="6-15位密码">
          </div>
          <div class="form-group">
            <input type="text" class="form-control username" id="name" name="name" placeholder="3-16位昵称">
          </div>
          <div class="form-group">
            <input type="submit" class="submit form-control btn btn-primary" value="确认注册">
          </div>
          <div class="form-group">
            <span>已有注册账号?</span>
            <a href="" data-toggle="modal" data-dismiss="modal" data-target="#login-modal">请登录</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>