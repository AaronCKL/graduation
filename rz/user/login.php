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
    header("refresh:3;url=../index.php");
    print('登陆成功！...<br>三秒后自动跳转到首页。');
} else {  
    header("refresh:3;url=../index.php");
    print('登陆失败！...<br>三秒后自动跳转到首页。');  
}
  mysql_close($con);
  
?>  