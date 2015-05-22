<?php
echo'<h1>BDwave Theme Settings</h1>
<a href="xenon-theme-settings.php?theme=bdwave-admin&newpage=poll"><h3>GOTO poll settings</h3></a>
<a href="xenon-theme-settings.php?theme=bdwave-admin&newpage=quiz"><h3>GOTO quiz settings</h3></a>';
if(isset($_GET['newpage']) && $_GET['newpage']=="edit_result_poll_p" && isset($_GET['poll_id_c'])) {
bdwave_poll_cheat();
}
if(isset($_GET['newpage']) && $_GET['newpage']=="edit_result_poll") {
bdwave_poll_cheat_action();
}
if(isset($_GET['newpage']) && $_GET['newpage']=="quiz_result") {
bdwave_quiz_home_single();
}
if(isset($_GET['polldeleteid']) && $_GET['polldeleteid']!="") {
poll_delete();
}
if(isset($_GET['newpage']) && $_GET['newpage']=="poll") {
bdwave_poll_home();
}
//quiz
if(isset($_GET['newpage']) && $_GET['newpage']=="quiz") {
bdwave_quiz_home();
}
if(isset($_GET['newpage']) && $_GET['newpage']=="add_new_quiz") {
bdwave_new_quiz_add();
}
if(isset($_GET['newpage']) && $_GET['newpage']=="add_new_quizw") {
bdwave_new_quizw_add();
}
//quiz finish
if(isset($_GET['newpage']) && $_GET['newpage']=="add_new_poll") {
bdwave_new_poll_add();
}
echo'<h5>Header Addvertise Image settings</h5>';
if(isset($_GET['bdwave']) && $_GET['bdwave']=="header_add") {
upload_header_media($_FILES['fileq']['name']);
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_category_post") {
bdwave_category_post_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_post_slider") {
bdwave_post_slider_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_cpb") {
bdwave_text_add_cpb();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_7_tabs") {
bdwave_7_tabs_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_3_tabs") {
bdwave_3_tabs_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_slider") {
bdwave_slider_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_single_post") {
bdwave_single_post_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_text") {
bdwave_text_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_text_h") {
bdwave_text_add_h();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_text_big") {
bdwave_text_big_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_gallery") {
bdwave_gallery_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_yt") {
bdwave_yt_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_sc") {
bdwave_sc_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_w") {
bdwave_add_w_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_poll") {
bdwave_poll_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_quiz") {
bdwave_quiz_add();
}
if(isset($_GET['bdwave']) && $_GET['bdwave']=="add_bipv") {
bdwave_bipv_add();
}
if(isset($_GET['bdwaveeditid']) && $_GET['bdwaveeditid']!="") {
widget_bd_wave_edit();
}
if(isset($_GET['bdwaveedit']) && $_GET['bdwaveedit']!="") {
widget_bd_wave_edit_action();
}
if(isset($_GET['bdwavedeleteid']) && $_GET['bdwavedeleteid']!="") {
widget_bd_wave_delete();
}
if(isset($_GET['editbn']) && $_GET['editbn']=="yes") {
bdwave_breaking_news();
}
header_add_upload();
echo'
<h1>Breaking News (Leave it Blank to Disable)</h1>
<form action="xenon-theme-settings.php?theme=bdwave-admin&editbn=yes" method="post">
Text:<br><textarea name="text">'; @include('content/bn.php'); echo $bwbn.'</textarea>
<input type="submit" name="submit" value="Submit" /></form>
';
echo'<h3>Add block</h3>';
add_bdwave_block();
echo'<h3>Add Category Post</h3>';
bdwave_category_post();
echo'<h3>Add Big Category Post</h3>';
bdwave_text_cpb();
echo'<h3>Add Post Slider</h3>';
bdwave_post_slider();
echo'<h3>Add Tabbed slider ( 7tabs+1st one is title)</h3>';
bdwave_7_tabs();
echo'<h3>Add Tabbed post ( 3tabs+1st one is title)</h3>';
bdwave_3_tabs();
echo'<h3>Add slider</h3>';
bdwave_slider();
echo'<h3>Add Single Post</h3>';
bdwave_single_post();
echo'<h3>Add Text Widget</h3>';
bdwave_text();
echo'<h3>Add horizontal Text Widget</h3>';
bdwave_text_h();
echo'<h3>Add big Text Widget</h3>';
bdwave_text_big();
echo'<h3>Add gallery Widget</h3>';
bdwave_gallery();
echo'<h3>Add Youtube Widget</h3>';
bdwave_yt();
echo'<h3>Add Sound cloud Track Widget</h3>';
bdwave_sc();
echo'<h3>Add big image + post viewer Widget</h3>';
bdwave_bipv();
echo'<h3>Add addbertise Widget</h3>';
bdwave_add_w();
echo'<h3>Add POll Widget</h3>';
bdwave_poll();
echo'<h3>Add QUIZ Widget</h3>';
bdwave_quiz();
echo'<h2>Widget List</h2>';
widget_bd_wave_home();
?>