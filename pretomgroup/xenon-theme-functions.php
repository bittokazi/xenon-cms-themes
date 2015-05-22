<?php
function pretomgroup_theme_option() {  
    add_menu('pretomgroup-theme-option.php', 'pretomgroup-theme-option', 'themepage','1');  
}
xenon_core('xenon_add_menu', 'pretomgroup_theme_option');


register_xenon_menu('upper-menu');
function admin_bar_bdwave() {
$content='';
if(isset($_SESSION['bitto'])) {
if(basename($_SERVER['PHP_SELF'])=="add-post.php" || basename($_SERVER['PHP_SELF'])=="post.php" || basename($_SERVER['PHP_SELF'])=="add-page.php" || basename($_SERVER['PHP_SELF'])=="page.php") {
$content=$content.'<div style="clear:both;"></div>
<div style="height: 35px;
    width: 100%;"></div>
	<div style="clear:both;"></div>
<div style="   position: fixed;
    z-index: 1000000; 
    bottom: 0; 
	clear: both;
    left: 0;
	float:left;
	margin:0;
	height: 35px;
    width: 100%; background: white url('.home_url().'/xenon-core/images/hi.png) repeat-x left top;"><div style="float:left; margin-left:20px;"><a href="'.home_url().'/xenon-admin"><img src="'.home_url().'/xenon-core/images/xenon.png"></a></div>
	<div style="color:white; font-size:20px; padding-top:8px; float:left;margin-left:20px;">
	
	<p style="margin-top: -05px; float:left;">Image 1:</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/> 
	&nbsp;&nbsp;
	<input type="button" id="ibut" onclick="imageUpload()" value="Upload" style="height: 25px; width:100px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; cursor:pointer; margin-top: -5px; float:left;"/>

        <p style="margin-top: -5px; float:left; margin-left:5px;">Slider:</p> <input type="checkbox" onchange="bwt()"  style="margin-top: -0px; float:left;"/> &nbsp;
	<p style="margin-top: -5px; float:left;">Headline:</p> <input type="checkbox" checked="true" onchange="bwth()"  style="margin-top: -0px; float:left;"/> &nbsp;

<div id="oik" style="float:left;"></div>
	
	</div>
	<div style="color:white; font-size:20px; padding-top:8px; float:right; margin-right:20px;">
	
	<noscript>Slider: <input type="checkbox" onchange="bwt()" /> &nbsp;
	//Headline: <input type="checkbox" checked="true" onchange="bwth()" /> &nbsp;</noscript>
	<button onclick="urlcopy()">PASTE URL</button>
	
	<div style="background:black; height:300px; width:300px; margin-top:-330px; margin-right:-40px; display:none;"><div id="ige">';
	
	/*$result1crr = @mysql_query("SELECT * FROM frndzk_media ORDER by id DESC LIMIT 0,9");
if ( @mysql_num_rows($result1crr) > 0 ) {
while($general1cee = @mysql_fetch_array($result1crr)) {
$content=$content.'<img src="../xenon-upload/'.$general1cee['url'].'" width="80px" height="80px" style="margin-top:3px; margin-left:3px; float:left; cursor:pointer;" onclick="insImg(\'../xenon-upload/'.$general1cee['url'].'\')"/>';
}
}*/
	
	$content=$content.'
	</div>
	
	<div style="clear:both;"></div>
	<div style="float:left; margin-top:3px; margin-left:5px; cursor:pointer;" onclick="getImagerev()">PREV</div>
	<div style="float:left; margin-top:3px; margin-left:5px; cursor:pointer;" onclick="getImage()">NEXT</div>
	
	
	</div>
	
	</div></div><div style="clear:both;"></div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
var td="",tdh="",tdb="",url="";
function urlcopy() {
$("iframe").contents().find("#href").val(url);
}
	function bwt() {
	if (td=="slider,") { td="" }
	else { td="slider,"; }
	//document.getElementById("tag").value=document.getElementById("tag").value.replace("slider,","")+td;
	}
	
	function bwth() {
	if (tdh=="headline,") { tdh="" }
	else { tdh="headline,"; }
	//document.getElementById("tag").value=document.getElementById("tag").value.replace("headline,","")+tdh;
	}
	function bwtb() {
	if (tdb=="bigimagepost,") { tdb="" }
	else { tdb="bigimagepost,"; }
	//document.getElementById("tag").value=document.getElementById("tag").value.replace("bigimagepost,","")+tdb;
	}
	function bwtc() {
	if (tdc=="crime,") { tdc="" }
	else { tdc="crime,"; }
	//document.getElementById("tag").value=document.getElementById("tag").value.replace("crime,","")+tdc;
	}
	
	function imageUpload() {
	
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
str22=document.getElementById("ione").value;
var formData = new FormData();
formData.append("ione", document.getElementById("ione").files[0])
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
	if(xmlhttp.responseText=="no") {
		
		}
	else {
	$("iframe").contents().find("#src").val("../xenon-upload/"+xmlhttp.responseText);
	$("iframe").contents().find("#style").val("float:left; margin-left: 5px; margin-right: 8px; border: 2px black solid;");
	$("iframe").contents().find("#width").val("160");
$("iframe").contents().find("#height").val("160");
		document.getElementById("oik").innerHTML="Uploaded :) ";
		url="../xenon-upload/"+xmlhttp.responseText;
		}
    }
   }
xmlhttp.open("POST","http://'.$_SERVER['HTTP_HOST'].'/xenon-themes/pretomgroup/upload.php",true);
xmlhttp.send(formData);
}

var gie=0;
var myVar = null;
function getImage() {
gie=gie+9;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;


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
	if(xmlhttp.responseText=="no") {
		gie=gie-9;
		}
	else {
		document.getElementById("ige").innerHTML=xmlhttp.responseText;
		}
    }
   }
