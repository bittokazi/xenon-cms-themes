<?php xenon_add_header(); ?>
    
    <div id="templatemo_main_top_sb"></div>
    <div id="templatemo_main_sb">
    	
        <div id="content">
			
			<?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo'
			<div style="float:left; clear:both; width:580px;" class="content_box">
            	<h2><a style="font-size: 25px; line-height:120%; color:white; text-decoration:none;" href="'.content_link().'">'.the_title().'</a></h2>
                
                <p style="float:left; width: 350px;" align="justify"><em><p style="clear:both;">';
				
				echo the_content();
				
				echo'</p></em></p></div>';
		  
		  end_post(); } ?>
		  
		  <?php xenon_comment_template(); ?>
		  <div style="clear:both;"></div>
		  <h2><br>Comments</h2>
	   <?php xenon_comment_list(); ?>
            
            </div>
            
            <div id="sidebar">
<?php include('xenon-sidebar.php'); ?>
            </div>
            <div class="cleaner"></div>
        
    </div> <!-- end of templatemo main -->
<?php xenon_add_footer(); ?>