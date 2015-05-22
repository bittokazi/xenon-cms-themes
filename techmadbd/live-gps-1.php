<!DOCTYPE html>
<html>
<head>
<title>Live GPS v1</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-34.397, 150.644)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>


<script>
var blat=0,blot=0,markeri=0;
var marker=[];
function loadXMLDoc()
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
    var str=xmlhttp.responseText;
    var res = str.split("_");
    var r=res[0];
    r=r.split(":");
    //document.getElementById("red").innerHTML=r[1];
        if(r[1]>=400) {
          document.getElementById("red").style.backgroundColor="#FF6600";
        }
         else  {
          document.getElementById("red").style.backgroundColor="#FFEDE8";
        }
        var b=res[1];
    b=b.split(":");
    //document.getElementById("red").innerHTML=b[1];
        if(b[1]>=400) {
          document.getElementById("blue").style.backgroundColor="#0000FF";
        }
         else  {
          document.getElementById("blue").style.backgroundColor="#D8E8FF";
        }


        var g=res[2];
    g=g.split(":");
    //document.getElementById("red").innerHTML=g[1];
        if(g[1]>=400) {
          document.getElementById("green").style.backgroundColor="#009900";
        }
         else  {
          document.getElementById("green").style.backgroundColor="#99FF99";
        }

        
      var gmap1=res[3];
        gmap1=gmap1.split(":");
       gmap1=gmap1[1].split(",");
       gmap1=gmap1[0].split(".");
       var ng1=gmap1[0].length;       
       
       var min=gmap1[0][ng1-2]+gmap1[0][ng1-1]+"."+gmap1[1];
       var sec=min/60;
       if(ng1==4) {
       min=gmap1[0][0]+gmap1[0][1];
       min=parseFloat(min)+parseFloat(sec);
      // document.getElementById("right").innerHTML=min;
       }
       else if(ng1==5) {
       min=gmap1[0][0]+gmap1[0][1]+gmap1[0][2];
       min=parseFloat(min)+parseFloat(sec);
       //document.getElementById("right").innerHTML=min;
       }
       else if(ng1==6) {
       min=gmap1[0][0]+gmap1[0][1]+gmap1[0][2]+gmap1[0][3];
       min=parseFloat(min)+parseFloat(sec);
       //document.getElementById("right").innerHTML=min;
       }
blat=min;



        gmap1=res[3];
        gmap1=gmap1.split(":");
       gmap1=gmap1[1].split(",");
       gmap1=gmap1[1].split(".");
       ng1=gmap1[0].length;       
       
       min=gmap1[0][ng1-2]+gmap1[0][ng1-1]+"."+gmap1[1];
       sec=min/60;
       if(ng1==4) {
       min=gmap1[0][0]+gmap1[0][1];
       min=parseFloat(min)+parseFloat(sec);
       //document.getElementById("right").innerHTML+="<br>"+min;
       }
       else if(ng1==5) {
       min=gmap1[0][0]+gmap1[0][1]+gmap1[0][2];
       min=parseFloat(min)+parseFloat(sec);
      // document.getElementById("right").innerHTML+="<br>"+min;
       }
       else if(ng1==6) {
       min=gmap1[0][0]+gmap1[0][1]+gmap1[0][2]+gmap1[0][3];
       min=parseFloat(min)+parseFloat(sec);
      // document.getElementById("right").innerHTML+="<br>"+min;
       }

blot=min;
       var panPoint = new google.maps.LatLng(blot,blat);
        map.panTo(panPoint);

if(markeri>0) {
marker[markeri-1].setMap(null);
}

var markers = new google.maps.Marker({
      position: panPoint,
      map: map,
      title: 'Hello World!'
  });

marker.push(markers);
marker[markeri].setMap(map);
markeri++;
    }
  }
xmlhttp.open("GET","<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/livegpsv1data",true);
xmlhttp.send();
}
function changeClass() {
		myVar = setInterval(function(){loadXMLDoc();},8000);
}
changeClass();
</script>







</head>
<body>
<div id="main" style="float:left;">

<div id="letf" style="width:300px; height:200px; background: yellow; float:left">

<div id="red" style="height: 50px; width:50px; background: #FFEDE8; border-radius: 25px; float:left;">
</div>
<div id="blue" style="height: 50px; width:50px; background: #D8E8FF; border-radius: 25px; float:left;">
</div>
<div id="green" style="height: 50px; width:50px; background: #99FF99; border-radius: 25px; float:left;">
</div>

</div>

<div id="right" style="width:500px; height:500px; background: red; float:left;">
<div id="map-canvas"></div>
</div>


</div>
</body>
</html>