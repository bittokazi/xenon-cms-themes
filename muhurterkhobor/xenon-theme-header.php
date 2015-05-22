<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<?php

if (is_page() || is_post())  {
 while ( show_count() < post_count() ) { global $posts,$lolzzc;

echo'<meta property="og:title" content="'.the_title().'" />
';

echo'<meta property="og:url" content="'.content_link().'"/>
';
$excude_allsummery=explode(' ',strip_tags(the_content()));
$summerymk='';
$summeryiii=0;
foreach($excude_allsummery as $essummery) {
if($summeryiii==25) { break; }
else {
$summerymk=$summerymk.' '.$essummery;
}
$summeryiii++;
}
echo'<meta property="og:description" content="'.$summerymk.'"/>
';

echo'<meta property="og:image" content="http://muhurterkhobor.com'.get_image_bdwave(the_content()).'"/>
';

end_post();

$lolzzc=0;

break; }
}

?>





<title><?php
if(isset($_GET['dir']) && $_GET['dir'] == "archive") { echo xenon_title().' | আর্কাইভ'; }
elseif (is_home()) { echo xenon_title().' | '.xenon_tagline(); }
elseif (is_home_navi()) { echo'next page'; }
elseif(is_page()) { echo page_title().' | '.xenon_title(); }
elseif(is_post()) { echo post_title().' | '.xenon_title(); }
elseif(is_category()) { echo category_title().' | '.xenon_title(); }
elseif(is_tags()) { echo xenon_tag_title().' | '.xenon_title(); }
elseif(is_search()) { echo xenon_search_title().' | '.xenon_title(); }
elseif(is_author()) { echo author_title().' | '.xenon_title(); }
elseif(is_404()) { echo'Not Found - 404'; }
else { echo'not found'; } ?></title>






<meta name="description" content="muhurterkhobor একটি অনলাইন নিউজ পোর্টাল।এখানে রাজনীতি, জাতীয়, খেলাধুলা, বিনোদন, লাইফস্টাইল, প্রযুক্তি, নারী, আইন ও আরও গুরুত্বপূর্ণ সংবাদ প্রকাশিত হয়" />
<meta name="keywords" content="bangladesh online newspaper,latest news of bangladesh, online news, bangladesh news portal, online newspaper, news paper, online bangla news,daily news paper, daily newspaper, bangladesh cricket,newspaper dhaka,bangla news in english,bangladeshi newspaper today,bangladesh news bd, bd news of bangladesh, bangladesh bd news, bd news bangladesh, latest online bangla news, bangladesh news video, muhurter khobor, muhurterkhobor, ai muhurter khobor, patuakhali news, patuakhali web, proti muhurter khobor, মুহূর্তের খবর, মুহূর্তেরখবর, এই মুহূর্তের খবর, প্রতি মুহূর্তের খবর, দেশের সাথে প্রতি মুহূর্ত, রাশিফল" />
<meta name="author" content="www.muhurterkhobor.com" />
<meta name="google-site-verification" content="jy5m_KANslMjHICkm4rNPh4cGqcA3CJr41iFzj5IAh4" />
<meta name="robots" content="all" />
<meta name="keywords" content="<?php if(is_post()) { echo get_keyword("headline,slider"); }
else {
echo 'bangladesh online newspaper,latest news of bangladesh, online news, bangladesh news portal, online newspaper, news paper, online bangla news,daily news paper, daily newspaper, bangladesh cricket,newspaper dhaka,bangla news in english,bangladeshi newspaper today,bangladesh news bd, bd news of bangladesh, bangladesh bd news, bd news bangladesh, latest online bangla news, bangladesh news video, muhurter khobor, muhurterkhobor, ai muhurter khobor, patuakhali news, patuakhali web, proti muhurter khobor, মুহূর্তের খবর, মুহূর্তেরখবর, এই মুহূর্তের খবর, প্রতি মুহূর্তের খবর, দেশের সাথে প্রতি মুহূর্ত, রাশিফল';
}
 ?>" />


