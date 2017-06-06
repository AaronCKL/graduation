<?PHP
include("head.php");
?>
<!doctype html>
<html>
<head>
  <script type="text/javascript" src="js/comment.js"></script>
</head>
<body>
<div class="wrapper">
<div class="project">
<?php    
      $aa = $_GET['projectId'];
      require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
      $chec = mysql_query("select * from project where ID = $aa"); 
      while($re = mysql_fetch_array($chec))
      {  
     echo '<div class="project-news-list">
      <div class="project-news-title">
      '.$re["title"].'
      </div>
      <div class="project-time">'.$re["name"].'&nbsp;'.$re["time"].'</div>
</div>
<div class="project-common-list">
    <div class="m-title">
        <span class="title-span">项目概述</span>
    </div>
    <div class="m-content">
       '.$re["content"].'
    </div>
</div>
<div class="project-common-list">
    <div class="m-title">
        <span class="title-span">项目优势</span>
    </div>
    <div class="m-content">
       '.$re["contentAdv"].'
    </div>
</div>
<div class="project-common-list">
    <div class="m-title">
        <span class="title-span">其它备注</span>
    </div>
    <div class="m-content">
       '.$re["remarks"].'
    </div>
</div>';
     } 
     mysql_close($con);
?>  

<div class="project-comment-wrapper">
   <p>用户留言</p>
   <div class="project-comment">
   <textarea  placeholder="提示：严禁发布含有联系方式和广告性质的内容，违者一律删除！" class="form-control" rows="4" id="comment"></textarea>
   <button class="btn btn-danger" type="button"
    <?php 
   if(!empty($_SESSION['name']))
   {
    echo 'onclick="comment('.$aa.')"'; 
   }else{
    echo 'data-toggle="modal" data-target="#login-modal"';
   }
    ?>>评论</button>
   </div>
   <div class="project-comment-wp" id="projectComment">
   <?php    
      require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
      $chec = mysql_query("select * from commentpj where pjId = $aa"); 
      while($re = mysql_fetch_array($chec))
      {  
      echo '<div class="project-comment-list">
       <div class="member-img">
          <img src="/rz/common/img/timg.jpg">
       </div>
       <div class="project-comment-right">
          <div class="project-comment-member">
              <strong>'.$re['name'].'</strong>
              <span>'.$re['time'].'</span>
          </div>
          <div class="project-comment-content">
          <p>'.$re['comment'].'</p>
          </div>
        </div>
    </div>';
     } 
     mysql_close($con);
?>  
    </div>
</div>
</div>

</div>
<?PHP
include("../common/footer.html");
?>
</body>
</html>