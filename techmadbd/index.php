<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
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
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo theme_location(); ?>/css/templatemo-style.css">
		
		
		
		
		<!-- jQuery library (served from Google) -->
<script src="<?php echo theme_location(); ?>/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="<?php echo theme_location(); ?>/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="<?php echo theme_location(); ?>/jquery.bxslider.css" rel="stylesheet" />

<link rel="stylesheet" href="<?php echo theme_location(); ?>/flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="<?php echo theme_location(); ?>/js/modernizr.js"></script>

		<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
  
		captions: true,
		responsive: true,
		ticker: false,
		tickerHover: true,

		// AUTO
		auto: true,
		pause: 4000,
		autoStart: true,
		autoDirection: 'next',
		autoHover: true,
		autoDelay: 0,
		// CONTROLS
		controls: false,
		nextText: 'Next',
		prevText: 'Prev',
		nextSelector: null,
		prevSelector: null,
		autoControls: false,
		startText: 'Start',
		stopText: 'Stop',
		autoControlsCombine: false,
		autoControlsSelector: null,
		
		// PAGER
		pager: false,
		pagerType: 'full',
		pagerShortSeparator: ' / ',
		pagerSelector: null,
		buildPager: null,
		pagerCustom: null,
  });
  
});
</script>
		
		
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
	  //document.getElementById('bk1').style.background = "#3d4c54";
	  //document.getElementById('bk1').style.display = "block";
        //document.getElementById('bar').style.position = "fixed";
		//document.getElementById('bar').style.borderBottom = "1px solid #ebebeb";
		document.getElementById('bar').style.top = 0+"px";
		//document.getElementById('bar').style.left = "0";
		//document.getElementById('bar').style.margin = "0 auto";
		//document.getElementById('bar').style.width = "100%";
		document.getElementById("bar").style.marginTop = "-60px";
		//document.getElementById('menu').style.border="none";
		//document.getElementById('bk1').style.borderBottom="1px black solid";
		//document.getElementById('bk1').style.borderTop="1px black solid";
		//document.getElementById('menu').style.marginTop="2px";
		}
      else if (window_top < div_top) {
	  //document.getElementById('menu').style.marginTop="0px";
	  //document.getElementById('menu').style.border="1px black solid";
	  document.getElementById("bar").style.marginTop = "0px";
	  document.getElementById('bar').style.background = "none";
	  document.getElementById('bar').style.borderBottom = "none";
        //document.getElementById('bar').style.position = "relative";
		document.getElementById('bar').style.top = 0+"px";
		//document.getElementById('bk1').style.background = "none";
		//document.getElementById('bk1').style.display = "none";
      }
	  }
	  function changeClasss() {
		myVarr = setInterval(function(){window.onscroll = sticky_relocate();},10);
}
/*function cDd() {
clearInterval(myVar);
}*/
changeClasss();
</script>


        <!-- JavaScripts -->
        <?php //xenon_header(); ?> 
        <script src="<?php echo theme_location(); ?>/js/vendor/modernizr.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM"></script>

	</head>
	<body>
    
    <header class="site-header" id="top">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
				<div style="clear:both;"></div>
