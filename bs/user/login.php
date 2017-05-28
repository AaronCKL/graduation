<?php  
Session_start();
header("Content-Type: text/html;charset=utf-8");
$loginMobile = $_POST['loginMobile'];  
$loginPassword = $_POST['loginPassword'];  
   require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
  $check_query = mysql_query("select * from user where mobile='$loginMobile' and password='$loginPassword' limit 1");  
   if($result = mysql_fetch_array($check_query))
   { 
    $_SESSION['mobile']=$result['mobile'];
    $_SESSION['ID']=$result['ID'];
    $_SESSION['name']=$result['name'];
    header('Location:../index.php'); 
} else {  
    exit('登录失败！点击此处 <a href="User_denglu.php">返回</a> 重试');  
}
  mysql_close($con);
  
?>  