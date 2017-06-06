<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>管理员中心</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">资讯管理</a><span class="crumb-step">&gt;</span><span>管理资讯</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a id="batchDel" href="new_add.php"><i class="icon-font"></i>添加资讯</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>ID</th>
                            <th>资讯标题</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                        <?php    
      require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
   mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
    $chec = mysql_query("select * from news"); 
   while($re = mysql_fetch_array($chec))
   {  
     echo '<tr>
                            <td>'.$re["ID"].'</td> <!--标签ID-->
                            <td>'.$re["title"].'</td> <!--销售者用户名-->
                            <td>'.$re["time"].'</td> <!--订单时间-->
                            <td>
                            <button type="button" class="btn btn-primary" onclick=deleteNew('.$re["ID"].')>删除</button>
                            <button class="btn btn-primary"><a style="color: #fff" href=new_detail.php?id='.$re["ID"].'>详情</a></button>
                            </td> <!--课程价格-->
                        </tr>';
  } 
  mysql_close($con);
?> 
                    </table>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>