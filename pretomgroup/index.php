<?php xenon_add_header(); ?>

	<div id="slider" oncontextmenu="//return false;" class="nivoSlider">
			        <img src="<?php echo theme_location(); ?>/images/slider1.jpg" alt="Dragonfly 1" rel="<?php echo theme_location(); ?>/images/slider1.jpg" />
                    <img src="<?php echo theme_location(); ?>/images/slider2.jpg" alt="Dragonfly 1" rel="<?php echo theme_location(); ?>/images/slider2.jpg" />
                    <img src="<?php echo theme_location(); ?>/images/slider3.jpg" alt="Dragonfly 1" rel="<?php echo theme_location(); ?>/images/slider3.jpg" />
                    <img src="<?php echo theme_location(); ?>/images/slider4.jpg" alt="Dragonfly 1" rel="<?php echo theme_location(); ?>/images/slider4.jpg" />
                    <img src="<?php echo theme_location(); ?>/images/slider5.jpg" alt="Dragonfly 1" rel="<?php echo theme_location(); ?>/images/slider5.jpg" />
					<img src="<?php echo theme_location(); ?>/images/slider6.jpg" alt="Dragonfly 1" rel="<?php echo theme_location(); ?>/images/slider6.jpg" />
					<img src="<?php echo theme_location(); ?>/images/slider7.jpg" alt="Dragonfly 1" rel="<?php echo theme_location(); ?>/images/slider7.jpg" />
					<img src="<?php echo theme_location(); ?>/images/slider8.jpg" alt="Dragonfly 1" rel="<?php echo theme_location(); ?>/images/slider8.jpg" />
					<img src="<?php echo theme_location(); ?>/images/slider9.jpg" alt="Dragonfly 1" rel="<?php echo theme_location(); ?>/images/slider9.jpg" />
	</div>
	<script type="text/javascript" src="<?php echo theme_location(); ?>/js/jquery-1.6.1.min.js"></script>
            <script type="text/javascript" src="<?php echo theme_location(); ?>/js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider({
                    controlNavThumbs:true,
					controlNavThumbsFromRel:true,
					directionNav:false, // Next and Prev
					keyboardNav:true, // Use left and right arrows
					pauseOnHover:true // Stop animation while hovering
                });
            });
            </script>
	
	<div id="content">
		<div id="first-block">
		<h2 class="head2">HEAD OFFICE:</h2>
		<p class="desc">
		A-91, BSCIC, I/A, SHASHANGAON, FATULLAH<br>
		NARAYANGANJ, BANGLADESH<br>
		PHONE: +88 02 7672487<br>
		+88 02 7670217, +88 02 7672648<br>
		E-MAIL:
		</p>
		</div>
		<div id="second-block">
		<h2 class="head2">FACTORY:</h2>
		<p class="desc">
		A-91, BSCIC, I/A, SHASHANGAON, FATULLAH<br>
		NARAYANGANJ, BANGLADESH<br>
		PHONE: +88 02 7672487<br>
		+88 02 7670217, +88 02 7672648<br>
		E-MAIL:
		</p>
		</div>
		<div id="third-block">
		<h2 class="head2">QUICK LINKS:</h2>
		<p class="desc">
		<a href="http://pretomgroup.net/page/our-clients">Our Clients</a><br>
		<a href="http://pretomgroup.net/page/company-profile">Company Profile</a><br>
		<a href="http://pretomgroup.net/page/top-management">Top Management</a><br>
		<a href="http://pretomgroup.net/page/message-from-md">Message From MD</a><br>
		<a href="http://email.pretomgroup.net/" target="_blank">Webmail</a>
		</p>
		</div>
	</div>

<?php xenon_add_footer(); ?>