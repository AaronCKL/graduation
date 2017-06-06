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
    header("refresh:3;url=../index.php");
    print('注册成功！...<br>三秒后自动跳转到首页。');
?>
