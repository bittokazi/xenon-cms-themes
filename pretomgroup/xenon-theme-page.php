<?php xenon_add_header(); ?>
	
	<div id="content">
		<?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo '<div style="float:left; color:white;"><h1 style="font-size:25px;">'.the_title().'</h1><div style="clear:both;"></div>'; echo '<div style="float:left; margin-top:20px;">'.the_content().'</div>';  end_post(); } echo error_404();  ?>
	</div>

<?php xenon_add_footer(); ?>