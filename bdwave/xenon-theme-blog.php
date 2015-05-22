<?php xenon_add_header(); ?>

<div id="block3">
<div class="cb">
<div class="title"><?php
if(is_category()) { echo 'Cetegory Name : '. category_title(); }
elseif(is_tags()) { echo 'Posts under Tag : '. xenon_tag_title(); }
elseif(is_search()) { echo 'Search result for : '. xenon_search_title(); }
elseif(is_author()) { echo 'Author Name : '. author_title(); }
elseif(is_404()) { echo'Not Found - 404'; } ?></div>
		<?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo '<div class="section_box2" align="justify"><div class="post_title"><a href="'.content_link().'">'.the_title().'</a></div><div class="text_area">'; if(is_page()) { echo the_content(); } elseif(is_post()) { echo the_content(); } else { echo the_summery(); } echo'<div class="publish_date">Posted by: <a href="'.author_link().'">'.the_user().'</a> date: '.the_date().' time: '.the_time().' Category: <a href="'.the_category_link().'">'.the_category().'</a>';  echo'</div></div></div>'; end_post(); } ?>
			<br>
			<?php xenon_comment_template(); ?></div>
<div class="sb">
<?php
            show_xenon_widget('side-bar',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="wt">',
'after_title' => '</div>',
'before_content' => '',
'after_content' => '<br><br>'
)); ?>
</div>
</div>
</div>

<?php xenon_add_footer(); ?>