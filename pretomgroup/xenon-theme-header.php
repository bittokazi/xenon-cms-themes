<html>
<head>
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
<link href="<?php echo theme_location(); ?>/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo theme_location(); ?>/style.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="<?php echo theme_location(); ?>/js/jquery.min.js"></script> 
	<script type="text/javascript" src="<?php echo theme_location(); ?>/js/jquery.scrollTo-min.js"></script> 
	<script type="text/javascript" src="<?php echo theme_location(); ?>/js/jquery.localscroll-min.js"></script> 
	<script type="text/javascript" src="<?php echo theme_location(); ?>/js/init.js"></script> 
    
    <link rel="stylesheet" href="<?php echo theme_location(); ?>/css/slimbox2.css" type="text/css" media="screen" /> 
    <script type="text/JavaScript" src="<?php echo theme_location(); ?>/js/slimbox2.js"></script> 

<link rel="stylesheet" href="<?php echo theme_location(); ?>/css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo theme_location(); ?>/css/nivo-slider.css" type="text/css" media="screen" />



<meta name="description" content="Pretom Group is a Group of Textile production companies in Bangladesh" />
<meta name="keywords" content="pretom group, pretom group bangladesh, pretom group bd, www.pretomgroup.net, www.pretomgroup.net" />
<meta name="author" content="www.pretomgroup.net" />
<meta name="robots" content="all" />
<?php xenon_header(); ?>

</head>
<body>
<div id="main">
	<div id="header">
	<a class="logo" href="<?php echo home_url(); ?>"></a>
	
	<h1 class="title">
	<a href="<?php echo home_url(); ?>" style="text-decoration:none; color:#3154A4;">PRETOM GROUP</a>
	</h1>
	
	<div class="hr">
		<div class="wm">
		<a href="http://email.pretomgroup.net/" target="_blank"><img src="<?php echo theme_location(); ?>/images/wm.jpg" /></a>
		</div>
		<div class="sm">
		</div>
	</div>
	<div class="hl">
	
	</div>
	</div>
	<div id="menu">
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
	</div>
	
	
