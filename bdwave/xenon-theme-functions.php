<?php
register_xenon_widget('side-bar');
register_xenon_widget('footer-bar-left');
register_xenon_widget('footer-bar-middle');
register_xenon_widget('footer-bar-right');
register_xenon_menu('upper-menu');
function english_to_bangla_number($n) {
$bdwsrp=str_replace('1','১',$n);
$bdwsrp=str_replace('2','২',$bdwsrp);
$bdwsrp=str_replace('3','৩',$bdwsrp);
$bdwsrp=str_replace('4','৪',$bdwsrp);
$bdwsrp=str_replace('5','৫',$bdwsrp);
$bdwsrp=str_replace('6','৬',$bdwsrp);
$bdwsrp=str_replace('7','৭',$bdwsrp);
$bdwsrp=str_replace('8','৮',$bdwsrp);
$bdwsrp=str_replace('9','৯',$bdwsrp);
$bdwsrp=str_replace('0','০',$bdwsrp);
return $bdwsrp;
}
include('poll.php');
include('quiz.php');
function show_visitor_count_bdwave() {
$result1c = @mysql_query("SELECT * FROM frndzk_title WHERE title='bdwave_visitor_counter'");
if ( @mysql_num_rows($result1c) > 0 ) {
while($general1c = @mysql_fetch_array($result1c)) {
return $general1c['tagline'];
}
}
}
function bdwave_admin() {  
    add_menu('bdwave-admin.php', 'bdwave-admin', 'themepage','1');  
}
xenon_core('xenon_add_menu', 'bdwave_admin');
if (isset($_GET['action']) && isset($_GET['registertheme']) && $_GET['action']=="true" && $_GET['registertheme']=="bdwave") {
$result = @mysql_query("SELECT * FROM bdwave_block");
if ( @mysql_num_rows($result) < 1 ) {
$query="CREATE TABLE bdwave_block (id int(20) NOT NULL auto_increment,block text(1000) NOT NULL,serial int(20) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
mysql_query($query);
$query="CREATE TABLE bdwave_menu (id int(20) NOT NULL auto_increment,name text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,block text(1000) NOT NULL,serial int(20) NOT NULL,func text(1000) NOT NULL,content text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
mysql_query($query);
}
}
if (isset($_GET['action']) && isset($_GET['registertheme']) && $_GET['action']=="true" && $_GET['registertheme']=="bdwave") {
$result = @mysql_query("SELECT * FROM bdwave_quiz");
if ( @mysql_num_rows($result) < 1 ) {
$query="CREATE TABLE bdwave_quiz (id int(20) NOT NULL auto_increment,name text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,answer text(10000) CHARACTER SET utf8 COLLATE utf8_general_ci,date text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
mysql_query($query);
$query="CREATE TABLE bdwave_quizc (id int(20) NOT NULL auto_increment,quiz text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,name text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,answer text(10000) CHARACTER SET utf8 COLLATE utf8_general_ci,details text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
mysql_query($query);
$query="CREATE TABLE bdwave_quizw (id int(20) NOT NULL auto_increment,name text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,winner text(10000) CHARACTER SET utf8 COLLATE utf8_general_ci,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
mysql_query($query);

$query="CREATE TABLE bdwave_poll (id int(20) NOT NULL auto_increment,name text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,yes text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,no text(10000) CHARACTER SET utf8 COLLATE utf8_general_ci,nothing text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
mysql_query($query);
}
}
if (isset($_GET['action']) && isset($_GET['registertheme']) && $_GET['action']=="true" && $_GET['registertheme']=="bdwave") {
$result = @mysql_query("SELECT * FROM bdwave_counter");
if ( @mysql_num_rows($result) < 1 ) {
$query="CREATE TABLE bdwave_counter (id int(20) NOT NULL auto_increment,post text(1000) CHARACTER SET utf8 COLLATE utf8_general_ci,count text(10000) CHARACTER SET utf8 COLLATE utf8_general_ci,date text(100) CHARACTER SET utf8 COLLATE utf8_general_ci,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";
mysql_query($query);
}
}
if (isset($_GET['action']) && isset($_GET['registertheme']) && $_GET['action']=="true" && $_GET['registertheme']=="bdwave") {
$result = @mysql_query("SELECT * FROM frndzk_title WHERE title='bdwave_visitor_counter'");
if ( @mysql_num_rows($result) == 0 ) {
$query="INSERT INTO frndzk_title VALUES ('','bdwave_visitor_counter','0')";
mysql_query($query);
}
}
function header_add_upload() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=header_add" method="post"
enctype="multipart/form-data">
<label for="file">Select a theme(allowed extentions: .zip file only) :</label>
<input type="file" name="fileq" id="file" />
<select name="h_add"><option value="headeradd">Header add</option><option value="headeraddl">Logo Left</option> <option value="headeraddr">Logo Right</option><option value="bbfb2">Big Banner for Block 2</option></select>
<br />
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function add_bdwave_block() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_block" method="post">
<input type="text" name="blockname">
<br />
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function upload_header_media($ii) {
$headerlocadd=$_POST['h_add'];
$name=genRandomStringmu();
$_FILES['fileq']['name']=$ii;
function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
$filename = stripslashes($_FILES['fileq']['name']);
 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		echo $extension.'/'.$ii;
if ($extension == "bmp" || $extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif")
  {
    if ($_FILES["fileq"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["fileq"]["error"] . "<br />";
    }
  else
    {
	echo'a';
	move_uploaded_file($_FILES["fileq"]["tmp_name"],
      "../xenon-themes/".current_theme_name()."/upload/bdwave_header_add_".$name.'.'.$extension);
	  $url='bdwave_header_add_'.$name.'.'.$extension;
	  if (file_exists("../xenon-themes/".current_theme_name()."/upload/bdwave_header_add_".$name.'.'.$extension))
      {
	  $result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
if  ($headerlocadd=="bbfb2") {
          $query="INSERT INTO bdwave_menu VALUES ('','$url','2','$serial','bbfb2','$url')";
@mysql_query($query);
} else {
	  $query="INSERT INTO bdwave_menu VALUES ('','$headerlocadd','header','$serial','headeradd','$url')";
@mysql_query($query);
}
echo $_FILES['file']['name'].' was successfully uploaded';
	}
  }
    }
else
  {
  echo "Invalid file extention";
  }
  
}
//header adds
//header add get
function get_addvertise_bdwave() {
$result = @mysql_query("SELECT * FROM bdwave_menu WHERE name='headeradd' AND block='header'");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
echo '<div class="first"><img src="'.home_url().'/xenon-themes/'.current_theme_name().'/upload/'.$general['content'].'"></div>';
}
}
}
function get_addvertise_bdwave_left() {
$result = @mysql_query("SELECT * FROM bdwave_menu WHERE name='headeraddl' AND block='header'");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
echo '<p style="position:absolute; float:left; margin-top:-5px; margin-left:420px;"><img src="'.home_url().'/xenon-themes/'.current_theme_name().'/upload/'.$general['content'].'" height="90px" width="260px" ></p>';
}
}
}
function get_addvertise_bdwave_right() {
$result = @mysql_query("SELECT * FROM bdwave_menu WHERE name='headeraddr' AND block='header'");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
echo '<p style="position:relative; float:right; margin-top:-5px;"><img src="'.home_url().'/xenon-themes/'.current_theme_name().'/upload/'.$general['content'].'" height="90px" width="260px" ></p>';
}
}
}
//header add get finish
//category post
function bdwave_category_post() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_category_post" method="post">
<input type="text" name="name"><br>
<input type="text" name="category"><br>
<input type="hidden" name="type" value="category_post">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_category_post_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//category post finish
//post slider
function bdwave_post_slider() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_7_tabs" method="post">
<input type="text" name="name"><br>
<input type="text" name="category"><br>
<input type="hidden" name="type" value="post_slider">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_post_slider_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//post slider finish
//show front page widget
function show_bdwave_widget() {
$result = @mysql_query("SELECT * FROM bdwave_menu WHERE block='2' ORDER by serial ASC");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
if ($general['func']=="category_post") {
echo'<div class="w2">
<div class="h2"><a href="'.home_url().'/'.xenon_link_category().$general['content'].'">'.$general['name'].'</a></div>
<div class="b2"><ul>';
$cat=$general['content'];
$cpwi=1;
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat'  ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
if ( $cpwi==1 ) {
echo '<img src="'.get_image_bdwave($general1['postcontent']).'" title="image" height="100px" width="150px">  ';
}
echo'<li><a href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></li>';
$cpwi=$cpwi+1;
}}
echo'</ul><br><br></div>
</div>';
}



