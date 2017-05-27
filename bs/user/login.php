<?php  
Session_start();
header("Content-Type: text/html;charset=utf-8");
$loginMobile = $_POST['loginMobile'];  
$loginPassword = $_POST['loginPassword'];  
   $con = mysql_connect('localhost','root','');
   if (!$con)
     {
  die('Could not connect: ' . mysql_error());
     }
   mysql_query("set names 'utf8'");
   mysql_select_db("financing", $con);

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