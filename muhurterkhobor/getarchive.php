<?php
if(isset($_GET['url']) && $_GET['url']!="") {
$bwcat1=@defence_sql_injection($_GET['url']);
$f1=@defence_sql_injection($_GET['f']);
$resultsliders1 = @mysql_query("SELECT * FROM frndzk_post WHERE date='$bwcat1' ORDER by id desc LIMIT $f1,9");
if ( @mysql_num_rows($resultsliders1) > 0 ) {
while($generalslis1 = @mysql_fetch_array($resultsliders1)) {



echo '<div style="padding:5px; float:left; height:510px; width:190px; overflow:hidden; margin-top:5px; margin-left:5px; border-style:solid;
border-width:1px;
border-color:#CFE4E7;"><div class="section_box2" align="justify"><div class="post_title"><h3><a href="'.home_url().'/post/'.$generalslis1['shortname'].'">'.$generalslis1['post'].'</a></h3></div><p style="margin-left:5px;"><img src="'.get_image_bdwave($generalslis1['postcontent']).'" height="160px" width="180px"></p><div class="text_area">'; echo $generalslis1['comment']; echo'<div class="publish_date"> তারিখ: ';
$bdwsrp=str_replace('1','১',$generalslis1['date']);
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
$bdwsrp=str_replace('1','১',$generalslis1['time']);
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
echo' বিভাগ: <a href="'.home_url().'/category/'.$generalslis1['category'].'">'.$generalslis1['category'].'</a>';  echo'</div></div></div><br><br></div>';



}
}
else {
echo'no';
}
}
else {
echo'FUCK YOU ASSHOLES';
}
?>