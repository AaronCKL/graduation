<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="./Style/skin.css" />
	<link rel="stylesheet" type="text/css" href="fontawesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/wangEditor-1.1.0-min.css">
</head>
    <body>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
         
            <tr>
                <td width="17" valign="top" background="./Images/mail_left_bg.gif">
                    <img src="./Images/left_top_right.gif" width="17" height="29" />
                </td>
                <td valign="top" background="./Images/content_bg.gif">
                    <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" background="././Images/content_bg.gif">
                        <tr><td height="31"><div class="title">项目详情</div></td></tr>
                    </table>
                </td>
                <td width="16" valign="top" background="./Images/mail_right_bg.gif"><img src="./Images/nav_right_bg.gif" width="16" height="29" /></td>
            </tr>

            <tr>
              
                <td valign="middle" background="./Images/mail_left_bg.gif">&nbsp;</td>
         
                <td valign="top" bgcolor="#F7F8F9">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    
                        <tr><td colspan="2" valign="top">&nbsp;</td><td>&nbsp;</td><td valign="top">&nbsp;</td></tr>
                
                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                    
                        <tr>
                            <td width="2%">&nbsp;</td>
                            <td width="96%">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">
                                            <form action="" method="">
                                                <table width="100%" class="cont">
												<?php    
													$aa = $_GET['projectId'];
													require("../config/mysql.php");
        $con = mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die('Could not connect: ' . mysql_error());;
  mysql_query("set names ".$mysql_db_language);
   mysql_select_db($mysql_dbname, $con);
													$chec = mysql_query("select * from project where ID = $aa"); 
													while($re = mysql_fetch_array($chec))
													{  
													echo '<tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="10%">项目名称</td>
                                                        <td width="30%"><input class="text" type="text" name="cat_name" value="'.$re['title'].'" style="width:100%"/></td>
                                                        <td width="56%"></td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
													<tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td>项目内容</td>
                                                        <td colspan="2">
														<div id="txtDiv" style="border:1px solid #cccccc; height:400px;width:100%;">'.$re['content'].'</div>
														</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                   <tr>
                                                        <td>&nbsp;</td>
                                                        <td>联系电话：</td>
                                                        <td>
                                                            '.$re['mobile'].'
                                                        </td>
                                                        <td></td>
                                                        <td>&nbsp;</td>
                                                    </tr>';
													} 
													mysql_close($con);
?>  
                                                    <!--<tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td width="10%">项目名称</td>
                                                        <td width="30%"><input class="text" type="text" name="cat_name" value="" style="width:100%"/></td>
                                                        <td width="56%"></td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
													<tr>
                                                        <td width="2%">&nbsp;</td>
                                                        <td>项目内容</td>
                                                        <td colspan="2">
														<div id='txtDiv' style='border:1px solid #cccccc; height:200px;width:100%;'></div>
														</td>
                                                        <td width="2%">&nbsp;</td>
                                                    </tr>
                                                   <tr>
                                                        <td>&nbsp;</td>
                                                        <td>联系电话：</td>
                                                        <td>
                                                            纷纷
                                                        </td>
                                                        <td></td>
                                                        <td>&nbsp;</td>
                                                    </tr>-->
                                                </table>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%">&nbsp;</td>
                        </tr>

                        <tr>
                            <td height="40" colspan="4">
                                <table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
                                    <tr><td></td></tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td background="./Images/mail_right_bg.gif">&nbsp;</td>
            </tr>

            <tr>
                <td valign="bottom" background="./Images/mail_left_bg.gif">
                    <img src="./Images/buttom_left.gif" width="17" height="17" />
                </td>
                <td background="./Images/buttom_bgs.gif">
                    <img src="./Images/buttom_bgs.gif" width="17" height="17">
                </td>
                <td valign="bottom" background="./Images/mail_right_bg.gif">
                    <img src="./Images/buttom_right.gif" width="16" height="17" />
                </td>           
            </tr>
        </table>
    </body>
	 <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>


    <script type="text/javascript" src='js/wangEditor-1.1.0-min.js'></script>
    <script type="text/javascript">
        $(function(){
            $('#spanTime').text((new Date()).toString());

            var $editor = $('#txtDiv').wangEditor();

        });
    </script>
</html>