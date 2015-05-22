<?php xenon_add_header(); ?>
    
    
	<?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo '<div id="tooplate_middle_subpage"><h2 style="font-size: 50px;
margin-top: 40px;">'.the_title().'</h2></div>'; 
	echo '<div id="tooplate_main">'.the_content().'<div class="cleaner"></div>
    </div> <!-- end of main -->';  end_post(); } echo error_404();  ?>


<?php xenon_add_footer(); ?>