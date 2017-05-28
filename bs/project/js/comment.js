function comment(id)
{
//获取表单对象和用户信息值
var neirong = document.getElementById("comment").value;
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("projectComment").innerHTML+=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax.php?neirong="+ neirong +"&ID="+ id,true);
xmlhttp.send();
}