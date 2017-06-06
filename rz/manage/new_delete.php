<?php
    $id=$_GET["id"];
    require("../config/mysql.php");
    $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
    mysql_query("set names ".$mysql_db_language);
    mysql_select_db($mysql_dbname, $con);
	mysql_query("DELETE FROM news WHERE ID= '$id' ");
	echo '删除成功！';
    mysql_close($con);

?>