//category post big
elseif ($general['func']=="cat_post_big") {
echo'<div class="wsa2">
<div class="hsa2"><a href="'.home_url().'/'.xenon_link_category().$general['content'].'">'.$general['name'].'</a></div>
<div style=""><ul>';
$cat=$general['content'];
$cpwi=1;
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat'  ORDER by id desc LIMIT 0,5");
if ( @mysql_num_rows($result1) > 0 ) {
echo'<div style="float:left;">';
while($general1 = @mysql_fetch_array($result1)) {
echo '<div style="float:left; margin-left:0px;
width:400px;
overflow:hidden;
height:40px;
margin-top:5px;
border-style:solid;
border-width:1px;
border-color:#CFE4E7;">
<div style="float:left;"><img src="'.get_image_bdwave($general1['postcontent']).'" title="image" height="40px" width="40px"></div>
<div style="float:left; margin-left:20px; height:40px; width:300px;"><li><a href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></li></div>
</div>';
$cpwi=$cpwi+1;
} echo'</div>';}
echo'</ul><br><br></div>
</div>';
}





//post slider
elseif ($general['func']=="post_slider") {
echo'<div class="ws2">
<div class="hs2"><a href="'.home_url().'/'.xenon_link_category().$general['content'].'">'.$general['name'].'</a></div>';
echo'<div id="lofslidecontent'.$general['id'].'" class="lof-slidecontent">
<div class="preload"><div></div></div>
 <!-- MAIN CONTENT --> 
  <div class="lof-main-wapper">';
$cat=$general['content'];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat'  ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'   <div class="lof-main-item">
        		<img src="'.get_image_bdwave($general1['postcontent']).'" title="Newsflash 2" height="200" width="300">           
                 <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 2" href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></h3>

                '.$general1['comment'].'
             </div>
        </div>'; }}
            echo' </div>  
  <!-- END MAIN CONTENT --> 
    <!-- NAVIGATOR -->
	
  <div class="lof-navigator-outer">
  		<ul class="lof-navigator">';
	$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat'  ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'            <li>
            	<div>
                	<img src="'.get_image_bdwave($general1['postcontent']).'" />
                	<h3><a target="_parent" title="Newsflash 2" href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></h3>
                  	
                </div>    
            </li>';
}}
echo"        </ul>
  </div>
  </div>

<script type=\"text/javascript\">
	var _lofmain =  $('lofslidecontent".$general['id']."');
	var _lofscmain = _lofmain.getElement('.lof-main-wapper');
	var _lofnavigator = _lofmain.getElement('.lof-navigator-outer .lof-navigator');
	var object = new LofFlashContent( _lofscmain, 
									  _lofnavigator,
									  _lofmain.getElement('.lof-navigator-outer'),
									  { fxObject:{ transition:Fx.Transitions.Quad.easeInOut,  duration:800},
									 	 interval:8000,
							 			 direction :'hrleft' } );
	object.start( true, _lofmain.getElement('.preload') );
</script>
<!------------------------------------- END OF THE CONTENT ------------------------------------------------->
</div>";
}
//post slider show
//7 tabs show
elseif ($general['func']=="7_tabs") {
$tname=explode(',',$general['name']);
$cat=explode(',',$general['content']);
$it=1;
echo'<div class="ws2">
<div class="hs2">'.$tname[0].'</div>';
echo'<!--tab-->
    <div style="float:left; margin-left: 5px; margin-top: 5px; width: 470px; font: 0.85em solaimanlipi;">
        <ul class="tabs" persist="true">';
		while ( $it< 8 ) {
		echo '<li><a href="#" rel="view'.$general['id'].$it.'">'.$tname[$it].'</a></li>';
				$it=$it+1;
		}
		echo '</ul>
        <div class="tabcontentsdiv">';
		$it=0;
				while ( $it< 8 ) {
				$its=$it+1;
          echo'<div id="view'.$general['id'].$its.'" class="tabcontent">';
			echo'<div id="lofslidecontent'.$general['id'].$its.'" class="lof-slidecontent">
<div class="preload"><div></div></div>
 <!-- MAIN CONTENT --> 
  <div class="lof-main-wapper">';
$catss=$cat[$it];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$catss'  ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'   <div class="lof-main-item">
        		<img src="'.get_image_bdwave($general1['postcontent']).'" title="Newsflash 2" height="200" width="300">           
                 <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 2" href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></h3>

                '.$general1['comment'].'
             </div>
        </div>'; }}
            echo' </div>  
  <!-- END MAIN CONTENT --> 
    <!-- NAVIGATOR -->
	
  <div class="lof-navigator-outer">
  		<ul class="lof-navigator">';
	$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$catss'  ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'            <li>
            	<div>
                	<img src="'.get_image_bdwave($general1['postcontent']).'" />
                	<h3><a target="_parent" title="Newsflash 2" href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></h3>
                  	
                </div>    
            </li>';
}}
echo"        </ul>
  </div>
  </div>

