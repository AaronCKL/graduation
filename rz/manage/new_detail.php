<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/wangEditor-1.1.0-min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-4.2.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap">
    <div class="topbar-inner clearfix">
        <!--<div class="topbar-logo-wrap clearfix">-->
            <h1 class="topbar-logo" style="width:100%;"><a href="index.html" class="navbar-brand">管理员中心</a></h1>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#">资讯管理</a>
                    <ul class="sub-menu">
                        <li><a href="new_add.php">添加资讯</a><li>
                        <li><a href="new_manage.php">管理资讯</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">资金管理</a>
                    <ul class="sub-menu">
                        <li><a href="invest_check.php">待审核资金</a></li>
                        <li><a href="invest_checked.php">已审核资金</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">资讯管理</a><span class="crumb-step">&gt;</span><span>新增资讯</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="new_update.php?id=<?php    
      $aa = $_GET['id'];echo $aa; ?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <?php    
      require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
      $chec = mysql_query("select * from news where ID = $aa"); 
      while($re = mysql_fetch_array($chec))
      {  
     echo '<tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value='.$re["title"].' type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>图片：</th>
                                <td><img style="width: 200px;height: 100px;" src="/rz/img/news/'.$re['imgName'].'"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>资讯：</th>
                                <td>
                                <div id="txtDiv" style="border:1px solid #cccccc; height:400px;width:700px;">
                                    '.$re['content'].'
                                </div>
                                </td>
                            </tr>';
     } 
     mysql_close($con);
?> 
                            <tr>
                                <th></th>
                                <td>
                                    <input type="hidden" name="content" id="content">
                                    <input class="btn btn-primary btn6 mr10" value="更新" type="submit" onclick="saveContent()">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src='js/wangEditor-1.1.0-min.js'></script>
<script type="text/javascript">
            var $editor = $('#txtDiv').wangEditor();
        function saveContent(){
               document.getElementById("content").value = $editor.html();
            }
    </script>
</body>
</html>