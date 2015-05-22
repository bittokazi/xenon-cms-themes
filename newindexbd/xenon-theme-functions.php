<?php
register_xenon_menu('upper-menu');
register_xenon_widget('footer-bar-left');
register_xenon_widget('footer-bar-left-center');
register_xenon_widget('footer-bar-right-center');
register_xenon_widget('footer-bar-right');
function newindexbd_theme_option() {  
    add_menu('newindexbd-theme-option.php', 'newindexbd-theme-option', 'themepage','1');  
}
xenon_core('xenon_add_menu', 'newindexbd_theme_option');
//index block titlw1
function file_furrat_ibt1() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/ibt1.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_ibt2() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/ibt2.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_ibt3() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/ibt3.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_ibc1() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/ibc1.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_ibc2() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/ibc2.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_ibc3() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/ibc3.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_fb() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/fb.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_tw() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/tw.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_st1() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/st1.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_st2() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/st2.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_st3() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/st3.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_st4() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/st4.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}
function file_furrat_st5() {
if(isset($_POST['content'])) {
$contentst=$_POST['content'];
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/".current_theme_name()."/content/st5.txt","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo 'updated successfully...<br>';
}
}

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
$newwidth=900;
$newheight=240;
$tmp=imagecreatetruecolor($newwidth,$newheight);
imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
$filename1="../xenon-themes/".current_theme_name()."/images/slideshow/".$name;
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
	  if (file_exists("../xenon-themes/".current_theme_name()."/images/slideshow/".$name))
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