<script type=\"text/javascript\">
	var _lofmain =  $('lofslidecontent".$general['id'].$it."');
	var _lofscmain = _lofmain.getElement('.lof-main-wapper');
	var _lofnavigator = _lofmain.getElement('.lof-navigator-outer .lof-navigator');
	var object = new LofFlashContent( _lofscmain, 
									  _lofnavigator,
									  _lofmain.getElement('.lof-navigator-outer'),
									  { fxObject:{ transition:Fx.Transitions.Quad.easeInOut,  duration:800},
									 	 interval:8000,
							 			 direction :'hrleft' } );
	object.start( true, _lofmain.getElement('.preload') );
</script>
<!------------------------------------- END OF THE CONTENT ------------------------------------------------->
                
            </div>";
		$it=$it+1;
		}
		echo'        </div>
    </div>

<!--tab finish-->
</div>';
}
//7tabs finish show
//3tabs show
elseif ($general['func']=="3_tabs") {
$tname=explode(',',$general['name']);
$cat=explode(',',$general['content']);
$it=1;
echo'<!--tab-->
    <div style="float:left; margin-left: 5px; margin-top: 5px; width: 470px; font: 0.85em solaimanlipi;">
        <ul class="tabs" persist="true">';
		while ( $it< 4 ) {
		echo '<li><a href="#" rel="view'.$general['id'].$it.'">'.$tname[$it].'</a></li>';
				$it=$it+1;
		}
		echo '</ul>
        <div class="tabcontentsdiv">';
		$it=0;
				while ( $it< 3 ) {
				$its=$it+1;
          echo'<div id="view'.$general['id'].$its.'" class="tabcontent"><ul>';
$catss=$cat[$it];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$catss'  ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'<li><a target="_parent" title="Newsflash 2" href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></li>'; }}
            echo' </ul></div>';
		$it=$it+1;
		}
		echo'        </div>
    </div>

<!--tab finish-->';
}
//3tabs finish show
//slider
elseif ($general['func']=="slider") {
echo"
<!--slider-->
			<div id=\"slider_container_1\">

				<div id=\"SliderName\">

					<a href=\"#1\">";
$resultslider = @mysql_query("SELECT * FROM frndzk_post WHERE tags LIKE'%slider%' ORDER by id desc LIMIT 0,6");
if ( @mysql_num_rows($resultslider) > 0 ) {
while($generalsli = @mysql_fetch_array($resultslider)) {
echo"<img src=\"".get_image_bdwave($generalsli['postcontent'])."\" title=\"Description from Image Title\" />";
}
}
					echo"<a href=\"#2\">
						<img src=\"".theme_location()."/img/2.jpg\" />
					</a>
					<img src=\"<?php echo theme_location(); ?>/img/3.jpg\" />
					<div class=\"SliderNameDescription\">
                                       <a href=\"#3\">Link</a></div>
					<img src=\"<?php echo theme_location(); ?>/img/4.jpg\" />
					<div class=\"SliderNameDescription\"><strong>Nullam nec velit vel leo tristique commodo.</strong><br />Nulla facilisi. Fusce lacus massa, ullamcorper sed hendrerit quis, venenatis eget tortor.</div>
					<img src=\"".theme_location()."/img/4.jpg\" />
				</div>
				<div class=\"c\"></div>
				<div id=\"SliderNameNavigation\"></div>
				<div class=\"c\"></div>

				<script type=\"text/javascript\">

					// we created new effect and called it 'demo01'. We use this name later.
					Sliderman.effect({name: 'demo01', cols: 10, rows: 5, delay: 10, fade: true, order: 'straight_stairs'});
					
					//$('#SliderName').contents().find('#img').css({'height' : '400px'});
					//$('#SliderName img').height(700);

					var demoSlider = Sliderman.slider({container: 'SliderName', width: 449, height: 265, effects: 'demo01',
					display: {
						pause: true, // slider pauses on mouseover
						autoplay: 3000, // 3 seconds slideshow
						always_show_loading: 200, // testing loading mode
						description: {background: '#ffffff', opacity: 0.5, height: 50, position: 'bottom'}, // image description box settings
						loading: {background: '#000000', opacity: 0.2, image: 'img/loading.gif'}, // loading box settings
						buttons: {opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}}, // Next/Prev buttons settings
						navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings
					}});

				</script>

				<div class=\"c\"></div>
			</div>
<!--slider finish-->
";
}
//slider finish
//single post
elseif ($general['func']=="single_post") {
echo'<div class="w1">
<div class="h1">'.$general['name'].'</div>
<div class="b1">';
$cat=$general['content'];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE shortname='$cat'");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'<li><a href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></li>';
echo'</p><img src="'.get_image_bdwave($general1['postcontent']).'" height="95px" width="95px"></p>';
echo'<p>'.$general1['comment'].'</p>';
}}
echo'<br><br></div>
</div>';
}
//single post finish
//big image post viewer
elseif ($general['func']=="bipv") {
echo'<div class="bipv2">
<div class="bipvhead2">'.$general['name'].'</div>';
$cat=$general['content'];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat' ORDER by id desc LIMIT 0,4");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'<div class="bipvbody2"></p><img src="'.get_image_bdwave($general1['postcontent']).'" height="70px" width="130px"></p>';
echo'<a href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></div>';
}}
echo'
</div>';
}
//big image post finish
//text widget
elseif ($general['func']=="text") {
echo'<div class="w1">
<div class="h1">'.$general['name'].'</div><div class="b1">';
echo $general['content'];
echo'<br><br></div>
</div>';
}
//text widget finish
//text big widget
elseif ($general['func']=="text_big") {
echo'<div class="ws2">
<div class="hs2">'.$general['name'].'</div>';
echo $general['content'];
echo'<br><br>
</div>';
}
//text big widget finish
//add widget
elseif ($general['func']=="add_w") {
echo'<div class="w1">
<div class="b1">';
echo $general['content'];
echo'<br><br></div>
</div>';
}
//add widget finish
//add youtube video
elseif ($general['func']=="yt") {
echo'<div class="ws2">
<div class="hs2">'.$general['name'].'</div>';
echo'<div style="margin-left:4px;"><iframe title="YouTube video player" class="youtube-player" type="text/html" width="466px" height="386px" src="'.$general['content'].'" frameborder="0" allowFullScreen></iframe></div>';
echo'</div>';
}
//add youtube video finish




