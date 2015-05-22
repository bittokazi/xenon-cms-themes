<?php
if(isset($_GET['action']) && $_GET['action']=="ibt1") {
file_furrat_ibt1();
}
else if(isset($_GET['action']) && $_GET['action']=="ibt2") {
file_furrat_ibt2();
}
else if(isset($_GET['action']) && $_GET['action']=="ibt3") {
file_furrat_ibt3();
}
else if(isset($_GET['action']) && $_GET['action']=="ibc1") {
file_furrat_ibc1();
}
else if(isset($_GET['action']) && $_GET['action']=="ibc2") {
file_furrat_ibc2();
}
else if(isset($_GET['action']) && $_GET['action']=="ibc3") {
file_furrat_ibc3();
}
else if(isset($_GET['action']) && $_GET['action']=="fb") {
file_furrat_fb();
}
else if(isset($_GET['action']) && $_GET['action']=="tw") {
file_furrat_tw();
}
else if(isset($_GET['action']) && $_GET['action']=="st1") {
file_furrat_st1();
}
else if(isset($_GET['action']) && $_GET['action']=="st2") {
file_furrat_st2();
}
else if(isset($_GET['action']) && $_GET['action']=="st3") {
file_furrat_st3();
}
else if(isset($_GET['action']) && $_GET['action']=="st4") {
file_furrat_st4();
}
else if(isset($_GET['action']) && $_GET['action']=="st5") {
file_furrat_st5();
}
else if(isset($_GET['action']) && $_GET['action']=="iu") {
upload_media1();
}
else {
echo'
<h1>Index Block Title 1</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=ibt1">
<textarea name="content">';
@include("content/ibt1.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Index Block Title 2</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=ibt2">
<textarea name="content">';
@include("content/ibt2.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Index Block Title 3</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=ibt3">
<textarea name="content">';
@include("content/ibt3.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Index Block content 1</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=ibc1">
<textarea name="content">';
@include("content/ibc1.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Index Block content 2</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=ibc2">
<textarea name="content">';
@include("content/ibc2.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Index Block content 3</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=ibc3">
<textarea name="content">';
@include("content/ibc3.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Facebook Link</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=fb">
<textarea name="content">';
@include("content/fb.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Twitter Link</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=tw">
<textarea name="content">';
@include("content/tw.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
//slider title
echo'
<h1>Slider Title 1</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=st1">
<textarea name="content">';
@include("content/st1.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Slider Title 2</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=st2">
<textarea name="content">';
@include("content/st2.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Slider Title 3</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=st3">
<textarea name="content">';
@include("content/st3.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Slider Title 4</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=st4">
<textarea name="content">';
@include("content/st4.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
echo'
<h1>Slider Title 5</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=st5">
<textarea name="content">';
@include("content/st5.txt"); 
echo'</textarea><br>
<input type="submit" value="save"/>
</form><br>';
//slider image
echo'<h1>Slider Image 1</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=iu&imageid=01.jpg"  enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';


echo'<h1>Slider Image 2</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=iu&imageid=02.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 3</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=iu&imageid=03.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 4</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=iu&imageid=04.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';

echo'<h1>Slider Image 5</h1>
<form method="post" action="xenon-theme-settings.php?theme=newindexbd-theme-option&action=iu&imageid=05.jpg" enctype="multipart/form-data">
<input type="file" name="ione" id="ione" style="float:left; margin-top: -5px;"/>
<input type="submit" value="save"/>
</form><br>';
}
?>