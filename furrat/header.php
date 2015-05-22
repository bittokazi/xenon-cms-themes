<!DOCTYPE html>
<html>
<head>
<title><?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo get_title_english(); }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo get_title_arabian(); }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo get_title_kurdish(); }
else { echo get_title_english(); }
 ?></title>
<link href="<?php echo theme_location(); ?>/style.css" rel="stylesheet" />
<script>
var intervaldl=0,intervaltime=3000;
function searchFur(del) {
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
	document.getElementById('fur-search').style.display = 'block';
		document.getElementById("fur-search").innerHTML="Nothing found<br>";
	}
	else {
		document.getElementById('fur-search').style.display = 'block';
		document.getElementById("fur-search").innerHTML=xmlhttp.responseText;
	}
    }
   }
xmlhttp.open("GET","<?php echo home_url(); ?>/core?action=search&id="+del,true);
xmlhttp.send();
}
function searchFurclear() {
document.getElementById('fur-search').style.display = 'none';
clearInterval(myVar);
}
function changeClass() {
		myVar = setInterval(function(){searchFurclear()},1000);
} 
function cDd() {
clearInterval(myVar);
}
var myfunc;

function cleardivloader() {
document.getElementById('divloader').className = "div-loader-hide";
clearInterval(myfunc);
document.getElementById('dlimg').style.display = 'block';
document.getElementById('dlmsg').innerHTML='Loading...';
}
function cleardivloadercall(msg) {
document.getElementById('dlimg').style.display = 'none';
document.getElementById('dlmsg').innerHTML=msg;
		myfunc = setInterval(function(){cleardivloader()},3000);
}

function cleardivloader1() {
clearInterval(myfunc);
document.getElementById('dlimg').style.display = 'block';
document.getElementById('dlmsg').innerHTML='Loading...';
window.location.replace("<?php echo home_url().'/dashboard'; ?>");
}
function cleardivloadercall1(msg) {
document.getElementById('dlimg').style.display = 'none';
document.getElementById('dlmsg').innerHTML=msg;
		myfunc = setInterval(function(){cleardivloader1()},4000);
}




function logIn11() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Logging In...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; logIn11(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
str22=document.getElementById("lpun").value;
str23=document.getElementById("lppw").value;
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
		cleardivloadercall('Username or Password Do not match');
	}
	else if(xmlhttp.responseText=="yes") {
		cleardivloadercall1('Login Successfull.<br>Redirecting...');
	}
    }
   }
xmlhttp.open("POST","<?php echo home_url().'/core?action=login'; ?>",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("fur-un="+str22+"&fur-pass="+str23);
}
}


function forgetpass() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Reset Password...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; forgetpass(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
str22=document.getElementById("lpunemail").value;
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
	document.getElementById("lupdate").innerHTML="&nbsp; Email Not Found!!!<br>";
		cleardivloadercall('Email Not Found!!!');
	}
	else if(xmlhttp.responseText=="yes") {
	document.getElementById("lupdate").innerHTML="<h2>&nbsp; Password Reset Successful. Check your Email Inbox</h2>";
	document.getElementById("resetpass").style.display = 'none';
		cleardivloadercall('Password Reset Successful. Check your Email Inbox');
	}
    }
   }
xmlhttp.open("POST","<?php echo home_url().'/core?action=forgetpass'; ?>",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("fur-passreset="+str22);
}
}
window.onload = function () { document.getElementById('divloader').className = "div-loader-hide"; }
</script>
</head>
<body>
<div id="divloader" class="div-loader-hide"><div style="margin:0 auto; width:100%; margin-top:100px; text-align:center;"><div id="dlimg" style=" text-align:center;"><img height="350px" width="200px" src="<?php echo theme_location(); ?>/images/newloading.gif" /></div><div id="dlmsg" style=" color:white; text-align:center; font-size:30px; width:100%; margin-top:-60px;">Loading...</div></div></div>
<script>
document.getElementById('divloader').className = "div-loader-hide";
</script>
	<div id="furrat_top">
		<div id="furrat_logo">
			<a href="<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo home_url().'/en'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo home_url().'/ar'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo home_url().'/ku'; }
else { echo home_url().'/en'; } ?>"><img src="<?php echo theme_location(); ?>/images/logo.png" width="390px" /></a>
		</div>
		<div id="fur_top_portion">        
			<div id="Kurdshopping_cuntrypic">   
				<ul>   
					<li> <a href="<?php echo home_url(); ?>/ku" class="kr"><!--<img src="<?php echo theme_location(); ?>/images/kurdish.gif">-->کوردی</a></li>
					<li><a href="<?php echo home_url(); ?>/ar" class="kr"><!--<img src="<?php echo theme_location(); ?>/images/arabic.gif">-->عربي</a>     </li>
					<li><a href="<?php echo home_url(); ?>/en" class="kr"><!--<img src="<?php echo theme_location(); ?>/images/english.gif">-->English</a>     </li>
				</ul>     
			</div>  
			<div id="home">       
			<a href="<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo home_url().'/en'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo home_url().'/ar'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo home_url().'/ku'; }
else { echo home_url().'/en'; } ?>">
				<div id="home_text">
				<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'Home<!--منزل-->'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'المنزل'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'ماڵ'; }
else { echo'Home<!--منزل-->'; }
?>				
				</div>        
				<div id="home_img">
					<img src="<?php echo theme_location(); ?>/images/home.png">        
				</div></a>    
			</div>
		</div>
		
		<div id="lower_portion">  <div id="login_form">


