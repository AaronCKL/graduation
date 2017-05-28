// 创建Ajax对象
function Ajax() {
	var Ajax = false;
	if(window.XMLHttpRequest) {
		Ajax = new XMLHttpRequest();
	} else {
		Ajax = new window.ActiveXObject('Mircorsoft.XMLHTTP')
	}
	return Ajax;
}

function checkProject(id , type)
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
                    alert(xmlhttp.responseText);
                }
            };
            xmlhttp.open("GET","order_ajax.php?id=" + id + "&type=" + type,true);
            xmlhttp.send();
        }