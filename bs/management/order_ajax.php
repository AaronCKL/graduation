<?php
    $id=$_GET["id"];
    $type=$_GET["type"];
   $con = mysql_connect('localhost','root','');
      if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
     mysql_query("set names 'utf8'");
     mysql_select_db("financing", $con);
	 if($type == 1){
	  mysql_query("DELETE FROM project WHERE ID= '$id' ");
	  echo '删除成功！';
	 }else{
		 mysql_query("update project set visibile = 1 where ID = $id");
		 echo '审核通过成功！';
	 }
     mysql_close($con);

?>