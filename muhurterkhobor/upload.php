<?php
@include('../../frndzk.php');
if (isset($_GET['view']) && $_GET['view']=='media') {
$i=$_GET['no'];
$result1crr = @mysql_query("SELECT * FROM frndzk_media ORDER by id DESC LIMIT $i,9");
if ( @mysql_num_rows($result1crr) > 0 ) {
while($general1cee = @mysql_fetch_array($result1crr)) {
echo'<img src="../xenon-upload/'.$general1cee['url'].'" width="80px" height="80px" style="cursor:pointer; margin-top:3px; margin-left:3px; float:left;" onclick="insImg(\'../xenon-upload/'.$general1cee['url'].'\')"/>';
}
}
else {
echo'no';
}
}
else {
function genRandomStringmu() {
    $length = 40;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = '';    
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters)-1)];
    }
    return $string;
}
function upload_media() {
$name=genRandomStringmu();
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
if ($extension == "bmp" || $extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif")
  {
  if ($_FILES['ione']["error"] > 0)
    {
    echo "Return Code: " . $_FILES['ione']["error"] . "<br />";
    }
  else
    {

    if (file_exists("../xenon-upload/" . $_FILES['ione']["name"]))
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
$newwidth=400;
$newheight=400;
$tmp=imagecreatetruecolor($newwidth,$newheight);
imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
$filename1="../../xenon-upload/xenon_cms_media_".$name.'.'.$extension;
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
	  if (file_exists("../../xenon-upload/xenon_cms_media_".$name.'.'.$extension))
      {
	  $query="INSERT INTO frndzk_media VALUES ('','$url','$mdby')";
@mysql_query($query);
echo ''.$url.'';
}
     }
}
    }
	elseif ($extension == "3gp" || $extension == "mp4" || $extension == "avi")
  {
    if ($_FILES['ione']["error"] > 0)
    {
    echo "Return Code: " . $_FILES['ione']["error"] . "<br />";
    }
  else
    {
	move_uploaded_file($_FILES['ione']["tmp_name"],
      "../../xenon-upload/xenon_cms_media_".$name.'.'.$extension);
	  $mdby="admin";
	  $url='xenon_cms_media_'.$name.'.'.$extension;
	  if (file_exists("../../xenon-upload/xenon_cms_media_".$name.'.'.$extension))
      {
	  $query="INSERT INTO frndzk_media VALUES ('','$url','$mdby')";
@mysql_query($query);
echo ''.$url.'';
	}
  }
  }
  	elseif ($extension == "pdf" || $extension == "zip" ||  $extension == "rar" || $extension == "doc")
  {
  $result = @mysql_query("SELECT * FROM frndzk_commenton
WHERE id = '4'");
  if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
    if($general['commenter']=="true" || user_roll() == "administrator") {
    if ($_FILES['ione']["error"] > 0)
    {
    echo "Return Code: " . $_FILES['ione']["error"] . "<br />";
    }
  else
    {
	move_uploaded_file($_FILES['ione']["tmp_name"],
      "../../xenon-upload/xenon_cms_media_".$name.'.'.$extension);
	  $mdby="admin";
	  $url='xenon_cms_media_'.$name.'.'.$extension;
	  if (file_exists("../../xenon-upload/xenon_cms_media_".$name.'.'.$extension))
      {
	  $query="INSERT INTO frndzk_media VALUES ('','$url','$mdby')";
@mysql_query($query);
echo ''.$url.'';
}
	}
	}
	else
  {
  echo "File Upload Disabled but Image and Videos can be uploaded";
  }
	}
	}
  }
else
  {
  echo "Invalid file extention";
  }
  
}
upload_media();
}
?>