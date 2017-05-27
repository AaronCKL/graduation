<?PHP
include("head.php");
?>
<!doctype html>
<html>
<body>
<div class="wrapper">
<div class="project">
<?php    
    $aa = $_GET['projectId'];
      $con = mysql_connect('localhost','root','');
   if (!$con)
     {
  die('Could not connect: ' . mysql_error());
     }
   mysql_query("set names 'utf8'");
   mysql_select_db("financing", $con);
    $chec = mysql_query("select * from project where ID = $aa"); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<div class="project-news-list">
      <div class="project-news-title text-center">
      '.$re['title'].'
      </div>
      <div class="project-news">'.$re['content'].'</div></div>';
  } 
  mysql_close($con);
?>  
</div>
</div>
</body>
</html>