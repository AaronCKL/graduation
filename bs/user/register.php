<?php
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  $name=$_POST['name'];
  require("../config/mysql.php");
  $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
	 mysql_query("INSERT INTO user (name, mobile, password) 
    VALUES ('$name', '$mobile', '$password')");

    mysql_close($con);
	echo ' 注册成功！请先 <a href="User_denglu.php">登录</a>'; 

?>
