<?php
    $id=$_GET["id"];
    $type=$_GET["type"];
    require("../config/mysql.php");
    $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
    mysql_query("set names ".$mysql_db_language);
    mysql_select_db($mysql_dbname, $con);
	if($type == 1){
	     mysql_query("DELETE FROM invest WHERE ID= '$id' ");
	     echo '删除成功！';
	}else{
		 mysql_query("update invest set visible = 1 where ID = $id");
		 echo '审核通过成功！';
	 }
     mysql_close($con);

?>