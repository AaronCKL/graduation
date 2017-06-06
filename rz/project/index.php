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
    $chec = mysql_query("select * from project"); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<li class="project-item">
  <img class="project-banner" src="/rz/img/project/'.$re["imgName"].'">
  <div class="project-item-meta">
    <a class="project-title" href="detail.php?projectId='.$re["ID"].'">'.$re["title"].'</a>
    <p>融资资金：<span class="finance-money">'.$re["money"].'</span>
    <button class="btn btn-money"';
    if(!empty($_SESSION['name']))
   {
    echo 'data-toggle="modal" data-target="#message-modal"'; 
   }else{
    echo 'data-toggle="modal" data-target="#login-modal"';
   }
   echo '>约谈项目方</button>
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
    <a class="project-title" href="detail.php">创新层名单出来了！1329家企业入选，英雄互娱、神州优车等</a>
    <p>融资金额：<span class="finance-money">30000</span>
    <button class="btn btn-money">投递项目</button>
    </p>
    <p class="p-fix">2017-02-34</p>
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
