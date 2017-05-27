<?php
$userId=$_GET["uid"];
$oldValue=$_GET["oid"];
   $con = mysql_connect('localhost','root','');
      if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
     mysql_query("set names 'utf8'");
     mysql_select_db("financing", $con);
    $result = mysql_query("select * from follow where follower = '$userId' and name = '$oldValue'");
    if ($row = mysql_fetch_array($result)){
      echo "未关注";
	  mysql_query("DELETE FROM follow WHERE follower= '$userId' and name = '$oldValue'");
    }else{
    echo "已关注";
	mysql_query("INSERT INTO follow (follower, name) 
       VALUES ('$userId', '$oldValue')");
     }
     mysql_close($con);

?>