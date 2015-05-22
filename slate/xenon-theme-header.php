<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
if (is_home()) { echo xenon_title().' | '.xenon_tagline(); }
elseif (is_home_navi()) { echo'next page'; }
elseif(is_page()) { echo page_title(); }
elseif(is_post()) { echo post_title(); }
elseif(is_category()) { echo category_title(); }
elseif(is_tags()) { echo xenon_tag_title(); }
elseif(is_search()) { echo xenon_search_title(); }
elseif(is_author()) { echo author_title(); }
elseif(is_404()) { echo'Not Found - 404'; }
elseif(is_signup()) { echo 'Signup'; }
else { echo'404 not found'; } ?></title>
<meta name="keywords" content="slate, theme, darkcyan, teal color, xenon" />
<meta name="description" content="" />
<link href="<?php echo theme_location(); ?>/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<?php xenon_header(); ?>
<link rel="stylesheet" href="<?php echo theme_location(); ?>/css/nivo-slider.css" type="text/css" media="screen" />

<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>

<link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/css/ddsmoothmenu.css" />


<script type="text/javascript" src="<?php echo theme_location(); ?>/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><?php @include('content/title.php'); if($slate_title_custom=='text') { echo'<center><a style="text-decoration:none;" href="'.home_url().'"><h1>'.xenon_title().'</h1><div style="margin-top:7px;"><h6>'.xenon_tagline().'</h6></div></a></center>'; } else { echo'<center><a href="'.home_url().'"><img src="'.theme_location().'/images/logo.png"</a><br><br></center>'; } ?></div>
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a <?php if (is_home()) { echo 'class="selected"'; } else { } ?> href="<?php echo home_url(); ?>">Home</a></li>
            <?php
            show_xenon_menu('upper-menu',
array('before_menu' => '',
'after_menu' => '',
'before_link' => '<li>',
'after_link' => '</li>',
'current_anchor_class' => 'selected'
)); ?>
        </ul>
        <div id="search_box">
            <form action="<?php echo home_url().'/'.xenon_link_search(); ?>" method="post">
                <input type="text" value="Search" name="xenon-search-post" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->