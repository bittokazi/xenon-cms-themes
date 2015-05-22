<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
if (is_home()) { echo xenon_title().xenon_tagline(); }
elseif (is_home_navi()) { echo'next page'; }
elseif(is_page()) { echo page_title().' | '.xenon_title(); }
elseif(is_post()) { echo post_title().' | '.xenon_title(); }
elseif(is_category()) { echo category_title().' | '.xenon_title(); }
elseif(is_tags()) { echo xenon_tag_title().' | '.xenon_title(); }
elseif(is_search()) { echo xenon_search_title().' | '.xenon_title(); }
elseif(is_author()) { echo author_title().' | '.xenon_title(); }
elseif(is_404()) { echo'Not Found - 404'; }
elseif(is_signup()) { echo 'Signup'; }
else { echo'404 not found'; } ?></title>
<meta name="keywords" content="<?php if(is_post()) { echo get_keyword("headline,slider"); 
}
else {
echo '';
}
 ?>" />
<meta name="description" content="" />
<link href="<?php echo theme_location(); ?>/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/ddsmoothmenu.css" />


	<script type="text/javascript" src="<?php echo theme_location(); ?>/js/jquery.min.js"></script> 
	<script type="text/javascript" src="<?php echo theme_location(); ?>/js/jquery.scrollTo-min.js"></script> 
	<script type="text/javascript" src="<?php echo theme_location(); ?>/js/jquery.localscroll-min.js"></script> 
	<script type="text/javascript" src="<?php echo theme_location(); ?>/js/init.js"></script> 
    
    <link rel="stylesheet" href="<?php echo theme_location(); ?>/css/slimbox2.css" type="text/css" media="screen" /> 
    <script type="text/JavaScript" src="<?php echo theme_location(); ?>/js/slimbox2.js"></script> 

<link rel="stylesheet" href="<?php echo theme_location(); ?>/css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo theme_location(); ?>/css/nivo-slider.css" type="text/css" media="screen" />


<script type="text/javascript" src="<?php echo theme_location(); ?>/ddsmoothmenu.js">

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


<?php xenon_header(); ?>
        
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="templatemo_wrapper_outter">
<div id="templatemo_wrapper_inner">
<div id="templatemo_wrapper">

	<div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <?php
            show_xenon_menu('upper-menu',
array('before_menu' => '',
'after_menu' => '',
'before_link' => '<li>',
'after_link' => '</li>',
'current_anchor_class' => 'selected'
)); ?>
        </ul>
        <br style="clear: left" />
    </div><!-- end of templatemo_menu -->
    
    <div id="templatemo_header">
    	<div id="site_title"><h1><a href="<?php echo home_url(); ?>"><?php echo xenon_title(); ?></a></h1></div>
		
			<div id="ticker">
<div class="head">
Latest Post:
</div>
<div class="scroll">
<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);" scrollamount="3">
<?php
$resultslider = @mysql_query("SELECT * FROM frndzk_post WHERE tags LIKE'%headline%' ORDER by id desc LIMIT 0,15");
if ( @mysql_num_rows($resultslider) > 0 ) {
while($generalsli = @mysql_fetch_array($resultslider)) {
echo'<a href="'.@home_url().'/'.xenon_link_post().@$generalsli['shortname'].'">'.@$generalsli['post'].'</a> * '; 
}
}
 ?>
</marquee>
</div>
</div>


	</div> <!-- end of header -->