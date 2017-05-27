<?PHP
include("common/head.php");
?>
<!doctype html>
<html>
<body>
<div class="wrapper">
<div class="ib-banner">
	<div id="focus" class="focus">
		<ul>
			<li><a href="JavaScript:;"><img src="img/1.jpg" style=" height:400px ;"/></a></li>
			<li><a href="JavaScript:;"><img src="img/2.jpg" style=" height:400px ;"/></a></li>
			<li><a href="JavaScript:;"><img src="img/3.jpg" style=" height:400px ;"/></a></li>
			<li><a href="JavaScript:;"><img src="img/4.jpg" style=" height:400px ;"/></a></li>
			<li><a href="JavaScript:;"><img src="img/5.jpg" style=" height:400px ;"/></a></li>
		</ul>
		<div class="content-wrapper">
		<form>
			<label style="position: relative;">
				<input type="text" name="keyword" placeholder="热门城市">
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search" style="color: #3084e5;font-size: 25px;"></span></button>
			</label>
		</form>
		</div>
	</div>
</div>
<div class="city-content">	
  <div class="city-title">地方名企</div>
  <div class="city-link">
        <a href="">
          <div class="shadow-model"></div>
          <div class="desc">
            <p class="title">伦敦</p>
            <p class="subword">London</p>
          </div>
          <img src="img/6.jpg" alt="伦敦">
        </a>
      
        <a href="">
          <div class="shadow-model"></div>
          <div class="desc">
            <p class="title">马德里</p>
            <p class="subword">Madrid</p>
          </div>
          <img src="img/7.jpg" alt="马德里">
        </a>
        <a href="/search/city/?keyword=曼彻斯特">
          <div class="shadow-model"></div>
          <div class="desc">
            <p class="title">曼彻斯特</p>
            <p class="subword">Manchester</p>
          </div>
          <img src="img/8.jpg" alt="曼彻斯特">
        </a>
  </div>
</div>
<div class="ib-tab-wrapper">
<div class="match-content">
<div class="match-nav">
<button class="btn btn-default text-info" style="margin-left:20px; ">项目汇集</button>
<button class="btn btn-info" style="float:right;margin-right:20px; ">更多项目</button>
</div>
<div class="matchTabContent">
<ul class="match-tab-list ib-tab-list tab-pane">
<?php    
      $con = mysql_connect('localhost','root','');
   if (!$con)
     {
  die('Could not connect: ' . mysql_error());
     }
   mysql_query("set names 'utf8'");
   mysql_select_db("financing", $con);
    $chec = mysql_query("select * from project limit 10"); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<li class="tab-item">
	<div class="match-wrapper">
	<a class="project-title" href="project/detail.php?projectId='.$re['ID'].'">
	<img class="match-image" src="/bs/img/project/'.$re['imgPath'].'">
	<div class="match-title">'.$re['title'].'</div>
	</a>
	</div>
     </li>';
  } 
  mysql_close($con);
?> 
<!-- <li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li> -->
</ul>
</div>
</div>
</div>
<div class="ib-tab-wrapper">
<div class="match-content">
<div class="match-nav">
<button class="btn btn-default text-info" style="margin-left:20px; ">财经要闻</button>
<button class="btn btn-info" style="float:right;margin-right:20px; ">更多财经</button>
</div>
<div class="matchTabContent">
<ul class="match-tab-list ib-tab-list tab-pane">
<li class="tab-item">
	<div class="match-wrapper">
	<a href="">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</a>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
</ul>
</div>
</div>
</div>
<div class="ib-tab-wrapper">
<div class="match-content">
<div class="match-nav">
<button class="btn btn-default text-info" style="margin-left:20px; ">项目汇集</button>
<button class="btn btn-info" style="float:right;margin-right:20px; ">更多项目</button>
</div>
<div class="matchTabContent">
<ul class="match-tab-list ib-tab-list tab-pane">
<li class="tab-item">
	<div class="match-wrapper">
	<a href="">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</a>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
<li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title">你好好</div>
	</div>
</li>
</ul>
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
            <a href="" data-toggle="modal" data-target="#login-modal">请登录</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
winWidth = document.body.clientWidth;
$('#focus').css("width",winWidth);
$('#focus').find('ul li').css("width",winWidth);
$('#focus').find('ul li img').css("width",winWidth);
$(function() {
	$('#focus').slideFocus();
});
</script>
</body>
</html>