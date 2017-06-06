<?PHP
include("head.php");
?>
<!doctype html>
<html>
<head>
  <script type="text/javascript" src="js/showImg.js"></script>
  <script type="text/javascript" src="js/test.js"></script>
  <script type="text/javascript" src="js/test1.js"></script>
  <link rel="stylesheet" type="text/css" href="fontawesome-4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/wangEditor-1.1.0-min.css">
  <script type="text/javascript">
  function checkProject(){
    var title = document.getElementById("title").value;
    var content = $editor.html();
    var inputfile = document.getElementById("inputfile").value;
    var mobile = document.getElementById("mobile").value;
    console.log(inputfile);
    if(!title || !content || !inputfile || !mobile){
      document.getElementById("warning").style.display = 'block';
      window.setTimeout(function(){
                      document.getElementById("warning").style.display = 'none';
                    },5000);
      return false;
    }else{
      saveContent();
    }
  }
</script>
</head>
<body>
<div id="warning" class="alert alert-warning text-center" style="z-index:10;display:none;font-size: 18px;position: fixed;top:0px;right: 0px;width: 100%;">
                    <a href="#" class="close" data-dismiss="alert">
                      &times;
                     </a>
                        <strong id="userWarning">请完整填写项目</strong>
</div>
<div class="user">
   <div class="message">
      <form class="form-horizontal" role="form" method="post"  action="investPush.php" enctype="multipart/form-data" onsubmit="return checkProject();">
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">融资名称</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="title" name="title"
           placeholder="请输入融资名称">
    </div>
  </div>
  <div class="form-group">
    <label for="money" class="col-sm-2 control-label">投资资金</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="money" name="money"
           placeholder="请输入融资资金">
    </div>
  </div>
  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">要求概述</label>
    <div class="col-sm-10">
    <div id='txtDiv' style='border:1px solid #cccccc; height:200px;'>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label for="content_1" class="col-sm-2 control-label">投资案例</label>
    <div class="col-sm-10">
    <div id='txtDiv_1' style='border:1px solid #cccccc; height:200px;'>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label for="content_2" class="col-sm-2 control-label">其它备注</label>
    <div class="col-sm-10">
    <div id='txtDiv_2' style='border:1px solid #cccccc; height:200px;'>
    </div>
    </div>
  </div>
  <img id="img1" src="" width="155px" height="105px" style="margin-bottom: 15px;margin-left: 110px;display: none;" />
  <div class="form-group">
    <label for="inputfile" class="col-sm-2 control-label">简介图片</label>
    <div class="col-sm-10">
      <input type="file" id="inputfile" name="inputfile" onchange="showpic();">
    </div>
  </div>
  <div class="form-group">
    <label for="mobile" class="col-sm-2 control-label">联系电话</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="mobile" name="mobile">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input id="content" name="content" type="hidden"/>
    <input id="content1" name="content1" type="hidden"/>
    <input id="content2" name="content2" type="hidden"/>
      <button type="submit" class="btn btn-danger">提交</button>
    </div>
  </div>
</form>
   </div>
</div>
</body>
<script type="text/javascript" src='js/wangEditor-1.1.0-min.js'></script>
    <script type="text/javascript">
            var $editor = $('#txtDiv').wangEditor();
            var $editor_1 = $('#txtDiv_1').test();
            var $editor_2 = $('#txtDiv_2').test1();
        function saveContent(){
               document.getElementById("content").value = $editor.html();
               document.getElementById("content1").value = $editor_1.html();
               document.getElementById("content2").value = $editor_2.html();
            }
    </script>
</html>