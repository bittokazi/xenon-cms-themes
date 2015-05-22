	 </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
										
										
	<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { 
	echo 	'<div id="ads_onhome"> 




	<div id="adjust"> ';
	show_xenon_widget('sidebar-right-english',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<noscript>',
'after_title' => '</noscript>',
'before_content' => '',
'after_content' => ''
));

echo'
</div>    




</div>';
	}
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { 
	
	echo'<div id="right_section" style="height:1315px;">
	
	
	
	
	<div id="Kurdshopping_catgory_main"><div id="Kurdshopping_catgory_ads">        <div class="cmb1">';
	if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'Select Category'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'اختر الفئة'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'جۆرى هەڵبژاردە'; }
else { echo'Select Category'; }
echo'
	</div>        
	<ul style="float: right;">';

  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") {
	$result = @mysql_query("SELECT * FROM furrat_cat WHERE parent='0' ORDER by id desc");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		$parent=$pages['id'];
		echo'
		<li style="float: right;"> <span class="main_span" style="float: right;"> <span class="bullet" style="float: right;"></span> <span class="category_link" style="float: right;"> <a style="float: right; margin-right: 8px;" style="float: right;" href="'.home_url().'/ar/category/'.$pages['id'].'">'.$pages['arname'].'</a> </span> </span>
		';
		//$result1 = @mysql_query("SELECT * FROM furrat_cat WHERE parent='$parent' ORDER by id desc");
		//if ( @mysql_num_rows($result1) > 0 ) {
		//echo'<ul style="float: right;">';
		//while($pages1 = @mysql_fetch_array($result1)) {
		//echo'
		//<li style="float: right;"> <span class="main_span" style="float: right;"> <span class="bullet" style="float: right; margin-right: 30px;"></span> <span class="category_link" style="float: right;"> <a style="float: right; margin-right: 8px;" href="'.home_url().'/ar/category/'.$pages1['id'].'">'.$pages1['arname'].'</a> </span> </span> </li>
		//';
		//}
		//echo'</ul>';
		//}
		echo'</li>';
		}
		}
	}



echo'	</ul></div></div>        <!-- //newmain end -->
	
	
	
	
	
	<div class="ffbb">       <div class="cmb1">';
 if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'Select Company'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'اختر الشركة'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'سەلەجت جۆمپاني'; }
else { echo'Select Company'; }
echo'
	</div>   <div id="up">      <ul style="float: right;">';

  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") {
	$result = @mysql_query("SELECT * FROM furrat_com ORDER by id desc");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		$parent=$pages['id'];
		echo'
		<li style="float: right;"> <span class="main_span" style="float: right;"> <span class="bullet" style="float: right; "></span> <span class="category_link" style="float: right;"> <a style="float: right; margin-right: 8px;" href="'.home_url().'/ar/city/'.$pages['id'].'">'.$pages['arname'].'</a> </span> </span>
		';
		$result1 = @mysql_query("SELECT * FROM furrat_city WHERE parent='$parent' ORDER by id desc");
		if ( @mysql_num_rows($result1) > 0 ) {
		echo'<ul style="float: right;">';
		while($pages1 = @mysql_fetch_array($result1)) {
		echo'
		<li style="float: right;"> <span class="main_span" style="float: right;"> <span class="bullet" style="float: right; margin-right: 30px;"></span> <span class="category_link" style="float: right;"> <a style="float: right; margin-right: 8px;" href="'.home_url().'/ar/city/'.$pages1['id'].'">'.$pages1['arname'].'</a> </span> </span> </li>
		';
		}
		echo'</ul>';
		}
		echo'</li>';
		}
		}
	}
echo'
	</ul></div></div>      <!-- //newmain end -->
	
	
	</div>';
	
	}
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { 
	
	echo'<div id="right_section" style="height:1315px;">
	
	
	
	
	<div id="Kurdshopping_catgory_main"><div id="Kurdshopping_catgory_ads">        <div class="cmb1">';
	if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'Select Category'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'اختر الفئة'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'جۆرى هەڵبژاردە'; }
