<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
if (is_home()) { echo xenon_title().xenon_tagline(); }
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
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo theme_location(); ?>/css/style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?php echo theme_location(); ?>/css/nivo-slider.css" type="text/css" media="screen" />
<?php xenon_header(); ?>
<script src="<?php echo theme_location(); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo theme_location(); ?>/js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	<div id="tooplate_top_bar">
    	<a class="social_btn twitter" href="<?php @include("content/tw.txt"); ?>">&nbsp;</a>
        <a class="social_btn facebook" href="<?php @include("content/fb.txt"); ?>">&nbsp;</a>
    </div>	
    
    <div id="tooplate_header">
        <div id="site_title" style="margin-left:-20px;"><h1><a href="<?php echo home_url(); ?>" style="width:260px; background:none; text-decoration:none; background: -webkit-linear-gradient(#eee, #333);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent; font-size:35px; text-indent: 35px;"><?php echo xenon_title(); ?></a></h1></div>
        <div id="tooplate_menu">
            <ul>
                <li><a <?php if (is_home()) { echo 'class="current"'; } else { } ?> href="<?php echo home_url(); ?>">Home</a></li>
			            <?php
            show_xenon_menu('upper-menu',
array('before_menu' => '',
'after_menu' => '',
'before_link' => '<li>',
'after_link' => '</li>',
'current_anchor_class' => 'current'
)); ?>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->