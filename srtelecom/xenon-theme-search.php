<?php xenon_add_header(); ?>
    
    <div id="templatemo_main_top_sb"></div>
    <div id="templatemo_main_sb">
    	
        <div id="content">
		
		
		
		<?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo'
			<div style="float:left; clear:both; width:580px;" class="content_box">
            	<h2><a style="font-size: 25px; line-height:120%; color:white; text-decoration:none;" href="'.content_link().'">'.the_title().'</a></h2>
                <div class="image_wrapper image_fl"><span></span><img src="'.get_image_bdwave(the_content()).'" height="160px" width="180px" alt="S R TELECOM"></div>
                <p style="float:left; width: 350px;" align="justify">Posted on: '.the_date().' | '.the_time().'<br>Category: <a style="color:white; " href="'.the_category_link().'">'.the_category().'</a><br><em>';
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
 echo $summerymk;
				
				echo'</em></p></div>';
		  
		  end_post(); } ?>
		  
		  <div style="clear:both; float:left;" class="fggf"></div><div style="clear:both; float:left;" class="fggf"><?php post_navigation(); ?></div>
		  
		  
		  
		  
		  
		  
		  
		  
            </div>
            
            <div id="sidebar">
<?php include('xenon-sidebar.php'); ?>
            </div>
            <div class="cleaner"></div>
        
    </div> <!-- end of templatemo main -->
<?php xenon_add_footer(); ?>