//add sound cloud
elseif ($general['func']=="sc") {
echo'<div class="ws2">
<div class="hs2">'.$general['name'].'</div>';
echo'<div style="margin-left:4px;"><iframe width="466px" height="386px" scrolling="no" frameborder="no" src="'.$general['content'].'"></iframe></div>';
echo'</div>';
}
//add sound cloud finish







//add gallery
elseif ($general['func']=="gallery") {
echo '<div class="ws2">
<div class="hs2">'.$general['name'].'</div><style type="text/css">
/* Fades in the slideshow. Hides the initial animation on the li tag. Ooops!! */

@-webkit-keyframes fadeIn {
	0% {
		opacity: 0;
		
	}
	
	50% { 
		opacity: 0;
	}
	
	100% { 
		opacity: 1;
	}
}

#box {
	text-align: left;
	width: 436px;
        height: 251px;
	margin: 5px auto 0 auto;
	background: #000;
	overflow: hidden;
	border: 10px solid #000;
	-webkit-box-shadow: #131313 0px 2px 10px;
	-moz-box-shadow: #131313 0px 3px 10px;
	box-shadow: #131313 0px 3px 10px;	
	-webkit-animation-name: fadeIn; 
  	-webkit-animation-duration: 3s; 
  	-webkit-animation-iteration-count: 1;
  	-webkit-animation-delay: 0s;
}

ul#slider{
	-webkit-border-radius: 10px;
	margin: 0px;
	padding: 0px;
	list-style: none;
	position: relative;
	width: 436px;
	height: 204px;
	overflow: hidden;	
}

ul#thumb {
	overflow: none;
	margin: 0px 0px 0px 0px;
	padding: 0px;
	list-style: none;
	position: relative;
	background: #000;
	overflow: auto;
	width: 436px;
}

ul#thumb a {
	-webkit-transition: opacity .2s ease-in-out;
	border: 1px solid #979797;
	width: 35px;
	height: 35px;
	display: block;
	overflow: hidden;
	float: right;
	margin: 10px 0px 0px 10px;
	opacity: 0.75;
}

ul#thumb a:hover {
	opacity: 1;
} 

ul#slider li {	
	width: 436px;
	height: 210px;
	position: absolute;
	}
	
ul#slider li p {
	position: absolute;
	bottom: 0;
	left: 0;
	z-index: inherit;
	color: #fff;
	background: rgba(0, 0, 0, .5);
	width: 100%;
}

ul#slider li p span {
	line-height: 1.2em;
	padding: 10px;
	display: block;
}

/* Animation for the :target image. Slides the image in. */

@-webkit-keyframes moveTarget {
	0% {
		left:-700px;
		
	}
	
	100% { 
		left:0px;
	}
}


ul#slider li:target {
	-webkit-animation-name: moveTarget; 
	-webkit-animation-duration: .5s; 
	-webkit-animation-iteration-count: 1;
	top:0px;
	left: 0px;
	z-index: 10;
}

/*
Animation for the current image. Slides it out the frame and back to the starting position. 
Adds a lower z-index than the now current image.
*/

@-webkit-keyframes moveIt {
	0% {
		left:0px;
		
	}
	50% {
		left:700px;
		
	}
	100% { 
		left:-700px;
		z-index: 5;
	}
}

ul#slider li:not(:target) {
	-webkit-animation-name: moveIt; 
  	-webkit-animation-duration: 1.5s; 
  	-webkit-animation-iteration-count: 1;
	top:0px;
	left: 0px;
}

</style>

<div id="box">

<ul id="slider">';
$io=1;
$resultslider = @mysql_query("SELECT * FROM frndzk_post WHERE tags LIKE'%bdwavegallery%' ORDER by id asc LIMIT 0,7");
if ( @mysql_num_rows($resultslider) > 0 ) {
while($generalsli = @mysql_fetch_array($resultslider)) {
 echo'<li id="'.$io.'" >
		<img src="'.get_image_bdwave($generalsli['postcontent']).'" alt="grass-blades" width="436" height="210" />
		<p><span><a style="color:white;" href="'.home_url().'/'.xenon_link_post().$generalsli['shortname'].'">'.$generalsli['post'].'</a></span></p>
	</li>';
$io=$io+1;
}
}
echo'</ul>

<ul id="thumb">';
$io=1;
$resultslider = @mysql_query("SELECT * FROM frndzk_post WHERE tags LIKE'%bdwavegallery%' ORDER by id asc LIMIT 0,7");
if ( @mysql_num_rows($resultslider) > 0 ) {
while($generalsli = @mysql_fetch_array($resultslider)) {
echo'<li><a href="#'.$io.'"><img src="'.get_image_bdwave($generalsli['postcontent']).'" alt="grass-blades" width="50" height="50" /></a></li>';
$io=$io+1;
}
}
echo'</ul>

</div></div>';
}
//add gallery finish