else { echo'Select Category'; }
echo'
	</div>        
	<ul style="float: right;">';


  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { 
	$result = @mysql_query("SELECT * FROM furrat_cat WHERE parent='0' ORDER by id desc");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		$parent=$pages['id'];
		echo'
		<li style="float: right;"> <span class="main_span" style="float: right;"> <span class="bullet" style="float: right; "></span> <span class="category_link" style="float: right;"> <a style="float: right; margin-right: 8px;" href="'.home_url().'/ku/category/'.$pages['id'].'">'.$pages['kuname'].'</a> </span> </span>
		';
		//$result1 = @mysql_query("SELECT * FROM furrat_cat WHERE parent='$parent' ORDER by id desc");
		//if ( @mysql_num_rows($result1) > 0 ) {
		//echo'<ul style="float: right;">';
		//while($pages1 = @mysql_fetch_array($result1)) {
		//echo'
		//<li style="float: right;"> <span class="main_span" style="float: right;"> <span class="bullet" style="float: right; margin-right: 30px;"></span> //<span class="category_link" style="float: right;"> <a style="float: right; margin-right: 8px;" //href="'.home_url().'/ku/category/'.$pages1['id'].'">'.$pages1['kuname'].'</a> </span> </span> </li>
		//';
		//}
		//echo'</ul>';
		//}
		echo'</li>';
		}
		}
	}


echo'	</ul></div></div>        <!-- //newmain end -->
	
	
	
	
	
	<div class="ffbb">       <div class="cmb1">';
 if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'Select Company'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'اختر الشركة'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'سەلەجت جۆمپاني'; }
else { echo'Select Company'; }
echo'
	</div>   <div id="up">      <ul>';
if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { 
	$result = @mysql_query("SELECT * FROM furrat_com ORDER by id desc");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		$parent=$pages['id'];
		echo'
		<li style="float: right;"> <span style="float: right;" class="main_span"> <span class="bullet" style="float: right;"></span> <span class="category_link" style="float: right;"> <a style="float: right; margin-right: 8px;" href="'.home_url().'/ku/city/'.$pages['id'].'">'.$pages['kuname'].'</a> </span> </span>
		';
		$result1 = @mysql_query("SELECT * FROM furrat_city WHERE parent='$parent' ORDER by id desc");
		if ( @mysql_num_rows($result1) > 0 ) {
		echo'<ul style="float: right;">';
		while($pages1 = @mysql_fetch_array($result1)) {
		echo'
		<li style="float: right;"> <span class="main_span" style="float: right;"> <span class="bullet" style="float: right; margin-right: 30px;"></span> <span class="category_link" style="float: right;"> <a style="float: right; margin-right: 8px;" href="'.home_url().'/ku/city/'.$pages1['id'].'">'.$pages1['kuname'].'</a> </span> </span> </li>
		';
		}
		echo'</ul>';
		}
		echo'</li>';
		}
		}
	}
echo'
	</ul></div></div>      <!-- //newmain end -->
	
	
	</div>';
	
	}
 ?>
										
	
	
	
	
	
	
	</div>
	
	
	<div id="footer">
	
	
	
	<div id="Kurdshopping_footer">
	
	
	<div class="Kurdshopping_footer_sub">
	
	<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { 
	show_xenon_widget('footer-right-english',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
	}
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { 
show_xenon_widget('footer-right-arabian',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { 
show_xenon_widget('footer-right-kurdish',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
else {
show_xenon_widget('footer-right-english',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
 ?>
	
	
	</div>
	
	
	
	<div class="Kurdshopping_footer_sub">
	
	
	
	<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { 
	show_xenon_widget('footer-right-center-english',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
	}
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { 
show_xenon_widget('footer-right-center-arabian',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { 
show_xenon_widget('footer-right-center-kurdish',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
else {
show_xenon_widget('footer-right-center-english',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
 ?>	
	
	
	
	</div>
	
	
	<div class="Kurdshopping_footer_sub">


	<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { 
	show_xenon_widget('footer-left-center-english',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
	}
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { 
show_xenon_widget('footer-left-center-arabian',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { 
show_xenon_widget('footer-left-center-kurdish',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
else {
show_xenon_widget('footer-left-center-english',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
 ?>

	
	
	
	</div>
	
	
	<div class="Kurdshopping_footer_sub">

	
		<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { 
	show_xenon_widget('footer-left-english',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
	}
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { 
show_xenon_widget('footer-left-arabian',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { 
show_xenon_widget('footer-left-kurdish',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
else {
show_xenon_widget('footer-left-english',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="Kurdshopping_footer_heading">',
'after_title' => '</div>',
'before_content' => '<div class="Kurdshopping_footer_contents">',
'after_content' => '</div>'
));
}
 ?>
	
	
	
	</div>
	
	<div class="space_footer"></div><a href="<?php echo home_url(); ?>"><img src="<?php echo theme_location(); ?>/images/logo.png" width="350" height="75" style="margin-left:30px; margin-right:10px; float:right"></a><div class="Kurdshopping_footer_copyright">  <p class="copyright">2014 Copyright Furrat.com<br> All Rights Reserved <br>(Kurdish) 00964-7502141912<br>(Arabic) 00964-7706921858<br>info@furrat.com</p></div></div>
	
	
	
	</div>
</body>
</html>