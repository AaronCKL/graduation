<?PHP
include("head.php");
?>
<!doctype html>
<html>
<body>
<div class="wrapper">
<div class="project">
<?php    
      $aa = $_GET['projectId'];
      $con = mysql_connect('localhost','root','');
      if (!$con)
       {
            die('Could not connect: ' . mysql_error());
       }
       mysql_query("set names 'utf8'");
       mysql_select_db("financing", $con);
      $chec = mysql_query("select * from project where ID = $aa"); 
      while($re = mysql_fetch_array($chec))
      {  
     echo '<div class="project-news-list">
      <div class="project-news-title text-center">
      '.$re['title'].'
      </div>
      <div class="project-news">'.$re['content'].'</div></div>';
     } 
     mysql_close($con);
?>  
<div class="project-comment-wrapper">
   <div class="project-comment">
   <textarea class="form-control" rows="4"></textarea>
   <button class="btn btn-danger">评论</button>
   </div>
   <div class="project-comment-list">
       <div class="member-img">
          <img src="/bs/common/img/user.png">
       </div>
       <div class="project-comment-right">
          <div class="project-comment-member">
              <strong>褚昆伦</strong>
              <span>2017-10-22</span>
          </div>
          <div class="project-comment-content">
          <p>我真TM帅</p>
          </div>
        </div>
    </div>
    <div class="project-comment-list">
       <div class="member-img">
          <img src="/bs/common/img/user.png">
       </div>
       <div class="project-comment-right">
          <div class="project-comment-member">
              <strong>褚昆伦</strong>
              <span>2017-10-22</span>
          </div>
          <div class="project-comment-content">
          <p>我真TM帅</p>
          </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>