//text widget horizontal
elseif ($general['func']=="text_horizontal") {
echo'<div class="add2">
<div class="addbody2">';
echo $general['content'];
echo'</div>
</div>';
}
//text widget horizontal finish
//add bib banner
elseif ($general['func']=="bbfb2") {
echo'<div class="add2">
<div class="addbody2">';
$bbs=explode(',',$general['content']);
$bbi=1;
if ( count($bbs) == 1 ) {
echo '<img src="'.home_url().'/xenon-themes/'.current_theme_name().'/upload/'.$general['content'].'">';
echo'</div></div>';
}
else {
echo'<a href="';
foreach ($bbs as $bb) {
if($bbi==3) { break; }
if($bbi==1) {
echo $bb.'">';
}
if($bbi==2) {
echo '<img src="'.home_url().'/xenon-themes/'.current_theme_name().'/upload/'.$bb.'">';
}
$bbi=$bbi+1;
}
echo'</a></div></div>';
}
}
//add big banner finish
//add poll
elseif ($general['func']=="poll") {
echo'<div class="w2">
<div class="h2">'.$general['name'].'</div>
<div class="b2"><div class="poll_style">';
$pollid=$general['content'];
$result1p = @mysql_query("SELECT * FROM bdwave_poll WHERE id='$pollid' ORDER by id desc LIMIT 0,1");
if ( @mysql_num_rows($result1p) > 0 ) {
while($generalpo = @mysql_fetch_array($result1p)) {
echo '<p>'.$generalpo['name'].'<br>  হ্যাঁ: '.english_to_bangla_number($generalpo['yes']).' না: '.english_to_bangla_number($generalpo['no']).' মন্তব্য নাই: '.english_to_bangla_number($generalpo['nothing']).'</p>';
ob_start();
session_start();
if(isset($_SESSION['poll'])) {
echo'<form method="post" action="">
<input type="radio" name=poll_yes value="yes"'; if ($_SESSION['poll']=="yes") { echo' checked disabled '; } else {  echo' disabled '; } echo'>হ্যাঁ
<input type="radio" name=poll_no value="no"'; if ($_SESSION['poll']=="no") { echo' checked disabled '; } else {  echo' disabled '; } echo'>না
<input type="radio" name=poll_not value="not"'; if ($_SESSION['poll']=="not") { echo' checked disabled '; } else {  echo' disabled '; } echo'>মন্তব্য নাই
</form>';
}
else {
echo'<form method="post" action="">
<input type="hidden" name="poll_id" value="'.$generalpo['id'].'">
<input type="radio" name=poll_yes value="yes">হ্যাঁ
<input type="radio" name=poll_no value="no">না
<input type="radio" name=poll_not value="not">মন্তব্য নাই
<input type="submit" name="save" value="Save" /></form>';
}
ob_flush();
}
}
$result1p = @mysql_query("SELECT * FROM bdwave_poll ORDER by id desc LIMIT 1,2");
if ( @mysql_num_rows($result1p) > 0 ) {
while($generalpo = @mysql_fetch_array($result1p)) {
echo'<p>পূর্বের জনমত জরিপের ফলাফল</p>';
echo '<p>'.$generalpo['name'].'<br>  হ্যাঁ: '.english_to_bangla_number($generalpo['yes']).' না: '.english_to_bangla_number($generalpo['no']).' মন্তব্য নাই: '.english_to_bangla_number($generalpo['nothing']).'</p>';
}
}
echo'<br><br></div></div></div>';
}
//add poll finish



//add quiz
elseif ($general['func']=="quiz") {
echo'<div class="w2">
<div class="h2">'.$general['name'].'</div>
<div class="b2"><div style="font-size:12px;">';
$pollid=$general['content'];
$result1p = @mysql_query("SELECT * FROM bdwave_quiz WHERE id='$pollid' ORDER by id desc LIMIT 0,1");
if ( @mysql_num_rows($result1p) > 0 ) {
while($generalpo = @mysql_fetch_array($result1p)) {
echo ''.$generalpo['name'].'';
ob_start();
session_start();
if(isset($_SESSION['quiz'])) {
echo'আপনার উত্তরঃ '.$_SESSION['quiz'];
}
else {
echo'<form method="post" action="">
<input type="hidden" name="quiz_id" value="'.$generalpo['id'].'">
নাম : <input type="text" name="quiz_name"><br>
উত্তর : <input type="text" name="quiz_ans"><br>
ঠিকানা : <input type="text" name="quiz_details"><br>
<input type="submit" name="save" value="জমাদিন" /></form>';
}
ob_flush();
}
}
$result1p = @mysql_query("SELECT * FROM bdwave_quizw ORDER by id desc LIMIT 0,1");
if ( @mysql_num_rows($result1p) > 0 ) {
while($generalpo = @mysql_fetch_array($result1p)) {
echo'পূর্বের কুইজ এর বিজেতা<br>';
echo 'কুইজ : '.$generalpo['name'].'<br>';
echo 'জয়ী : '.$generalpo['winner'].'';
}
}
echo'<center><p style="color:blue; font-size:15px;">Total Visitor: '.show_visitor_count_bdwave().'</p></center></div></div></div>';
}
//add quiz finish
}
}
}
//finish front page widget
function get_image_bdwave($ii) {
$url=$ii;
$i=0;

$doc = new DOMDocument();
@$doc->loadHTML($url);

$tags = $doc->getElementsByTagName('img');
foreach ($tags as $tag) {
       $arr['$i']=$tag->getAttribute('src');
	   $i=$i+1;
}
$i=0;
if ( $arr['$i'] != "" ) {
return $arr['$i'];
}
else {
return theme_location().'/images/435576news10.jpg';
}
}
//7 Tabs
function bdwave_7_tabs() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_7_tabs" method="post">
<input type="text" name="name"><br>
<input type="text" name="category"><br>
<input type="hidden" name="type" value="7_tabs">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_7_tabs_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//7 tabs finish
//3_tabs
function bdwave_3_tabs() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_3_tabs" method="post">
<input type="text" name="name"><br>
<input type="text" name="category"><br>
<input type="hidden" name="type" value="3_tabs">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_3_tabs_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//3tabs finish
//slder
function bdwave_slider() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_slider" method="post">
<input type="text" name="name"><br>
<input type="text" name="category"><br>
<input type="hidden" name="type" value="slider">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_slider_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//slider finish
//single post
function bdwave_single_post() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_single_post" method="post">
<input type="text" name="name"><br>
<input type="text" name="category"><br>
<input type="hidden" name="type" value="single_post">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_single_post_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//single post finish
//text addd
function bdwave_text() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_text" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="text">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_text_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//text add finish







//text addd horizontal
function bdwave_text_h() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_text_h" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="text_horizontal">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_text_add_h() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//text add horijonta finish









//cat post big
function bdwave_text_cpb() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_cpb" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="cat_post_big">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_text_add_cpb() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//cat post big finish











//text addd big
function bdwave_text_big() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_text_big" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="text_big">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_text_big_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//text add big finish


//youtube addd
function bdwave_yt() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_yt" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="yt">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_yt_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//youtube add finish



//sound cloud addd
function bdwave_sc() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_sc" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="sc">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_sc_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//sound cloud add finish



//Big image post viewer
function bdwave_bipv() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_bipv" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="bipv">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_bipv_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//Big image post viewer finish
//image gallery
function bdwave_gallery() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_gallery" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="gallery">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_gallery_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//image gallery finish
//poll
function bdwave_poll() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_poll" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="poll">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_poll_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//poll finish


//quiz
function bdwave_quiz() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_quiz" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="quiz">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_quiz_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
//poll finish


