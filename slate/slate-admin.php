<?php
if(user_name()!='') {
function frndzk_breadcwwwww() {
$s=$_SERVER['PHP_SELF'];
$e=explode('/',$s);
return $e[count($e) -1];
}
if(frndzk_breadcwwwww()=='xenon-theme-settings.php' && isset($_GET['slate']) && $_GET['slate']=='upload' && isset($_GET['theme']) && $_GET['theme']=='slate-admin' && isset($_GET['h_add']) && $_GET['h_add']!='' && isset($_FILES['file']['name'])) {
upload_slate_media($_FILES['file']['name']);
}
elseif(frndzk_breadcwwwww()=='xenon-theme-settings.php' && isset($_GET['slate']) && $_GET['slate']=='text' && isset($_GET['theme']) && $_GET['theme']=='slate-admin') {
file_edit_slate();
}
elseif(frndzk_breadcwwwww()=='xenon-theme-settings.php' && isset($_GET['slate']) && $_GET['slate']=='titles' && isset($_GET['theme']) && $_GET['theme']=='slate-admin' && isset($_GET['set']) && $_GET['set']!='') {
file_edit_slate1();
}
else {
@include("content/title.php");
echo'<br><h1>Slate Theme options</h1><h3>
SET Title ( currently: '.$slate_title_custom.' ) <a href="xenon-theme-settings.php?theme=slate-admin&slate=titles&set=image">Image</a> / <a href="xenon-theme-settings.php?theme=slate-admin&slate=titles&set=text">Text</a></h3><br>';
echo'<h3>upload logo</h3>';
header_slate_logo_upload();
echo'<h3>upload slider image</h3>';
header_slate_slider_upload1();
header_slate_slider_upload2();
header_slate_slider_upload3();
header_slate_slider_upload4();
echo'<h3>upload index page block image</h3>';
header_slate_block_upload1();
header_slate_block_upload2();
header_slate_block_upload3();
header_slate_block_upload4();
header_slate_block_upload5();
echo'<h3>slider caption</h3>';
slate_slider_text1();
slate_slider_text2();
slate_slider_text3();
slate_slider_text4();
echo'<h3>Slider link</h3>';
slate_slider_link1();
slate_slider_link2();
slate_slider_link3();
slate_slider_link4();
echo'<h3>index block title 1</h3>';
slate_index_block_title1();
slate_index_block_title2();
echo'<h3>index block content 1</h3>';
slate_index_block_content1();
slate_index_block_content2();
slate_index_block_content3();
echo'<h3>index block title 2</h3>';
slate_index_block2_title1();
slate_index_block2_title2();
slate_index_block2_title3();
slate_index_block2_title4();
echo'<h3>index block content 2</h3>';
slate_index_block2_content1();
slate_index_block2_content2();
slate_index_block2_content3();
slate_index_block2_content4();
}
}
?>