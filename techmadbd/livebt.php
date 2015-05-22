<!DOCTYPE html>
<html>
<head>
<title>Live Home System</title>
<script>
var sw1="A",sw2="B",sw3="C";
var urladdr="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>";
function changeSwitch(sw)
{
if(sw==1){
if(sw1=="A") { sw1="a"; document.getElementById("bt1").innerHTML = "Switch 1 OFF"; } else { sw1="A";
document.getElementById("bt1").innerHTML = "Switch 1 ON"; }
var addr=urladdr+"/liveswitchwrite?lan=sw1:"+sw1+"_-_sw2:"+sw2+"_-_sw3:"+sw3+"_-_";
}
else if(sw==2){
if(sw2=="B") { sw2="b"; document.getElementById("bt2").innerHTML = "Switch 2 OFF"; } else { sw2="B";
document.getElementById("bt2").innerHTML = "Switch 2 ON"; }
var addr=urladdr+"/liveswitchwrite?lan=sw1:"+sw1+"_-_sw2:"+sw2+"_-_sw3:"+sw3+"_-_";
}
else if(sw==3){
if(sw3=="C") { sw3="c"; document.getElementById("bt3").innerHTML = "Switch 3 OFF"; } else { sw3="C";
document.getElementById("bt3").innerHTML = "Switch 3 ON"; }
var addr=urladdr+"/liveswitchwrite?lan=sw1:"+sw1+"_-_sw2:"+sw2+"_-_sw3:"+sw3+"_-_";
}
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
    var str=xmlhttp.responseText;
	
	    }
  }
xmlhttp.open("GET",addr,true);
xmlhttp.send();
}
</script>
</head>
<body>
<button id="bt1" onClick="changeSwitch(1)">Switch 1 : ON</button>
<br><br>
<button id="bt2" onClick="changeSwitch(2)">Switch 2 : ON</button>
<br><br>
<button id="bt3" onClick="changeSwitch(3)">Switch 3 : ON</button>
<br><br>
</body>
</html>