// addd
function bdwave_add_w() {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwave=add_w" method="post">
<input type="text" name="name"><br>
<textarea name="category"></textarea><br>
<input type="hidden" name="type" value="add_w">
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
function bdwave_add_w_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$type=defence_sql_injection($_POST['type']);
$block=defence_sql_injection($_POST['block']);
$query="INSERT INTO bdwave_menu VALUES ('','$name','$block','$serial','$type','$category')";
@mysql_query($query);
}
// add finish
//show front page widget block 1
function show_bdwave_widget_block1() {
$result = @mysql_query("SELECT * FROM bdwave_menu WHERE block='1' ORDER by serial ASC");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
if ($general['func']=="category_post") {
echo'<div class="w2">
<div class="h2"><a href="'.home_url().'/'.xenon_link_category().$general['content'].'">'.$general['name'].'</a></div>
<div class="b2"><ul>';
$cat=$general['content'];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat'  ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'<li><a href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></li>';
}}
echo'</ul><br><br></div>
</div>';
}
//post slider
elseif ($general['func']=="post_slider") {
echo'<div class="ws2">
<div class="hs2"><a href="'.home_url().'/'.xenon_link_category().$general['content'].'">'.$general['name'].'</a></div>';
echo'<div id="lofslidecontent'.$general['id'].'" class="lof-slidecontent">
<div class="preload"><div></div></div>
 <!-- MAIN CONTENT --> 
  <div class="lof-main-wapper">';
$cat=$general['content'];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat' ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'   <div class="lof-main-item">
        		<img src="'.get_image_bdwave($general1['postcontent']).'" title="Newsflash 2" height="200" width="300">           
                 <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 2" href="'.home_url().xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></h3>

                '.$general1['comment'].'
             </div>
        </div>'; }}
            echo' </div>  
  <!-- END MAIN CONTENT --> 
    <!-- NAVIGATOR -->
	
  <div class="lof-navigator-outer">
  		<ul class="lof-navigator">';
	$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$cat'  ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'            <li>
            	<div>
                	<img src="'.get_image_bdwave($general1['postcontent']).'" />
                	<h3> '.$general1['post'].' </h3>
                  	<span>'.$general1['date'].'</span> - '.$general1['comment'].'
                </div>    
            </li>';
}}
echo"        </ul>
  </div>
  </div>

<script type=\"text/javascript\">
	var _lofmain =  $('lofslidecontent".$general['id']."');
	var _lofscmain = _lofmain.getElement('.lof-main-wapper');
	var _lofnavigator = _lofmain.getElement('.lof-navigator-outer .lof-navigator');
	var object = new LofFlashContent( _lofscmain, 
									  _lofnavigator,
									  _lofmain.getElement('.lof-navigator-outer'),
									  { fxObject:{ transition:Fx.Transitions.Quad.easeInOut,  duration:800},
									 	 interval:3000,
							 			 direction :'hrleft' } );
	object.start( true, _lofmain.getElement('.preload') );
</script>
<!------------------------------------- END OF THE CONTENT ------------------------------------------------->
</div>";
}
//post slider show
//7 tabs show
elseif ($general['func']=="7_tabs") {
$tname=explode(',',$general['name']);
$cat=explode(',',$general['content']);
$it=1;
echo'<div class="ws2">
<div class="hs2">'.$tname[0].'</div>';
echo'<!--tab-->
    <div style="float:left; margin-left: 5px; margin-top: 5px; width: 470px; font: 0.85em solaimanlipi;">
        <ul class="tabs" persist="true">';
		while ( $it< 8 ) {
		echo '<li><a href="#" rel="view'.$general['id'].$it.'">'.$tname[$it].'</a></li>';
				$it=$it+1;
		}
		echo '</ul>
        <div class="tabcontentsdiv">';
		$it=0;
				while ( $it< 7 ) {
				$its=$it+1;
          echo'<div id="view'.$general['id'].$its.'" class="tabcontent">';
			echo'<div id="lofslidecontent'.$general['id'].$its.'" class="lof-slidecontent">
<div class="preload"><div></div></div>
 <!-- MAIN CONTENT --> 
  <div class="lof-main-wapper">';
$catss=$cat[$it];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$catss'  ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'   <div class="lof-main-item">
        		<img src="'.get_image_bdwave(home_url().'/xenon-themes/'.current_theme_name().'/get_post.php?cat='.$general1['shortname']).'" title="Newsflash 2" height="200" width="300">           
                 <div class="lof-main-item-desc">
                <h3><a target="_parent" title="Newsflash 2" href="'.home_url().xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></h3>

                '.$general1['comment'].'
             </div>
        </div>'; }}
            echo' </div>  
  <!-- END MAIN CONTENT --> 
    <!-- NAVIGATOR -->
	
  <div class="lof-navigator-outer">
  		<ul class="lof-navigator">';
	$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE category='$catss'  ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'            <li>
            	<div>
                	<img src="'.theme_location().'/images/435576news10.jpg" />
                	<h3> '.$general1['post'].' </h3>
                  	
                </div>    
            </li>';
}}
echo"        </ul>
  </div>
  </div>

<script type=\"text/javascript\">
	var _lofmain =  $('lofslidecontent".$general['id'].$it."');
	var _lofscmain = _lofmain.getElement('.lof-main-wapper');
	var _lofnavigator = _lofmain.getElement('.lof-navigator-outer .lof-navigator');
	var object = new LofFlashContent( _lofscmain, 
									  _lofnavigator,
									  _lofmain.getElement('.lof-navigator-outer'),
									  { fxObject:{ transition:Fx.Transitions.Quad.easeInOut,  duration:800},
									 	 interval:5000,
							 			 direction :'hrleft' } );
	object.start( true, _lofmain.getElement('.preload') );
</script>
<!------------------------------------- END OF THE CONTENT ------------------------------------------------->
                
            </div>";
		$it=$it+1;
		}
		echo'        </div>
    </div>

<!--tab finish-->
</div>';
}
//7tabs finish show
//3tabs show
elseif ($general['func']=="3_tabs") {
$tname=explode(',',$general['name']);
$cat=explode(',',$general['content']);
$it=1;
echo'<!--tab-->
    <div style="float:left; margin-left: 2px; margin-top: 5px; width: 250px; font: 0.85em solaimanlipi;">
        <ul class="tabs" persist="true">';
		while ( $it< 3 ) {
		echo '<li><a href="#" rel="view'.$general['id'].$it.'">'.$tname[$it].'</a></li>';
				$it=$it+1;
		}
		echo '</ul>
        <div class="tabcontents">';
		$it=0;
				while ( $it< 2 ) {
				$its=$it+1;
          echo'<div id="view'.$general['id'].$its.'" class="tabcontent"><ul>';
if ( $it == 0 ) {
$result1 = @mysql_query("SELECT * FROM frndzk_post ORDER by id desc LIMIT 0,30");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'<li><a target="_parent" title="Newsflash 2" href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></li>';
}
}
}
if ( $it == 5 ) {
$result1c = @mysql_query("SELECT * FROM bdwave_cc ORDER by count desc LIMIT 0,20");
if ( @mysql_num_rows($result1c) > 0 ) {
while($general1c = @mysql_fetch_array($result1c)) {
$postidc=$general1c['post'];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE shortname='$postidc'");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'<li><a target="_parent" title="Newsflash 2" href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></li>'; }}
}
}
}
if ( $it == 1 ) {
$result1c = @mysql_query("SELECT * FROM bdwave_counter ORDER by count desc LIMIT 0,20");
if ( @mysql_num_rows($result1c) > 0 ) {
while($general1c = @mysql_fetch_array($result1c)) {
$postidc=$general1c['post'];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE id='$postidc'");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'<li><a target="_parent" title="Newsflash 2" href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></li>'; }}
}
}
}
            echo' </ul></div>';
		$it=$it+1;
		}
		echo'        </div>
    </div>

