<?php xenon_add_header(); ?>
    
    <div id="tooplate_middle">
    	<div id="slider">
            <a href="#"><img src="<?php echo theme_location(); ?>/images/slideshow/05.jpg" alt="" title="<?php @include("content/st5.txt"); ?>" /></a>
            <a href="#"><img src="<?php echo theme_location(); ?>/images/slideshow/02.jpg" alt="" title="<?php @include("content/st4.txt"); ?>" /></a>
            <a href="#"><img src="<?php echo theme_location(); ?>/images/slideshow/03.jpg" alt="" title="<?php @include("content/st3.txt"); ?>" /></a>
            <a href="#"><img src="<?php echo theme_location(); ?>/images/slideshow/04.jpg" alt="" title="<?php @include("content/st2.txt"); ?>" /></a>
            <a href="#"><img src="<?php echo theme_location(); ?>/images/slideshow/01.jpg" alt="" title="<?php @include("content/st1.txt"); ?>" /></a>
        </div>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_allw300">
        	<h2><?php @include("content/ibt1.txt"); ?></h2>
            <p><?php @include("content/ibc1.txt"); ?></p>
            <div class="cleaner"></div>
        </div>
        
        <div class="col_allw300">
            <h2><?php @include("content/ibt2.txt"); ?></h2>
            <p><?php @include("content/ibc2.txt"); ?></p>
            <div class="cleaner"></div>
        </div>
        
	<div class="col_allw300 col_last">
        <h2><?php @include("content/ibt3.txt"); ?></h2>
            <p><?php @include("content/ibc3.txt"); ?></p>
            <div class="cleaner"></div>
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->

<?php xenon_add_footer(); ?>