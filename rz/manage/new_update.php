<?php 
require("../config/mysql.php");
        $db = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $db);
$title = $_POST['title'];
$id = $_GET['id'];
$content = $_POST['content'];
$time = date('Y-m-d');
$query = "update news set title= '".$title."' , content = '".$content."' ,time='".$time."' where ID='".$id."'";
mysql_query($query , $db) or die(mysql_error($db));
 mysql_close($db);
 header('Location:new_manage.php');
?>