<?php xenon_add_header(); ?>

<div id="block3">
<div class="cb">
<div class="title"><h1><?php
if(is_category()) { echo 'বিভাগ : '. category_title(); }
elseif(is_tags()) { echo 'Posts under Tag : '. xenon_tag_title(); }
elseif(is_search()) { echo 'Search result for : '. xenon_search_title(); }
elseif(is_author()) { echo 'Author Name : '. author_title(); }
elseif(is_404()) { echo'Not Found - 404'; } ?></h1></div>
		<?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo '<div style="padding:5px; float:left; height:510px; width:190px; overflow:hidden; margin-top:5px; margin-left:5px; border-style:solid;
border-width:1px;
border-color:#CFE4E7;"><div class="section_box2" align="justify"><div class="post_title"><h3><a href="'.content_link().'">'.the_title().'</a></h3></div><p style="margin-left:5px;"><img src="'.get_image_bdwave(the_content()).'" height="160px" width="180px"></p><div class="text_area">'; if(is_page()) { echo the_content(); } elseif(is_post()) { echo the_content(); } else { echo the_summery(); } echo'<div class="publish_date"> তারিখ: ';
$bdwsrp=str_replace('1','১',the_date());
$bdwsrp=str_replace('2','২',$bdwsrp);
$bdwsrp=str_replace('3','৩',$bdwsrp);
$bdwsrp=str_replace('4','৪',$bdwsrp);
$bdwsrp=str_replace('5','৫',$bdwsrp);
$bdwsrp=str_replace('6','৬',$bdwsrp);
$bdwsrp=str_replace('7','৭',$bdwsrp);
$bdwsrp=str_replace('8','৮',$bdwsrp);
$bdwsrp=str_replace('9','৯',$bdwsrp);
$bdwsrp=str_replace('0','০',$bdwsrp);
echo $bdwsrp;
echo' সময়: ';
$bdwsrp=str_replace('1','১',the_time());
$bdwsrp=str_replace('2','২',$bdwsrp);
$bdwsrp=str_replace('3','৩',$bdwsrp);
$bdwsrp=str_replace('4','৪',$bdwsrp);
$bdwsrp=str_replace('5','৫',$bdwsrp);
$bdwsrp=str_replace('6','৬',$bdwsrp);
$bdwsrp=str_replace('7','৭',$bdwsrp);
$bdwsrp=str_replace('8','৮',$bdwsrp);
$bdwsrp=str_replace('9','৯',$bdwsrp);
$bdwsrp=str_replace('0','০',$bdwsrp);
echo $bdwsrp;
echo' বিভাগ: <a href="'.the_category_link().'">'.the_category().'</a>';  echo'</div></div></div><br><br></div>'; end_post(); } ?>
		       <div style="clear:both;"></div><?php post_navigation(); ?>
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