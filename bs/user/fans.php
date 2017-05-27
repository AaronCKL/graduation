<?PHP
include("head.php");
?>
<!doctype html>
<html>
<head>
  <script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
<div class="user">
   <div class="user-list">
      <div class="user-focus-title text-center">
      我的粉丝
      </div>
      <ul class="list-unstyled">
      <?php    
  $con = mysql_connect('localhost','root','');
   if (!$con)
     {
  die('Could not connect: ' . mysql_error());
     }
   mysql_query("set names 'utf8'");
    mysql_select_db("financing", $con);
    $name=$_SESSION['name'];
  $chec = mysql_query("select * from follow where name= '$name' ");
  $bb=100;
   while($re = mysql_fetch_array($chec))
   {  
    $name1=$re['follower'];
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
      <!-- <li class="user-focus-list text-center">
          <span>aaron</span>
          <button class="btn btn-info" style="margin-left: 40px">已关注</button>
      </li> -->
      </ul>
   </div>
</div>
</div>
</body>
</html>