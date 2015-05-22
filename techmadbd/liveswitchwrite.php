<?php
if(isset($_GET['lan'])) {
$myfile = fopen("xenon-themes/techmadbd/liveswitchdata.html", "w") or die("Unable to open file!");
$lan=$_GET['lan'];
fwrite($myfile, $lan.'  ');
echo 'ok<br>';
echo $lan;
}
else {
echo 'error';
}
?>