<link href="<?php echo theme_location(); ?>/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/css/sliderman.css" />
	<script type="text/javascript" src="<?php echo theme_location(); ?>/js/sliderman.1.3.7.js"></script>
    <script src="<?php echo theme_location(); ?>/js/tabcontent.js" type="text/javascript"></script>
    <link href="<?php echo theme_location(); ?>/css/tabcontent.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/css/layout.css" />
<!--<link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/css/style.css" />
<script language="javascript" type="text/javascript" src="<?php echo theme_location(); ?>/js/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo theme_location(); ?>/js/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo theme_location(); ?>/js/lofslidernews.mt12.js"></script>-->

<script>
var xxx=0;
function loader() {
if(xxx>=100) {
xxx=1;
}
 document.getElementById('top-loader').style.width = xxx+"%";
 xxx=xxx+0.25;
}
function sticky_relocate() {
      var window_top = $(window).scrollTop();
      var div_top = document.getElementById("bar-check").offsetTop;
      if (window_top > div_top) {
	  document.getElementById('bk1').style.background = "#3d4c54";
	  document.getElementById('bk1').style.display = "block";
        document.getElementById('bar').style.position = "fixed";
		//document.getElementById('bar').style.borderBottom = "1px solid #ebebeb";
		document.getElementById('bar').style.top = 0+"px";
		//document.getElementById('bar').style.left = "0";
		document.getElementById('bar').style.margin = "0 auto";
		document.getElementById('bar').style.width = "100%";
		document.getElementById('menu').style.border="none";
		document.getElementById('bk1').style.borderBottom="1px black solid";
		document.getElementById('bk1').style.borderTop="1px black solid";
		document.getElementById('menu').style.marginTop="2px";
		}
      else if (window_top < div_top) {
	  document.getElementById('menu').style.marginTop="0px";
	  document.getElementById('menu').style.border="1px black solid";
	  document.getElementById('bar').style.background = "none";
	  document.getElementById('bar').style.borderBottom = "none";
        document.getElementById('bar').style.position = "relative";
		document.getElementById('bar').style.top = 0+"px";
		document.getElementById('bk1').style.background = "none";
		document.getElementById('bk1').style.display = "none";
      }
	  }
	  function changeClasss() {
		myVarr = setInterval(function(){window.onscroll = sticky_relocate();},10);
} 
function changeClass() {
		myVar = setInterval(function(){onTop();},10);
}
 
/*function cDd() {
clearInterval(myVar);
}*/
changeClasss();
function onTop() {
var window_top = $(window).scrollTop();
      var div_top = document.getElementById("bar-check").offsetTop;
      if (window_top > div_top) {
	  document.getElementById('ontop').style.display = "block";
		}
      else if (window_top < div_top) {
	  document.getElementById('ontop').style.display = "none";
      }
}
changeClass();
function topAction() {
document.body.scrollTop = document.documentElement.scrollTop = 0;
}
</script>


<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"RR2Hj1acJf002B", domain:"muhurterkhobor.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=RR2Hj1acJf002B" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->





<?php xenon_header(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56453019-1', 'auto');
  ga('send', 'pageview');

</script>





<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "68eb26ba-6e8b-441d-8456-50f559b80984", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>


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
<div id="main">
<div id="header_add">
<?php get_addvertise_bdwave(); ?>
</div>
<div id="header">
<?php get_addvertise_bdwave_left(); ?>
<a href="<?php echo home_url(); ?>"><div class="logo"></div></a>
<a href="http://edubuzzbd.com/" target="_blank">
<?php 
get_addvertise_bdwave_right(); 
?>
</a>
</div>
<div id="date">
<script type="text/javascript" src="http://english-date.appspot.com/index3.php"></script> <script type="text/javascript" src="http://bangladate.appspot.com/index3.php"></script>
</div>
<div style="clear:both;"></div>
<div id="bar-check"></div>
	<div id="bar">
<div id="menu">
<div id="menu-div">
<ul>
	<li><a <?php if (is_home()) { echo 'class="current"'; } else { } ?> href="<?php echo home_url(); ?>">প্রথম পাতা</a></li>
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
</div>
</div>