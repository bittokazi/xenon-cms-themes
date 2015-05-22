<?php
if(isset($_GET['action']) && $_GET['action']=="iu") {
upload_media1();
}
else {
//slider image
echo'<h1>Slider Image 1</h1>
<form method="post" action="xenon-theme-settings.php?theme=srtelecom-theme-option&action=iu&imageid=01.jpg"  enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';


echo'<h1>Slider Image 2</h1>
<form method="post" action="xenon-theme-settings.php?theme=srtelecom-theme-option&action=iu&imageid=02.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 3</h1>
<form method="post" action="xenon-theme-settings.php?theme=srtelecom-theme-option&action=iu&imageid=03.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 4</h1>
<form method="post" action="xenon-theme-settings.php?theme=srtelecom-theme-option&action=iu&imageid=04.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 5</h1>
<form method="post" action="xenon-theme-settings.php?theme=srtelecom-theme-option&action=iu&imageid=05.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 6</h1>
<form method="post" action="xenon-theme-settings.php?theme=srtelecom-theme-option&action=iu&imageid=06.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 7</h1>
<form method="post" action="xenon-theme-settings.php?theme=srtelecom-theme-option&action=iu&imageid=07.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';
echo'<h1>Slider Image 8</h1>
<form method="post" action="xenon-theme-settings.php?theme=srtelecom-theme-option&action=iu&imageid=08.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';
}
?>