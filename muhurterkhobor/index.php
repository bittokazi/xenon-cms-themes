<?php xenon_add_header(); ?>

<div id="ticker">
<div class="head">
শিরোনাম : 
</div>
<div class="scroll">
<marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 3, 0);" scrollamount="3">
<?php
$resultslider = @mysql_query("SELECT * FROM frndzk_post WHERE tags LIKE'%headline%' ORDER by id desc LIMIT 0,15");
if ( @mysql_num_rows($resultslider) > 0 ) {
while($generalsli = @mysql_fetch_array($resultslider)) {
echo'<a href="'.@home_url().'/'.xenon_link_post().@$generalsli['shortname'].'">'.@$generalsli['post'].'</a> * '; 
}
}
 ?>
</marquee>
</div>
</div>
<div id="block1st">
<?php show_bdwave_widget_block1(); ?>
</div>
<div id="block2">
<?php show_bdwave_widget(); ?>
</div>
</div>

<?php xenon_add_footer(); ?>