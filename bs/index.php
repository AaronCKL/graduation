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
        <a href="">
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
<a class="btn btn-info" style="float:right;margin-right:20px;" href="project/index.php">更多项目</a>
</div>
<div class="matchTabContent">
<ul class="match-tab-list ib-tab-list tab-pane">
<?php    
     require("config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
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
<a class="btn btn-info" style="float:right;margin-right:20px;" href="news/index.php">更多财经</a>
</div>
<div class="matchTabContent">
<ul class="match-tab-list ib-tab-list tab-pane">
<?php    
      require("config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
    $chec = mysql_query("select * from news limit 10"); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<li class="tab-item">
	<div class="match-wrapper">
	<a class="project-title" href="news/detail.php?newsId='.$re['ID'].'">
	<img class="match-image" src="/bs/img/news/'.$re['imgPath'].'">
	<div class="match-title">'.$re['title'].'</div>
	</a>
	</div>
     </li>';
  } 
  mysql_close($con);
?> 
</ul>
</div>
</div>
</div>
</div>
<?PHP
include("common/footer.html");
?>
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