<!--tab finish-->';
}
//3tabs finish show
//slider
elseif ($general['func']=="slider") {
echo"
<!--slider-->
			<div id=\"slider_container_1\">

				<div id=\"SliderName\">";
$resultslider = @mysql_query("SELECT * FROM frndzk_post WHERE tags LIKE'%slider%' ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($resultslider) > 0 ) {
while($generalsli = @mysql_fetch_array($resultslider)) {
echo"<img src=\"".get_image_bdwave($generalsli['postcontent'])."\" title=\"Description from Image Title\" />
<div class=\"SliderNameDescription\"><h4><a href=\"".home_url()."/".xenon_link_post().$generalsli['shortname']."\">".$generalsli['post']."</a></h4></div>";
}
}
				echo"</div>
				<div class=\"c\"></div>
				<div id=\"SliderNameNavigation\"></div>
				<div class=\"c\"></div>

				<script type=\"text/javascript\">

					// we created new effect and called it 'demo01'. We use this name later.
					Sliderman.effect({name: 'demo01', cols: 10, rows: 5, delay: 10, fade: true, order: 'straight_stairs'});

					var demoSlider = Sliderman.slider({container: 'SliderName', width: 449, height: 300, effects: 'demo01',
					display: {
						pause: true, // slider pauses on mouseover
						autoplay: 3000, // 3 seconds slideshow
						always_show_loading: 200, // testing loading mode
						description: {background: '#ffffff', opacity: 0.5, height: 50, position: 'bottom'}, // image description box settings
						loading: {background: '#000000', opacity: 0.2, image: 'img/loading.gif'}, // loading box settings
						buttons: {opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}}, // Next/Prev buttons settings
						navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings
					}});

				</script>

				<div class=\"c\"></div>
			</div>
<!--slider finish-->
";
}
//slider finish
//single post
elseif ($general['func']=="single_post") {
echo'<div class="w1">
<div class="h1">'.$general['name'].'</div>
<div class="b1">';
$cat=$general['content'];
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE shortname='$cat'");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
echo'<li><a href="'.home_url().'/'.xenon_link_post().$general1['shortname'].'">'.$general1['post'].'</a></li>';
echo'</p><img src="'.get_image_bdwave($general1['postcontent']).'" height="95px" width="95px"></p>';
echo'<p>'.$general1['comment'].'</p>';
}}
echo'<br><br></div>
</div>';
}
//single post finish
//text widget
elseif ($general['func']=="text") {
echo'<div class="w1">
<div class="h1">'.$general['name'].'</div>
<div class="b1">';
echo $general['content'];
echo'<br><br></div>
</div>';
}
//text widget finish
//add widget
elseif ($general['func']=="add_w") {
echo'<div class="last12">';
echo $general['content'];
echo'<br><br>
</div>';
}
//add widget finish
}
}
}
//block 1
function widget_bd_wave_home() {
$result = @mysql_query("SELECT * FROM bdwave_menu ORDER by serial ASC");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
echo '<p>widget name: '.$general['name'].' Block : '.$general['block'].' Type: '.$general['func'].' Serial: '.$general['serial'].' <a href="xenon-theme-settings.php?theme=bdwave-admin&bdwaveeditid='.$general['id'].'">edit</a> or <a href="xenon-theme-settings.php?theme=bdwave-admin&bdwavedeleteid='.$general['id'].'">delete</a> </p><br>';
}
}
}
function widget_bd_wave_edit() {
$id=defence_sql_injection($_GET['bdwaveeditid']);
$result = @mysql_query("SELECT * FROM bdwave_menu WHERE id='$id'");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
echo ' 
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&bdwaveedit='.$id.'" method="post">
<textarea name="name">'.$general['name'].'</textarea><br>
<textarea name="category">'.$general['content'].'</textarea><br>
<textarea name="serial">'.$general['serial'].'</textarea><br>
<select name="block"><option value="1">Block 1</option><option value="2">Block 2</option></select>
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
}
}
function widget_bd_wave_edit_action() {
$id=defence_sql_injection($_GET['bdwaveedit']);
$name=defence_sql_injection($_POST['name']);
$category=defence_sql_injection($_POST['category']);
$serial=defence_sql_injection($_POST['serial']);
$block=defence_sql_injection($_POST['block']);
$result = @mysql_query("SELECT * FROM bdwave_menu WHERE id='$id'");
if ( @mysql_num_rows($result) > 0 ) {
$query="UPDATE bdwave_menu SET name = '$name'
WHERE id = '$id'";
mysql_query($query);
$query="UPDATE bdwave_menu SET content = '$category'
WHERE id = '$id'";
mysql_query($query);
$query="UPDATE bdwave_menu SET serial = '$serial'
WHERE id = '$id'";
mysql_query($query);
$query="UPDATE bdwave_menu SET block = '$block'
WHERE id = '$id'";
mysql_query($query);
}
}
function widget_bd_wave_delete() {
$id=defence_sql_injection($_GET['bdwavedeleteid']);
$result = @mysql_query("SELECT * FROM bdwave_menu WHERE id='$id'");
if ( @mysql_num_rows($result) > 0 ) {
mysql_query("DELETE FROM bdwave_menu WHERE id='$id'");
echo'Deleted Menu Item';
}
}
function count_bdwave_post($postsn) {
$result1 = @mysql_query("SELECT * FROM frndzk_post WHERE shortname='$postsn'");
if ( @mysql_num_rows($result1) > 0 ) {
while($general1 = @mysql_fetch_array($result1)) {
$postid=$general1['id'];
$result1c = @mysql_query("SELECT * FROM bdwave_counter WHERE post='$postid'");
if ( @mysql_num_rows($result1c) > 0 ) {
while($general1c = @mysql_fetch_array($result1c)) {
$postidc=$general1c['id'];
$i=$general1c['count']+1;
$query="UPDATE bdwave_counter SET count = '$i'
WHERE id = '$postidc'";
mysql_query($query);
}
}
else {
$query="INSERT INTO bdwave_counter VALUES ('','$postid','1',CURDATE())";
@mysql_query($query);
}
}
}
}
if ( isset($_GET['url']) && $_GET['url'] != '' ) {
count_bdwave_post($_GET['url']);
}
function visitor_count_bdwave() {
$result1c = @mysql_query("SELECT * FROM frndzk_title WHERE title='bdwave_visitor_counter'");
if ( @mysql_num_rows($result1c) > 0 ) {
while($general1c = @mysql_fetch_array($result1c)) {
$i=$general1c['tagline']+1;
$query="UPDATE frndzk_title SET tagline = '$i'
WHERE title = 'bdwave_visitor_counter'";
mysql_query($query);
}
}
}


