<?PHP
include("head.php");
?>
<!doctype html>
<html>
<body>
<div class="fix-1">
<img src="image/mon1.jpg">
</div>
<div class="fix-2">
<img src="image/mon2.jpg">
</div>
<div class="wrapper">
<div class="project">
<div class="project-list">
<ul class="list-unstyled">
<?php    
      $con = mysql_connect('localhost','root','');
   if (!$con)
     {
  die('Could not connect: ' . mysql_error());
     }
   mysql_query("set names 'utf8'");
   mysql_select_db("financing", $con);
    $chec = mysql_query("select * from project"); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<li class="project-item">
	<img class="project-banner" src="/bs/img/project/'.$re['imgPath'].'">
	<div class="project-item-meta">
	  <a class="project-title" href="detail.php?projectId='.$re['ID'].'">'.$re['title'].'</a>
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
