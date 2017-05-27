<?php
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  $name=$_POST['name'];
  $con = mysql_connect('localhost','root','');
   if (!$con)
     {
  die('Could not connect: ' . mysql_error());
     }
   mysql_query("set names 'utf8'");
   mysql_select_db("financing", $con);
	 mysql_query("INSERT INTO user (name, mobile, password) 
    VALUES ('$name', '$mobile', '$password')");

    mysql_close($con);
	echo ' 注册成功！请先 <a href="User_denglu.php">登录</a>'; 

?>
