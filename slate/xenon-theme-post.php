<?php xenon_add_header(); ?>
    
    <div id="templatemo_main">
    	<div id="content" class="float_l">
		<?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo '<div class="post">
            	<h2>'.the_title().'</h2>'; 
echo'<div class="post_image"><img height="200px" width="600px" src="'.get_image_xenon(the_content(),'/images/blog/01.jpg').'" alt="Image 01" /><span class="date">'.the_date().'</span></div><p>';
$bittokjjjjj_ohhneeiiiygggee=preg_replace('/<img(.*)>/i','',the_content(),1);

if(is_page()) { echo $bittokjjjjj_ohhneeiiiygggee; } elseif(is_post()) { echo $bittokjjjjj_ohhneeiiiygggee; } else { echo the_summery(); }

echo'<br><h6>Author name: <a style="text-decoration:none;" href="'.author_link().'">'.the_user().'</a> date: '.the_date().' time: '.the_time().' Category: <a style="text-decoration:none;" href="'.the_category_link().'">'.the_category().'</a></h6><br>';

echo '<br>'.xenon_tags();

echo'<br></p></div>';  end_post(); 
} echo error_404();
?>
            <h3>Comments</h3>
                        
            <div id="comment_section">
			<ol class="comments first_level">
<?php xenon_comment_list(array('before_comment' => '<li><div class="comment_box commentbox2">',
'after_comment' => '<div class="cleaner"></div></div></li>',
'before_name' => '',
'after_name' => '',
'before_website' => '',
'after_website' => '',
'before_msg' => '',
'after_msg' => ''
),'/images/avator.png'); ?>    
           </ol>     
            </div>
            
            <div class="cleaner h20"></div>
            
            <div id="comment_form">
                <h3>Leave your comment</h3>
                
<?php xenon_comment_template(); ?>
            
            </div>
            
		</div>
        <div id="sidebar" class="float_r">
        	<?php
            show_xenon_widget('side-bar',
array('before_widget' => '<div class="sb_box">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
'before_content' => '<ul class="sb_list">',
'after_content' => '</ul><br><br>'
)); ?>
        </div>
        <div class="cleaner"></div>
    </div>
    
 <?php xenon_add_footer(); ?>