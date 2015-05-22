<?php
@include('../../frndzk.php');
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
move_uploaded_file($_FILES['ione']["tmp_name"],
      "../../xenon-upload/xenon_cms_media_".$name.'.'.$extension);
	  $url='xenon_cms_media_'.$name.'.'.$extension;
	  echo ''.$url.'';
	  $mdby="admin";
	  

	  $query="INSERT INTO frndzk_media VALUES ('','$url','$mdby')";
@mysql_query($query);
     }
}
    }
else
  {
  echo "Invalid file extention";
  }
  
}
upload_media();
?>