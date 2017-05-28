<?php
	  Session_Start();
      $comment = $_GET['neirong'];
      $projectId = $_GET["ID"];
      $con = mysql_connect('localhost','root','');
      if (!$con)
       {
            die('Could not connect: ' . mysql_error());
       }
       mysql_query("set names 'utf8'");
       mysql_select_db("financing", $con);
	   $t_time = date('Y-m-d H:i:sa');
	   $name = $_SESSION['name'];
		mysql_query("INSERT INTO commentpj (pjId, name, comment, time) VALUES ($projectId,'$name','$comment','$t_time')")or die(mysql_error());
		echo'<div class="project-comment-list">
       <div class="member-img">
          <img src="/bs/common/img/user.png">
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