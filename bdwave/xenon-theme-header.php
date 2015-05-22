<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
if (is_home()) { echo xenon_title().' | '.xenon_tagline(); }
elseif (is_home_navi()) { echo'next page'; }
elseif(is_page()) { echo page_title().' | '.xenon_title(); }
elseif(is_post()) { echo post_title().' | '.xenon_title(); }
elseif(is_category()) { echo category_title().' | '.xenon_title(); }
elseif(is_tags()) { echo xenon_tag_title().' | '.xenon_title(); }
elseif(is_search()) { echo xenon_search_title().' | '.xenon_title(); }
elseif(is_author()) { echo author_title().' | '.xenon_title(); }
elseif(is_404()) { echo'Not Found - 404'; }
else { echo'not found'; } ?></title>
<meta name="description" content="মুহূর্তের খবর | দেশের সাথে প্রতি মুহূর্ত" />
<meta name="author" content="www.muhurterkhobor.com" />
<meta name="robots" content="all" />
<meta name="keywords" content="MuhurterKhobor, Muhurter Khobor, MuhurterKhobo24, মুহূর্তের খবর 24, মুহূর্তের খবর, Dhaka, Bangladesh, News, Breaking News, Breakingnews, newspaper, online news portal, Bangladesh News, World News, Asia News, Bengali Newspaper, MuhurterKhobr Online, Bangladeshi Newspaper, News paper Bangladesh, Daily news paper in bangladesh, daily newspapers of bangladesh, daily newspaper, Current News, Bengali daily newspaper, Internet Newspaper, National, International, Politics, Business, Sports, Entertainment, Technology, Education, Health, Lifestyle, Feature, Literature, share market, Ichchheghuri, Technology, Malaysia, New York, aviatour, Chittagong, Islam, open forum, Traveling, Travelers notebook, Citizen opinion, Awami League, BNP, Jatiya Party, Politics, Parliament, Sangsad, Sheikh Hasina, Khaleda Zia, Ershad, Sunny Leone, Facebook, twitter, Google, Angelina Jolie, Shakira, song, dance, Company, Economy, Industry, Markets, Education, Entertainment, Arts, Books, Celebrities, Movies, Music, TV, Headlines, Health, Humor, Legal, Lifestyle, Automotive, Culture, Food and Beverage, Home, Garden, Theater, Travel, Nation, Politics, Religion, Science, Environment, Geography, Space, Sports, America, Football, Athletics, Badminton, Baseball, Basketball, Cricket, Cycling, Hockey, Golf, Handball, School, Olympics, Racing, Tennis, Computer, Internet, Video Games, Weird News, World, bdnews24, Daily Star, Prothom Alo, BDNEWS, stock market, Foreign Education, Yunus, Tarique, War Crimes Tribunal, 1971, English Version, Bangla Version, Hello, Opinion, Lifestyle, Kidz, Cricket, Blog, Kids, Human Rights, Business Study, Movies, Films, Cinema, Technology News, Obama, Mobile Court, Dhaka Metropolitan Police, Facebook, Blockade, Countrywide Strike, Handmade Bombs, RAB, Shibir Activists, Jamaat-e-Islami, BNP, AL, Dialogue, BBC News, Environment, Breaking News, Top new Bangla news headlines today, breaking news of bangla, bangla latest news today, breaking news bangla, bangla breaking news, online news portal, online news portal bangladesh, live bangla news, tv news bangladesh, bangla news tv, news bangladesh tv, bangla tv news today, bangladesh news live, bangla tv online news, live news bangladesh, bangla news live, bangla tv channel, bdnews24, Bangladesh News, Daily Star, Prothom Alo, BDNEWS, stock market, Foreign Education,Yunus, Tarique, banglanews24, corruption, Sheikh Hasina, Khaleda Zia, BNP, Awami League, War Crimes Tribunal, 1971,English Version, Bangla Version, Hello, Opinion, Lifestyle,Kidz,Cricket,Blog,Kids,Human Rights, Business Study, Movies, Films, Cinema, Technology, Technology News, Obama,Mobile Court,Dhaka Metropolitan Police, Facebook,Blockade,Countrywide Strike,Handmade Bombs,RAB,Shibir Activists,Jamaat-e-Islami,BNP,AL,Dialogue,BBC News, Awami League,Environment,Breaking News, Top news, Dhaka, Bangla News, BD newspaper, Bangla Online News, Online News paper, Bengali Newspaper, Bangla News Online, Bangladeshi Newspaper,News paper Bangladesh,Daily news paper in bangladesh,daily newspapers of bangladesh,daily newspaper,Current News,bengali daily newspaper, Internet Newspaper,Rohingyas,non-party caretaker,general election,হরতাল,আওয়ামী লীগ,বিএনপি, বিএনপি চেয়ারপারসন খালেদা জিয়া,প্রধানমন্ত্রী শেখ হাসিনা, নির্বাচনকালীন সরকার,সংলাপ ও সমঝোতা,পুলিশ, মুহাম্মদ ইউনুস,সামরিক শাসন,গ্রামীণ ব্যাংক,টেলিফোন,গণভব,ঝটিকা মিছিল,ককটেল বিস্ফোরণ,জামায়াত-শিবির,মানবতাবিরোধী অপরাধ,আন্তর্জাতিক অপরাধ ট্রাইব্যুনাল,যুদ্ধাপরাধী" />
<link href="<?php echo theme_location(); ?>/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/css/sliderman.css" />
	<script type="text/javascript" src="<?php echo theme_location(); ?>/js/sliderman.1.3.7.js"></script>
    <script src="<?php echo theme_location(); ?>/js/tabcontent.js" type="text/javascript"></script>
    <link href="<?php echo theme_location(); ?>/css/tabcontent.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/css/layout.css" />
<link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/css/style.css" />
<script language="javascript" type="text/javascript" src="<?php echo theme_location(); ?>/js/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo theme_location(); ?>/js/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo theme_location(); ?>/js/lofslidernews.mt12.js"></script>

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
</head>
<body>
<div id="main">
<div id="header_add">
<?php get_addvertise_bdwave(); ?>
</div>
<div id="header">
<?php get_addvertise_bdwave_left(); ?>
<a href="<?php echo home_url(); ?>"><div class="logo"></div></a>
<?php get_addvertise_bdwave_right(); ?>
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