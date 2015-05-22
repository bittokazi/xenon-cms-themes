<?php xenon_add_header(); ?>

<?php
function lolshare() {
$b=@defence_sql_injection(@$_GET['url']);
$resultsliders = @mysql_query("SELECT * FROM frndzk_post WHERE shortname='$b'");
if ( @mysql_num_rows($resultsliders) > 0 ) {
while($generalslis = @mysql_fetch_array($resultsliders)) {
return $generalslis['id'];
}
}
}
?>

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
echo'  বিভাগ: <a href="'.the_category_link().'">'.the_category().'</a>';  echo'</div></div></div>'; 
			

echo '<br><br>
<div style="float:left; width: 60px;"><iframe src="//www.facebook.com/plugins/like.php?href='.home_url().'/share/'.lolshare().'&amp;width&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:90px;" allowTransparency="true"></iframe></div>

<div style="float:left;">
<a class="twitter-share-button"
   href="'.home_url().'/share/'.lolshare().'"
  data-url="'.home_url().'/share/'.lolshare().'"
  data-via="muhurterkhobor.com"
  data-text="'.the_title().'"
  data-related="'.the_title().'"
  data-count="vertical">
Tweet
</a>
<script type="text/javascript">
window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
</script>
</div>

<div style="float:left; margin-left: 13px;">
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60" data-href="'.home_url().'/share/'.lolshare().'"></div>
</div>


<div style="float:left; margin-left: 8px;
margin-top: 38px;">
<a href="//www.pinterest.com/pin/create/button/?url='.home_url().'/share/'.lolshare().'&media='.home_url().''.get_image_bdwave(the_content()).'&description='.the_title().'" data-pin-do="buttonPin" data-pin-config="above" data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a>
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
</div>


<div style="float:left; margin-left: 10px; margin-top: -5px;">
<span class=\'st_linkedin_vcount\' displayText=\'LinkedIn\'></span>
</div>
<div style="float:left; width: 60px; margin-top: -5px;"><span class=\'st_sharethis_vcount\' displayText=\'ShareThis\'></span></div>

';


end_post(); } echo error_404(); ?>
                        <noscript>
			<?php xenon_comment_template(); ?><br><h3>মন্তব্য সমুহঃ</h3><?php xenon_comment_list(); ?></noscript></div>
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