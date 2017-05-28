<?PHP
include("head.php");
?>
<!doctype html>
<html>
<body>
<div class="fix-1">
<a href="../project/index.php"><img src="image/mon1.jpg"></a>
</div>
<div class="fix-2">
<a <?php 
   if(!empty($_SESSION['name']))
   {
    echo 'href="../user/finance.php"'; 
   }else{
    echo 'href="#" data-toggle="modal" data-target="#login-modal"';
   }

    ?>><img src="image/mon2.jpg"></a>
</div>
<div class="wrapper">
<div class="project">
<div class="project-list">
<ul class="list-unstyled">
<?php    
      require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
    $chec = mysql_query("select * from news"); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<li class="project-item">
	<img class="project-banner" src="/bs/img/news/'.$re['imgPath'].'">
	<div class="project-item-meta">
	  <a class="project-title" href="detail.php?newsId='.$re['ID'].'">'.$re['title'].'</a>
	  <p>'.$re['time'].'</p>
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
