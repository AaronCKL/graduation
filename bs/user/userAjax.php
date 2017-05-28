<?php
$userId=$_GET["uid"];
$oldValue=$_GET["oid"];
   require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
  mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
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