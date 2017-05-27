<?PHP
include("head.php");
?>
<!doctype html>
<html>
<head >
</head>
<body>
<div class="wrapper">
<div class="letter-wrapper">
   <ul class="letter-nav">
      <li class="active"><a href="#identifier" data-toggle="tab">收件箱</a></li>
      <li ><a href="#identi" data-toggle="tab">发件箱</a></li>
      <li class="letter-nav-last"><a href="message.php">发私信</a></li>
   </ul>
   <div class="letter-list fade in active" id="identifier">
       <?php
      $con = mysql_connect('localhost','root','');
      if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
      mysql_query("set names 'utf8'");
      mysql_select_db("financing", $con);
     $name=$_SESSION['name'];
     $result = mysql_query("select * from message where toName = '$name' ")or die(mysql_error());;
         while($row = mysql_fetch_array($result))
       {
     echo '<div class="letter-list-childen">
           <div class="letter-childen-title text-center">'
            .$row['fromName']."&nbsp;&nbsp;&nbsp;<span class='text-danger'>".$row['date']
         .'</span></div>
          <div class="letter-childen-content">'.$row['message']
         .'</div>
          </div>';
      }    
     mysql_close($con);
    ?>
   </div>
   <div class="letter-list fade" id="identi">
   <?php
      $con = mysql_connect('localhost','root','');
      if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
      mysql_query("set names 'utf8'");
      mysql_select_db("financing", $con);
     $name=$_SESSION['name'];
     $result = mysql_query("select * from message where fromName = '$name' ")or die(mysql_error());;
         while($row = mysql_fetch_array($result))
       {
     echo '<div class="letter-list-childen">
           <div class="letter-childen-title text-center">'
            .$row['toName']."&nbsp;&nbsp;&nbsp;<span class='text-danger'>".$row['date']
         .'</span></div>
          <div class="letter-childen-content">'.$row['message']
         .'</div>
          </div>';
      }    
     mysql_close($con);
    ?>
   </div>
</div>
</div>
</body>
</html>