<?php if(isset($_SESSION['furrat-dash'])) { echo'<h1 style="margin-top:5px; margin-left:15px;">Welcome back, '.$_SESSION['furrat-dash'].' | <a style="text-decoration:none; color:black;" href="'.home_url().'/dashboard">My Account</a></h1>'; } 

else { 

   if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { @include('inc/top-login.php'); }
	else if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { @include('inc/top-login-ar.php'); }
	else if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { @include('inc/top-login-ku.php'); }
	else { $_SESSION['furrat-lan']="en"; @include('inc/top-login.php'); }
	
	}
	
?>
	
	
	
	
	
	
	
	</div>
	
	
	</div>
	</div>
	
	<div class="banner_TD">                                
		<?php include('content/header_block.txt'); ?>                          
	</div>
	
	
	
	<div id="Kurdshopping_home">    
	
	
	
	<!-- icons_start-->
	
	
	<?php
	if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { @include('inc/social-media.php'); }
	else if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { @include('inc/search-ar.php'); }
	else if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { @include('inc/search-ku.php'); }
	?>
	
	
	<!-- icons_end-->
	
	
	<!-- Place ad div starts--><div id="place_ad_outerdiv" style="width:627px">
	
	
	<div class="Kurdshopping_place_ad_main">
	
	
	
	<a class="jatt" href="<?php echo home_url(); ?>/dashboard"><div id="place_ad_text">
	<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'Place An Ad'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'مكان الوظيفة'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'شوێنێك زياد دەكات'; }
else { echo'Place An Ad'; }
?>	
	
	</div></a>


	
	

	
	
	

	</div> </div> <!-- Place ad div ends--><style>.logoin{margin-right:6px}.jatt{text-decoration:blink!important; color: #FFFFFF !important;}</style>


	
	
	
	
	

	<?php 
	if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { @include('inc/search.php'); }
	else if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { @include('inc/social-media.php'); }
	else if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { @include('inc/social-media.php'); }
	?>




   

<div id="fur-search" class="kurd_dynamic_div" style="  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.8);
    border-radius: 5px;
    box-shadow: 0 0 3px #000000;
    color: #F5F5F5;
    cursor: pointer;
    display:none;
    float: left;
    font-weight: bold;
    height: auto;
    margin-left: 9px;
    margin-top: 45px;
    overflow: hidden;
    padding: 10px;
    position: absolute;
    text-align: left;
	z-index:1000;
    width: 154px;"></div>    


    <style>        .kurd_dynamic_div > li:hover {
            color: #FF0000;
            padding-left: 10px;
            transition: all 1.2s ease 0s;
        }

        .kurd_dynamic_div li {
            height: 25px;
            list-style-type: none;
            overflow: hidden;
        }
    </style></div>
	
	
	
	
	
	
	
	
	
	<div id="content_main">
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php	

if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { 
	
	echo'<div id="right_section" style="height:1315px;">
	
	
	
	
	<div id="Kurdshopping_catgory_main"><div id="Kurdshopping_catgory_ads">        <div class="cmb1">';
	if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'Select Category'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'اختر الفئة'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'جۆرى هەڵبژاردە'; }
else { echo'Select Category'; }
echo'
	</div>        
	<ul>';

	if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { 
		$result = @mysql_query("SELECT * FROM furrat_cat WHERE parent='0' ORDER by id desc");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		$parent=$pages['id'];
		echo'
		<li> <span class="main_span"> <span class="bullet"></span> <span class="category_link"> <a href="'.home_url().'/en/category/'.$pages['id'].'">'.$pages['enname'].'</a> </span> </span>
		';
		//$result1 = @mysql_query("SELECT * FROM furrat_cat WHERE parent='$parent' ORDER by id desc");
		//if ( @mysql_num_rows($result1) > 0 ) {
		//echo'<ul>';
		//while($pages1 = @mysql_fetch_array($result1)) {
		//echo'
		//<li> <span class="main_span"> <span class="bullet"></span> <span class="category_link"> <a href="'.home_url().'/en/category/'.$pages1['id'].'">'.$pages1['enname'].'</a> </span> </span> </li>
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

	if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { 
		$result = @mysql_query("SELECT * FROM furrat_com ORDER by id desc");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		$parent=$pages['id'];
		echo'
		<li> <span class="main_span"> <span class="bullet"></span> <span class="category_link"> <a href="'.home_url().'/en/city/'.$pages['id'].'">'.$pages['enname'].'</a> </span> </span>
		';
		$result1 = @mysql_query("SELECT * FROM furrat_city WHERE parent='$parent' ORDER by id desc");
		if ( @mysql_num_rows($result1) > 0 ) {
		echo'<ul>';
		while($pages1 = @mysql_fetch_array($result1)) {
		echo'
		<li> <span class="main_span"> <span class="bullet"></span> <span class="category_link"> <a href="'.home_url().'/en/city/'.$pages1['id'].'">'.$pages1['enname'].'</a> </span> </span> </li>
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
	else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { 
		echo 	'<div id="ads_onhome"> 




	<div id="adjust"> ';
	show_xenon_widget('sidebar-right-arabian',
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
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { 
	echo 	'<div id="ads_onhome"> 




	<div id="adjust"> ';
	show_xenon_widget('sidebar-right-kurdish',
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
?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="Kurdshopping_recent_ad_main">  <!-- <div class="recent_bar"><a href="http://www.kurdshopping.com/en/index.php/recent/ads"><button class="button"> VIEW ALL RECENT ADS</button></a></div> --><div class="resent" style="height:auto;">
	
	
	