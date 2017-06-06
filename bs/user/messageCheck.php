<?php    
  Session_start();
  $firstname=$_POST['name'];
  $content=$_POST['content'];
  $id=$_SESSION['ID'];
  $name=$_SESSION['name'];
  require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
   date_default_timezone_set("Asia/Shanghai");
   $mytime=date("Y.m.d")."&nbsp;"."&nbsp;".date("h:i:sa");
	$check = mysql_query("select * from user where name = '$firstname'  limit 1");  
   if($result = mysql_fetch_array($check))
   {   
   mysql_query("INSERT INTO message (message, fromName, toName ,date) 
   VALUES ('$content', '$name', '$firstname','$mytime')");
     echo "1";
    } 
	else
	{
		 echo "0";
	}
     
  mysql_close($con);
 
?>  