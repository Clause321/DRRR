function disp_alert()
{
alert("我是警告框！！")
}

var time;
function getmessage()
{
var xmlhttp;
window.XMLHttpRequest;
if (window.XMLHttpRequest)
{
	xmlhttp=new XMLHttpRequest();
}
else
{
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onreadystatechange=function()
{
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("chatbox").innerHTML=xmlhttp.responseText;
    }
}

xmlhttp.open("GET","~send.php?commond=0",true);
xmlhttp.send();
time=setTimeout("getmessage()",5000);
}


function sendmessage()
{
var xmlhttp;
var text;
text=document.sendform.text.value;
document.sendform.text.value="";
window.XMLHttpRequest;
if (window.XMLHttpRequest)
{
	xmlhttp=new XMLHttpRequest();
}
else
{
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onreadystatechange=function()
{
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("chatbox").innerHTML=xmlhttp.responseText;
    }
}

xmlhttp.open("GET","~send.php?commond=1&text="+text,true);
xmlhttp.send();
}
