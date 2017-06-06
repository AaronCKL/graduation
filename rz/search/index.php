<?PHP
include("head.php");
?>
<!doctype html>
<html>
<body>
<div class="wrapper">
<div class="project">
<div class="project-list">
<ul class="list-unstyled">
<?php    
      require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
   $searchword = $_GET["keyword"];
    $chec = mysql_query("select * from invest where title like '%$searchword%' "); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<li class="project-item">
  <img class="project-banner" src="/rz/img/invest/'.$re["imgName"].'">
  <div class="project-item-meta">
    <a class="project-title" href="/rz/finance/detail.php?investId='.$re["ID"].'">'.$re["title"].'</a>
    <p>投资资金：<span class="finance-money">'.$re["money"].'</span>
    <button class="btn btn-money">投递项目</button>
    </p>
    <p style="margin-top: 20px;">'.$re["time"].'</p>
  </div>
</li>';
  } 
  $chec = mysql_query("select * from project where title like '%$searchword%' "); 
   while($re = mysql_fetch_array($chec))
   {  
    echo '<li class="project-item">
  <img class="project-banner" src="/rz/img/project/'.$re["imgName"].'">
  <div class="project-item-meta">
    <a class="project-title" href="/rz/project/detail.php?projectId='.$re["ID"].'">'.$re["title"].'</a>
    <p>融资资金：<span class="finance-money">'.$re["money"].'</span>
    <button class="btn btn-money">约谈项目方</button>
    </p>
    <p style="margin-top: 20px;">'.$re["time"].'</p>
  </div>
</li>';
  } 
  mysql_close($con);
?>  
<!-- <li class="project-item">
	<img class="project-banner" src="../img/1.jpg">
	<div class="project-item-meta">
	  <a class="project-title" href="">创新层名单出来了！1329家企业入选，英雄互娱、神州优车等在内</a>
	  <p>2017-02-34</p>
	</div>
</li> -->
</ul>
</div>
</div>
</div>
</body>
</html>
<?PHP
include("../common/footer.html");
?>
