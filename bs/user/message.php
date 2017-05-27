<?PHP
include("head.php");
?>
<!doctype html>
<html>
<head >
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript">
  function checkUser(){
    var firstname = document.getElementById("firstname").value;
    var contentValue = document.getElementById("content").value;
    if(!firstname){
      document.getElementById("userWarning").innerHTML = '请填写用户名';
      document.getElementById("warning").style.display = 'block';
      window.setTimeout(function(){
                      document.getElementById("warning").style.display = 'none';
                    },5000);
      return false;
    }else if(!contentValue){
      document.getElementById("userWarning").innerHTML = '请填写内容';
      document.getElementById("warning").style.display = 'block';
      window.setTimeout(function(){
                      document.getElementById("warning").style.display = 'none';
                    },5000);
      return false;
    }else{
      submitMessage();
    }
  }
</script>
</head>
<body>
<div id="warning" class="alert alert-warning text-center" style="display: none; font-size: 18px;position: fixed;top:0px;right: 0px;width: 100%;">
                    <a href="#" class="close" data-dismiss="alert">
                      &times;
                     </a>
                        <strong id="userWarning">用户名错误,发送失败</strong>
</div>
<div id="success" class="alert alert-success text-center" style="display: none;font-size: 18px;position: fixed;top:0px;right: 0px;width: 100%;">
                    <a href="#" class="close" data-dismiss="alert">
                      &times;
                     </a>
                        <strong>发送成功</strong>
</div>
<div class="wrapper">
<div class="user">
   <div class="message form-horizontal">
      <!-- <form id="message-form" class="form-horizontal" role="form"> -->
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">用户名</label>
    <div class="col-sm-5">
      <input type="text" name="firstname"class="form-control" id="firstname" 
           placeholder="请输入用户名">
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-10">
    <textarea class="form-control" name="content" id="content" rows="3" placeholder="请输入发送内容"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger" onclick="checkUser()">发送</button>
    </div>
  </div>
<!-- </form> -->
   </div>
</div>
</body>
</html>