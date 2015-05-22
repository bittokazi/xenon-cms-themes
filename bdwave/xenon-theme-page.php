<?php xenon_add_header(); ?>
<div id="block3">
<div class="cb"><?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo '<div class="title"><a href="'.content_link().'">'.the_title().'</a></div>'; echo the_content();  end_post(); } echo error_404(); ?>
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