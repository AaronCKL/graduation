function qieHuanGuanZhu(gg , hh , butt)
        {
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
                    document.getElementById(butt).innerHTML=xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET","userAjax.php?uid=" + gg + "&oid=" + hh,true);
            xmlhttp.send();
        }

function submitMessage()
        {
            var name = document.getElementById("firstname").value;
            var content = document.getElementById("content").value;
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
                    document.getElementById("firstname").value = '';
                    document.getElementById("content").value='';
                    if(xmlhttp.responseText == 0){
                    document.getElementById("userWarning").innerHTML = '用户名错误,发送失败';
                    document.getElementById("warning").style.display = 'block';
                    window.setTimeout(function(){
                      document.getElementById("warning").style.display = 'none';
                    },5000);
                    }else{
                    document.getElementById("success").style.display = 'block';
                    window.setTimeout(function(){
                      document.getElementById("success").style.display = 'none';
                    },5000);
                    }
                }
            };
            xmlhttp.open("post","messageCheck.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
            xmlhttp.send("name=" + name + "&content=" + content);
        }

 function changeWhenMouseOver(ele){
	        if(ele.innerHTML == "已关注")
			{
            ele.style.backgroundColor="blue";
            ele.innerHTML="取消关注";
			}
			else
			{
			ele.style.backgroundColor="#5bc0de";
            ele.style.color="white";
			}
			
        }
function changeWhenMouseOut(ele){
	    if(ele.innerHTML == "取消关注")
			{
			ele.style.backgroundColor="#5bc0de";
            ele.style.color="white";
            ele.innerHTML="已关注";
			}
			else
			{
			ele.style.backgroundColor="#5bc0de";
            ele.style.color="white";
			}
				
        }