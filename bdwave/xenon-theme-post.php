<?php xenon_add_header(); ?>
<div id="block3">
<div class="cb"><?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo '<div class="section_box2" align="justify"><div class="post_title"><h1><a href="'.content_link().'">'.the_title().'</a></h1></div><div class="text_area">'; if(is_page()) { echo the_content(); } elseif(is_post()) { echo the_content(); } else { echo the_summery(); } echo'<div class="publish_date"> তারিখ : ';
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
echo' সময় : ';
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
echo'  বিভাগ: <a href="'.the_category_link().'">'.the_category().'</a>';  echo'</div></div></div>'; end_post(); } echo error_404(); ?>
			<br>
<?php
echo "</br><div class=\"addthis_toolbox addthis_default_style \">
<a class=\"addthis_button_preferred_1\"></a>
<a class=\"addthis_button_preferred_2\"></a>
<a class=\"addthis_button_preferred3\"></a>
<a class=\"addthis_button_preferred_4\"></a>
<a class=\"addthis_button_compact\"></a>
<a class=\"addthis_counter addthis_bubble_style\"></a>
</div>
<script type=\"text/javascript\" src=\"http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f6706795be61dee\"></script>";
?>
                        <br>
			<?php xenon_comment_template(); ?><br><h3>মন্তব্য সমুহঃ</h3><?php xenon_comment_list(); ?></div>
<div class="sb">
<?php
            show_xenon_widget('side-bar',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="wt">',
'after_title' => '</div>',
'before_content' => '<div class="wb">',
'after_content' => '</div><br><br>'
)); ?>
</div>
</div>
</div>
<?php xenon_add_footer(); ?>