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
	</div>
</div>
<div class="wrap-summary">
  <div class="container">
    <div class="summary">
     <ul>
        <li><p>项目对接</p><p><span>22</span>年</p></li>
        <li><p>资金方</p><p><span>30万+</span></p></li>
        <li><p>项目方</p><p><span>180万+</span></p></li>
        <li><p>融资金额</p><p><span>1,280亿+</span></p></li>
        <li><p>总持有资金</p><p><span>50,000亿+</span></p></li>
        <li><p>举办活动</p><p>超<span>300</span>场</p></li>
     </ul>
    </div>
  </div>
</div>
<div class="ib-tab-wrapper">
<div class="match-content">
<div class="match-nav">
<h1 style="font-size: 28px;"><i class="icon"></i>优选项目
<a class="more" href="project/index.php">更多></a>
</h1>
</div>
<div class="matchTabContent">
<ul class="match-tab-list ib-tab-list tab-pane">
<?php    
      require("config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
    $chec = mysql_query("select * from project limit 6"); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<li class="tab-item">
  <a href="project/detail.php?projectId='.$re['ID'].'"><div class="match-wrapper">
  <img class="match-image" src="/rz/img/project/'.$re['imgName'].'">
  <div class="match-title"><img src="/rz/common/img/mceng.png" width="305"></div>
  </div>
  <div class="rz_inner">
    <h4>'.$re['title'].'</h4>
  </div></a>
</li>';
  } 
  mysql_close($con);
?> 
<!-- <li class="tab-item">
	<div class="match-wrapper">
	<img class="match-image" src="img/9.jpg">
	<div class="match-title"><img src="/rz/common/img/mceng.png" width="305"></div>
	</div>
  <div class="rz_inner">
    <h4>庙宇动漫哦你弄i比u比u不不比u哦吼吼偶贡藕狗狗</h4>
  </div>
</li> -->
</ul>
</div>
</div>
</div>
<div class="ib-tab-wrapper">
<div class="match-content">
<div class="match-nav ">
<h1 style="font-size: 28px;"><i class="icon"></i>优选资金
<a class="more" href="news/index.php">更多></a>
</h1>
</div>
<div class="matchTabContent">
<ul class="match-tab-list ib-tab-list tab-pane">
<?php    
      require("config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
    $chec = mysql_query("select * from invest limit 6"); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<li class="tab-item">
  <a href="finance/detail.php?investId='.$re['ID'].'"><div class="match-wrapper">
  <img class="match-image" src="/rz/img/invest/'.$re['imgName'].'">
  <div class="match-title"><img src="/rz/common/img/mceng.png" width="305"></div>
  </div>
  <div class="rz_inner">
    <h4>'.$re['title'].'</h4>
  </div></a>
</li>';
  } 
  mysql_close($con);
?> 
</ul>
</div>
</div>
</div>
<div class="ib-tab-wrapper">
<div class="match-content">
<div class="match-nav ">
<h1 style="font-size: 28px;"><i class="icon"></i>资讯
<a class="more" href="news/index.php">更多></a>
</h1>
</div>
<div class="matchTabContent">
<ul class="match-tab-list ib-tab-list tab-pane">
<?php    
      require("config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
    $chec = mysql_query("select * from news limit 6"); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<li class="tab-item">
  <a href="finance/detail.php?newsId='.$re['ID'].'"><div class="match-wrapper">
  <img class="match-image" src="/rz/img/news/'.$re['imgName'].'">
  <div class="match-title"><img src="/rz/common/img/mceng.png" width="305"></div>
  </div>
  <div class="rz_inner">
    <h4>'.$re['title'].'</h4>
  </div></a>
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