function admin_bar_bdwave() {
if(isset($_SESSION['bitto'])) {
if(basename($_SERVER['PHP_SELF'])=="add-post.php" || basename($_SERVER['PHP_SELF'])=="post.php") {
echo '<div style="clear:both;"></div>
<div style="height: 35px;
    width: 100%;"></div>
	<div style="clear:both;"></div>
<div style="   position: fixed;
    z-index: 1000000; 
    bottom: 0; 
	clear: both;
    left: 0;
	float:left;
	margin:0;
	height: 35px;
    width: 100%; background: white url('.home_url().'/xenon-core/images/hi.png) repeat-x left top;"><div style="float:left; margin-left:20px;"><a href="'.home_url().'/xenon-admin"><img src="'.home_url().'/xenon-core/images/xenon.png"></a></div>
	<div style="color:white; font-size:20px; padding-top:8px; float:left;margin-left:20px;">
	
	Image 1: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="ione" id="ione"/> 
	
	<input type="button" id="ibut" onclick="imageUpload()" value="Upload" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; cursor:pointer"/><div id="oik" style="float:left;"></div>
	
	</div>
	<div style="color:white; font-size:20px; padding-top:8px; float:right; margin-right:20px;">
	
	Slider: <input type="checkbox" onchange="bwt()" /> &nbsp;
	Headline: <input type="checkbox" onchange="bwth()" /> &nbsp;
	
	<div style="background:black; height:300px; width:300px; margin-top:-330px; margin-right:-40px; display:none;"><div id="ige">';
	
	$result1crr = @mysql_query("SELECT * FROM frndzk_media ORDER by id DESC LIMIT 0,9");
if ( @mysql_num_rows($result1crr) > 0 ) {
while($general1cee = @mysql_fetch_array($result1crr)) {
echo'<img src="../xenon-upload/'.$general1cee['url'].'" width="80px" height="80px" style="margin-top:3px; margin-left:3px; float:left; cursor:pointer;" onclick="insImg(\'../xenon-upload/'.$general1cee['url'].'\')"/>';
}
}
	
	echo'
	</div>
	
	<div style="clear:both;"></div>
	<div style="float:left; margin-top:3px; margin-left:5px; cursor:pointer;" onclick="getImagerev()">PREV</div>
	<div style="float:left; margin-top:3px; margin-left:5px; cursor:pointer;" onclick="getImage()">NEXT</div>
	
	
	</div>
	
	</div></div><div style="clear:both;"></div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
var td="",tdh="",tdb="";
	function bwt() {
	if (td=="slider,") { td="" }
	else { td="slider,"; }
	document.getElementById("tag").value=document.getElementById("tag").value.replace("slider,","")+td;
	}
	
	function bwth() {
	if (tdh=="headline,") { tdh="" }
	else { tdh="headline,"; }
	document.getElementById("tag").value=document.getElementById("tag").value.replace("headline,","")+tdh;
	}
	function bwtb() {
	if (tdb=="bigimagepost,") { tdb="" }
	else { tdb="bigimagepost,"; }
	document.getElementById("tag").value=document.getElementById("tag").value.replace("bigimagepost,","")+tdb;
	}
	function bwtc() {
	if (tdc=="crime,") { tdc="" }
	else { tdc="crime,"; }
	document.getElementById("tag").value=document.getElementById("tag").value.replace("crime,","")+tdc;
	}
	
	function imageUpload() {
	
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
str22=document.getElementById("ione").value;
var formData = new FormData();
formData.append("ione", document.getElementById("ione").files[0])
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	if(xmlhttp.responseText=="no") {
		
		}
	else {
	$("iframe").contents().find("#src").val("../xenon-upload/"+xmlhttp.responseText);
	$("iframe").contents().find("#style").val("float:left; margin-left: 5px; margin-right: 8px; border: 2px black solid;");
		document.getElementById("oik").innerHTML="Uploaded :) ";
		}
    }
   }
xmlhttp.open("POST","http://'.$_SERVER['HTTP_HOST'].'/xenon-themes/bdwave/upload.php",true);
xmlhttp.send(formData);
}

var gie=0;
var myVar = null;
function getImage() {
gie=gie+9;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;


if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	if(xmlhttp.responseText=="no") {
		gie=gie-9;
		}
	else {
		document.getElementById("ige").innerHTML=xmlhttp.responseText;
		}
    }
   }
xmlhttp.open("GET","'.theme_location().'/upload.php?view=media&no="+gie,true);
xmlhttp.send();
}

function getImagerev() {
gie=gie-9;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;


if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
  
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	if(xmlhttp.responseText=="no") {
		gie=gie+9;
		}
	else {
		document.getElementById("ige").innerHTML=xmlhttp.responseText;
		}
    }
   }
xmlhttp.open("GET","'.theme_location().'/upload.php?view=media&no="+gie,true);
xmlhttp.send();
}



function insImg(img) {
$("iframe").contents().find("#src").val(img);
$("iframe").contents().find("#style").val("float:left; margin-left: 5px; margin-right: 8px; border: 2px black solid;");
}
</script>
	
	';
}
}
}
xenon_core("xenon_footer_admin_panel", "admin_bar_bdwave");














if ( isset($_GET['url']) && $_GET['url'] != '' ) {
count_bdwave_post($_GET['url']);
}

visitor_count_bdwave();







function bdwave_breaking_news() {
$ler="bwbn";
$contentst=$_POST['text'];
$contentst="<?php
$$ler='$contentst';
?>";
$contentst=str_replace('\"','"',$contentst);
$contentst=str_replace("\'","'",$contentst);
$contentst = stripslashes($contentst);
$file = fopen("../xenon-themes/bdwave/content/bn.php","w");
$stringData = "$contentst";
fwrite($file,$stringData);
fclose($file);
echo'Success<br>';
}
?>