<div id="bar-check" style="margin-top:60px; position:absolute;"></div>
	<div id="bar">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                          <i class="fa fa-bars"></i>
                        </button>
                        <div class="logo-wrapper">
                            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                                <img src="<?php echo theme_location(); ?>/images/logo.png" alt="rainbow template" title="rainbow template">
                            </a>
                        </div>  
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#top" class="link-home">Home</a></li>
                            <li><a href="#about" class="link-about">About</a></li>
                            <li><a href="#portfolio" class="link-portfolio">Portfolio</a></li>
                            <li><a href="#contact" class="link-contact">Contact</a></li>
                        </ul>
                    </div>
                </div> 
				
				</div>
				
            </div>
        </nav>
    </header>

    
    <div id="first-section">
        <div class="container">
        
            <div class="row">
                <div class="image">
				<div id="slider">
			<ul class="bxslider">
				<li><a href="#"><img src="<?php echo theme_location(); ?>/images/templatemo-image.jpg" /></a></li>
				<li><a href="#"><img src="<?php echo theme_location(); ?>/images/11051177_915431771810912_720003267_n.jpg" /></a></li>
				<li><a href="#"><img src="<?php echo theme_location(); ?>/images/11023205_915429218477834_140666878_n.jpg" /></a></li>
			</ul>
	</div>
                </div>
            </div>
            
            <div class="row">
                <div class="services">
                
                    
                    
                </div>
            </div>
            
        </div>
    </div>

    <div id="about">
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>WHO WE ARE</h2>
                            <span>Let us tell you about our backgrounds</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="description">
                            <h4>MORE ABOUT OUR COMPANY</h4>
                            <p>The Tech Mad is team has built to lead the nation ahead to the next level of the tech world. We would like to serve the students and the professionals those who are involve in engineering.
                            <br><br>We are providing you the service for embedded system development, robotics, aero-botics, micro-controller (AVR & Arduino) and PCB design course. Also we supply all kind of equipment for robotics and RC with all kind of technical support.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="first-btn">
                            <a href="#">Join us</a>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="second-btn">
                            <a href="#">More about us</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="video">
                           <iframe width="800" height="450" src="https://www.youtube.com/embed/MZOm20430_M" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio">
        <div class="container">
            <div class="portfolio-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>OUR PORTFOLIO</h2>
                            <span>What we have done in the past</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-portfolio" >
                            <div class="row portfolio-holder">
                                <article class="portfolio col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry-thumbnail">
                                        <img src="http://techmadbd.com/xenon-upload/xenon_cms_media_h4juhqbd6vqz3caa16wpcx020pc6qa14uv8f7xba.jpg" alt="" width="360px" height="290px">
                                    </div>
                                    <div class="portfolio-overlay first entry-title">
                                        <h4>Home Appliance  Control System</h4>
                                        <p style="width:350px;">We Have developed home appliance control system with cell phone using bluetooth</p>
                                        <a href="#">View More</a>
                                    </div>
                                </article>
                                <article class="portfolio col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry-thumbnail">
                                        <img src="http://techmadbd.com/xenon-upload/xenon_cms_media_h7oks55vp7mutbbw5du6rba7mi3sn31558ykhzl6.jpg" alt="" width="360px" height="290px">
                                    </div>
                                    <div class="portfolio-overlay first entry-title">
                                        <h4>UAV</h4>
                                        <p style="width:350px;">We have developed Unmanned Arial vehicle</p>
                                        <a href="#">View More</a>
                                    </div>
                                </article>
                                <article class="portfolio col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry-thumbnail">
                                        <img src="http://techmadbd.com/xenon-upload/xenon_cms_media_a6yto08f2zk3winm9jdra8h464sw05oti01d895y.jpg" alt="" width="360px" height="290px">
                                    </div>
                                    <div class="portfolio-overlay first entry-title">
                                        <h4>Web based Appliance control system</h4>
                                        <p style="width:350px;">We have developed Web based Appliance control system. All system condition is updated in web. also controlled from web</p>
                                        <a href="#">View More</a>
                                    </div>
                                </article>
                                <article class="portfolio col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry-thumbnail">
                                        <img src="http://techmadbd.com/xenon-upload/xenon_cms_media_646bvhud4on65fuwh46xu71n9mjly274lduy3ykr.jpg" alt="" width="360px" height="290px">
                                    </div>
                                    <div class="portfolio-overlay first entry-title">
                                        <h4>Air boat</h4>
                                        <p style="width:350px;">We have developed air propelled boat prototype</p>
                                        <a href="#">View More</a>
                                    </div>
                                </article>
                                <article class="portfolio col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry-thumbnail">
                                        <img src="http://techmadbd.com/xenon-upload/xenon_cms_media_z5kegw8kahlf2mfek657a9xm96q1wsbprmfob2ij.jpg" alt="" width="360px" height="290px">
                                    </div>
                                    <div class="portfolio-overlay first entry-title">
                                        <h4>Launch/ship load alert and Tracker</h4>
                                        <p style="width:350px;">We have developed launch/ship load alert and tracking system. all the information is sent to web.</p>
                                        <a href="#">View More</a>
                                    </div>
                                </article>
                                <article class="portfolio col-md-4 col-sm-6 col-xs-12">
                                    <div class="entry-thumbnail">
                                        <img src="http://techmadbd.com/xenon-upload/xenon_cms_media_qzuq0u1g7ls06dj1h74bhuln3al1qug9c9p2n4sv.jpg" alt="" width="360px" height="290px">
                                    </div>
                                    <div class="portfolio-overlay first entry-title">
                                        <h4>Solar power control System</h4>
                                        <p style="width:350px;">Solar power control System</p>
                                        <a href="#">View More</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="contact">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>CONTACT US</h2>
                            <span>Feel free to send us a message</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="map">
                            <div id="googleMap" class="templatemo-map"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form action="#" method="post" class="form">
                            <div class="row">
                            <div class="name col-md-4">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="email col-md-4">
                                <input type="text" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="subject col-md-4">
                                <input type="text" name="subject" id="subject" placeholder="Subject..." />
                            </div> 
                            </div>
                            <div class="row">        
                                <div class="text col-md-12">
                                    <textarea name="message" id="message" placeholder="Message..."></textarea>
                                </div>   
                            </div>                              
                            <div class="submit">
                                <input type="submit" value="Send Now" />
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-description">
                                <h4>Reach Us Through</h4>
                                <p>Address: TechMad Bangladesh, Dhanmondi 15, Dhaka, Bangladesh.
                                <br><br>Call us: +8801722813938,  +8801716897634<br>
Email: contact@techmadbd.com
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2015 <a href="http://techmadbd.com">Tech-Mad-Bd</a>
                                <!-- | <em>Design: <a href="http://www.templatemo.com">templatemo</a></em> -->
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="back-to-top">
                                <a href="#top"><i class="fa fa-angle-up"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="social-icons">
                                <ul>
                                    <li><a href="https://www.facebook.com/Techmadbd" class="fb-link" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twiter-link"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="rss-link"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </footer>
	
	<div id="navmenu">
	<div class="mainpart">
	<ul>
<?php
            show_xenon_menu('left-menu-bar',
array('before_menu' => '',
'after_menu' => '',
'before_link' => '<li>',
'after_link' => '</li>',
'current_anchor_class' => ''
)); ?>
	</ul>
	</div>
	<div class="pointer"><img src="<?php echo theme_location(); ?>/images/arrow.png" height="50px" width="50px" style="" /></div>
	</div>
    
		<!-- Javascripts -->
        <script>
        function initialize()
        {
        var mapProp = {
          center: new google.maps.LatLng(23.7443957,90.3728198),
          zoom: 15,
		  scrollwheel: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
          };
        var map=new google.maps.Map(document.getElementById("googleMap")
          ,mapProp);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
		<script type="text/javascript" src="<?php echo theme_location(); ?>/js/vendor/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo theme_location(); ?>/js/templatemo_script.js"></script>
	</body>
</html>