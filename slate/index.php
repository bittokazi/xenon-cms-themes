<?php xenon_add_header(); ?>
    <div id="templatemo_slider">
   
        <div id="slider" class="nivoSlider">
            <a href="<?php include('content/slider_link1.txt'); ?>"><img src="<?php echo theme_location(); ?>/images/slider/01.jpg" alt="Slider 01" title="<?php include('content/slider_text1.txt'); ?>" />
            <a href="<?php include('content/slider_link2.txt'); ?>"><img src="<?php echo theme_location(); ?>/images/slider/02.jpg" alt="Slider 02" title="<?php include('content/slider_text2.txt'); ?>" /></a>
            <a href="<?php include('content/slider_link3.txt'); ?>"><img src="<?php echo theme_location(); ?>/images/slider/03.jpg" alt="Slider 03" title="<?php include('content/slider_text3.txt'); ?>"/>
            <a href="<?php include('content/slider_link4.txt'); ?>"><img src="<?php echo theme_location(); ?>/images/slider/04.jpg" alt="Slider 04" title="<?php include('content/slider_text4.txt'); ?>" />
        </div>
        <div id="htmlcaption" class="nivo-html-caption">
            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
        </div>
        <script type="text/javascript" src="<?php echo theme_location(); ?>/js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="<?php echo theme_location(); ?>/js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
			$('#slider').nivoSlider({
				effect:'random', // Specify sets like: 'fold,fade,sliceDown'
				slices:15, // For slice animations
				boxCols: 8, // For box animations
				boxRows: 4, // For box animations
				animSpeed:500, // Slide transition speed
				pauseTime:3000, // How long each slide will show
				startSlide:0, // Set starting Slide (0 index)
				directionNav:true, // Next and Prev navigation
				directionNavHide:false, // Only show on hover
				controlNav:false, // 1,2,3... navigation
				controlNavThumbs:false, // Use thumbnails for Control Nav
				controlNavThumbsFromRel:false, // Use image rel for thumbs
				controlNavThumbsSearch: '.jpg', // Replace this with...
				controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
				keyboardNav:true, // Use left and right arrows
				pauseOnHover:true, // Stop animation while hovering
				manualAdvance:false, // Force manual transitions
				captionOpacity:0.8, // Universal caption opacity
				prevText: 'Prev', // Prev directionNav text
				nextText: 'Next', // Next directionNav text
				beforeChange: function(){}, // Triggers before a slide transition
				afterChange: function(){}, // Triggers after a slide transition
				slideshowEnd: function(){}, // Triggers after all slides have been shown
				lastSlide: function(){}, // Triggers when last slide is shown
				afterLoad: function(){} // Triggers when slider has loaded
			});
		});
        </script>   
    </div>
    
    <div id="templatemo_main">
    	<div class="col one_third">
        	<h2><?php include('content/index_block_title1.txt'); ?></h2>
            <?php include('content/index_block_content1.txt'); ?>
        </div>
        <div class="col one_third">
        	<h2><?php include('content/index_block_title2.txt'); ?></h2>
            <?php include('content/index_block_content2.txt'); ?>	
        </div>
        <div class="col one_third last_box">
        	<h2><?php include('content/index_block_title3.txt'); ?></h2>
            <img height="120px" width="290px" src="<?php echo theme_location(); ?>/images/templatemo_image_01.jpg" alt="Image 01" class="image_frame" />
            <?php include('content/index_block_content3.txt'); ?>
        </div>
        
        <div class="cleaner hr_divider"></div>
        
    	<div class="col one_fourth">
        	<h3><?php include('content/index_block2_title1.txt'); ?></h3>
            <img height="120px" width="210px" src="<?php echo theme_location(); ?>/images/templatemo_image_05.jpg" alt="Image 01" class="image_frame" />
        	<?php include('content/index_block2_content1.txt'); ?>
		</div>
        <div class="col one_fourth">
        	<h3><?php include('content/index_block2_title2.txt'); ?></h3>
            <img height="120px" width="210px" src="<?php echo theme_location(); ?>/images/templatemo_image_02.jpg" alt="Image 02" class="image_frame" />
        	<?php include('content/index_block2_content2.txt'); ?>
        </div>
        <div class="col one_fourth">
        	<h3><?php include('content/index_block2_title3.txt'); ?></h3>
            <img height="120px" width="210px" src="<?php echo theme_location(); ?>/images/templatemo_image_03.jpg" alt="Image 03" class="image_frame" />
        	<?php include('content/index_block2_content3.txt'); ?>
        </div>
        <div class="col one_fourth last_box">
        	<h3><?php include('content/index_block2_title4.txt'); ?></h3>
            <img height="120px" width="210px" src="<?php echo theme_location(); ?>/images/templatemo_image_04.jpg" alt="Image 04" class="image_frame" />
        	<?php include('content/index_block2_content4.txt'); ?> 
        </div>
        <div class="cleaner"></div>
    </div>
    
<?php xenon_add_footer(); ?>