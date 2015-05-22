<?php xenon_add_header(); ?>
    
    <div id="templatemo_main">
    	<div id="content" class="float_l">
		<?php $hyoi=1;
if(is_category()) { echo 'Cetegory Name : '. category_title(); }
elseif(is_tags()) { echo 'Posts under Tag : '. xenon_tag_title(); }
elseif(is_search()) { echo 'Search result for : '. xenon_search_title(); }
elseif(is_author()) { echo 'Author Name : '. author_title(); }
elseif(is_404()) { echo'Not Found - 404'; } ?><br><br>
		<?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo '<div class="post">
            	<h2>'.the_title().'</h2>'; 
if($hyoi==4) { $hyoi=1; }
echo'<div class="post_image"><img height="200px" width="600px" src="'.get_image_xenon(the_content(),'/images/blog/0'.$hyoi.'.jpg').'" alt="Image 01" /><span class="date">'.the_date().'</span></div><p>';


if(is_page()) { echo the_content(); } elseif(is_post()) { echo the_content(); } else { echo the_summery(); }

echo'</p><a href="'.content_link().'">Continue reading...</a></div>'; $hyoi++; end_post(); 
} echo error_404();
?>
         	<div class="pagging">
                <ul>
                    <?php post_navigation(); ?>
                </ul>
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