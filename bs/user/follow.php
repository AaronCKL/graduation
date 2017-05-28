<?PHP
include("head.php");
?>
<!doctype html>
<html>
<head>
  <script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
<div class="wrapper">
<div class="user">
   <div class="user-list">
      <div class="user-focus-title text-center">
      我的关注
      </div>
      <ul class="list-unstyled">
      <?php    
      $name=$_SESSION['name'];
      require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
    $chec = mysql_query("select * from follow where follower= '$name' "); 
   $cc=1;  
   while($re = mysql_fetch_array($chec))
   {  
  $name1=$re['name'];
  echo '<li class="user-focus-list text-center">
          <span>'.$name1.'</span>
          <button class="btn btn-info" id="'.$cc.'" style="margin-left: 40px" onmouseOver=changeWhenMouseOver(this) onmouseout=changeWhenMouseOut(this) onclick=qieHuanGuanZhu("'.$name.'","'.$name1.'","'.$cc.'")>已关注</button>
      </li>';
      $cc++;
  } 
  mysql_close($con);
?>  
      <!-- <li class="user-focus-list text-center">
          <span>aaron</span>
          <button class="btn btn-info" style="margin-left: 40px">已关注</button>
      </li> -->
      </ul>
   </div>
   <div class="user-all-list">
      <div class="user-focus-title text-center">
      所有人
      </div>
      <ul class="list-unstyled">
       <?php    
  require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
    $name=$_SESSION['name'];
  $chec = mysql_query("select * from user where name!= '$name' "); 
  $bb=100;
   while($re = mysql_fetch_array($chec))
   {  
    $name1=$re['name'];
    $showContent = '未关注';
     $chece = mysql_query("select * from follow where follower= '$name' and name= '$name1'");
     while($ree = mysql_fetch_array($chece))
   {  
         $showContent = '已关注';
   }
  echo '<li class="user-focus-list text-center">
          <span>'.$name1.'</span>
          <button class="btn btn-info" id="'.$bb.'" style="margin-left: 40px" onmouseOver=changeWhenMouseOver(this) onmouseout=changeWhenMouseOut(this) onclick=qieHuanGuanZhu("'.$name.'","'.$name1.'","'.$bb.'")>'.$showContent.'</button>
      </li>';
      $bb++;
  } 
  mysql_close($con);
?>  
      </ul>
   </div>
</div>
</div>
</body>
</html>