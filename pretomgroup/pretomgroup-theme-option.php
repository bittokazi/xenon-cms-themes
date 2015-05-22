<?php
if(isset($_GET['action']) && $_GET['action']=="iu") {
upload_media1();
}
else {
//slider image
echo'<h1>Slider Image 1</h1>
<form method="post" action="xenon-theme-settings.php?theme=pretomgroup-theme-option&action=iu&imageid=slider1.jpg"  enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';


echo'<h1>Slider Image 2</h1>
<form method="post" action="xenon-theme-settings.php?theme=pretomgroup-theme-option&action=iu&imageid=slider2.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 3</h1>
<form method="post" action="xenon-theme-settings.php?theme=pretomgroup-theme-option&action=iu&imageid=slider3.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 4</h1>
<form method="post" action="xenon-theme-settings.php?theme=pretomgroup-theme-option&action=iu&imageid=slider4.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 5</h1>
<form method="post" action="xenon-theme-settings.php?theme=pretomgroup-theme-option&action=iu&imageid=slider5.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 6</h1>
<form method="post" action="xenon-theme-settings.php?theme=pretomgroup-theme-option&action=iu&imageid=slider6.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 7</h1>
<form method="post" action="xenon-theme-settings.php?theme=pretomgroup-theme-option&action=iu&imageid=slider7.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';
echo'<h1>Slider Image 8</h1>
<form method="post" action="xenon-theme-settings.php?theme=pretomgroup-theme-option&action=iu&imageid=slider8.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';
echo'<h1>Slider Image 9</h1>
<form method="post" action="xenon-theme-settings.php?theme=pretomgroup-theme-option&action=iu&imageid=slider9.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';
}
?>