xmlhttp.open("GET","'.theme_location().'/upload.php?view=media&no="+gie,true);
xmlhttp.send();
}

function getImagerev() {
gie=gie-9;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;


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
	if(xmlhttp.responseText=="no") {
		gie=gie+9;
		}
	else {
		document.getElementById("ige").innerHTML=xmlhttp.responseText;
		}
    }
   }
xmlhttp.open("GET","'.theme_location().'/upload.php?view=media&no="+gie,true);
xmlhttp.send();
}



function insImg(img) {
$("iframe").contents().find("#src").val(img);
$("iframe").contents().find("#style").val("float:left; margin-left: 5px; margin-right: 8px; border: 2px black solid;");
$("iframe").contents().find("#width").val("160");
$("iframe").contents().find("#height").val("160");
}

bwth();
</script>
	
	';

}
}
return $content;
}
xenon_core("xenon_footer_admin_panel", "admin_bar_bdwave");











//slider file upload
function genRandomStringmu1() {
    $length = 40;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = '';    
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters)-1)];
    }
    return $string;
}
function upload_media1() {
$name=$_GET['imageid'];
//$_FILES['ione']['name']=$i;
function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
$filename = stripslashes($_FILES['ione']['name']);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		echo $extension."<br>";
if ($extension == "bmp" || $extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif")
  {
  if ($_FILES['ione']["error"] > 0)
    {
    echo "Return Code: " . $_FILES['ione']["error"] . "<br />";
    }
  else
    {

    if (file_exists("../xenon-upload/" . $_FILES['ione']["name"]) || 1==2)
      {
      echo $_FILES['ione']["name"] . " already exists. ";
      }
    else
      {
//tree
if($extension=="jpg" || $extension=="jpeg" )
{
$uploadedfile = $_FILES['ione']['tmp_name'];
$src = imagecreatefromjpeg($uploadedfile);

}
elseif($extension=="png")
{
$uploadedfile = $_FILES['ione']['tmp_name'];
$src = imagecreatefrompng($uploadedfile);
}
elseif($extension=="bmp")
{
$uploadedfile = $_FILES['ione']['tmp_name'];
$src = imagecreatefrombmp($uploadedfile);
}
else 
{
$uploadedfile = $_FILES['ione']['tmp_name'];
$src = imagecreatefromgif($uploadedfile);
}
list($width,$height)=getimagesize($uploadedfile);
$newwidth=980;
$newheight=385;
$tmp=imagecreatetruecolor($newwidth,$newheight);
imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
$filename1="../xenon-themes/".current_theme_name()."/images/".$name;
if($extension=="jpg" || $extension=="jpeg" )
{
imagejpeg($tmp,$filename1,100);
}
elseif($extension=="png")
{
imagepng($tmp,$filename1,9);
}
elseif($extension=="bmp")
{
imagebmp($tmp,$filename1,100);
}
else 
{
imagegif($tmp,$filename1,100);
}
imagedestroy($src);
imagedestroy($tmp);
//free
	  $mdby="admin";
	  $url='xenon_cms_media_'.$name.'.'.$extension;
	  if (file_exists("../xenon-themes/".current_theme_name()."/images/".$name))
      {

echo ''.$url.'';
}
     }
}
    }
	elseif ($extension == "3gp" || $extension == "mp4" || $extension == "avi")
  {

  }
  	elseif ($extension == "pdf" || $extension == "zip" ||  $extension == "rar" || $extension == "doc")
  {

  }
else
  {
  echo "Invalid file extention";
  }
  
}
?>