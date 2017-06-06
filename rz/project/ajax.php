<?php
	  Session_Start();
      $comment = $_GET['neirong'];
      $pjId = $_GET["ID"];
      require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
       date_default_timezone_set("Asia/Shanghai");
	   $t_time = date('Y-m-d H:i:sa');
	   $name = $_SESSION['name'];
		mysql_query("INSERT INTO commentpj (pjId, name, comment, time) VALUES ($pjId,'$name','$comment','$t_time')")or die(mysql_error());
		echo'<div class="project-comment-list">
       <div class="member-img">
          <img src="/rz/common/img/timg.jpg">
       </div>
       <div class="project-comment-right">
          <div class="project-comment-member">
              <strong>'.$name.'</strong>
              <span>'.$t_time.'</span>
          </div>
          <div class="project-comment-content">
          <p>'.$comment.'</p>
          </div>
        </div>
    </div>';
        mysql_close($con);
?>