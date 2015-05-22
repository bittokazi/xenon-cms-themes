<?php @include('header.php'); ?>
<script>
var iu=15;
function loadAdd() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Loading More Adds...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; loadAdd(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
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
		if(xmlhttp.responseText=="") {
		document.getElementById("atext").innerHTML = 'Nothing to show';
		cleardivloadercall('All Adds Loaded Already.<br>Nothing to show.');
		}
		else {
			document.getElementById("loadadd").innerHTML=document.getElementById("loadadd").innerHTML+xmlhttp.responseText;
			iu=iu+15;
			cleardivloadercall('New Adds Loaded Succeefully');
		}	
    }
   }
xmlhttp.open("GET","core?action=loadadd&start="+iu,true);
xmlhttp.send();
}
}
</script>
<div id="new_arival">        <div class="inttext">        <span class="seelink">
<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'New Arrivals'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'القادمون الجدد'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'گەيشتنى نوێ'; }
else { echo'New Arrivals'; }
?>
</span></div>        </div> 



  




	    
	 
	 <?php
	 if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { 
	 $result = @mysql_query("SELECT * FROM furrat_product ORDER by id desc LIMIT 0,15");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		echo'
		 <a href="'.home_url().'/en/add/'.$pages['id'].'">         <div class="recent_ad_pic_main">            
                 <div class="recent_ad_pic">                                   				
                <img src="'.home_url().'/xenon-upload/'.$pages['ione'].'">                    
                   

                 

         <!--</div>-->         
         </div>     
     <div class="recent_ad_name">'.$pages['enname'].'</div><div id="recent"><!--<div id="recent_title">Title:</div>--><div class="recent_ad_city">';
	 $city=$pages['city'];
	 $result1 = @mysql_query("SELECT * FROM furrat_city WHERE id='$city' ORDER by id desc");
	 if ( @mysql_num_rows($result1) > 0 ) {
		while($pages1 = @mysql_fetch_array($result1)) {
		echo $pages1['enname'];
		}
		}
	 echo'</div></div><div id="recent2">    <!--<div id="recent_price">Price:</div>--><div class="recent_ad_price"> '.$pages['price'].'$</div></div></div></a>
		';
		}
		}
	 }
	 else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") {
	 $result = @mysql_query("SELECT * FROM furrat_product ORDER by id desc LIMIT 0,15");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		echo'
		 <a href="'.home_url().'/ar/add/'.$pages['id'].'">         <div class="recent_ad_pic_main">            
                 <div class="recent_ad_pic">                                   				
                <img src="'.home_url().'/xenon-upload/'.$pages['ione'].'">                    
                   

                 

         <!--</div>-->         
         </div>     
     <div class="recent_ad_name">'.$pages['arname'].'</div><div id="recent"><!--<div id="recent_title">Title:</div>--><div class="recent_ad_city">';
	 $city=$pages['city'];
	 $result1 = @mysql_query("SELECT * FROM furrat_city WHERE id='$city' ORDER by id desc");
	 if ( @mysql_num_rows($result1) > 0 ) {
		while($pages1 = @mysql_fetch_array($result1)) {
		echo $pages1['arname'];
		}
		}
	 echo'</div></div><div id="recent2">    <!--<div id="recent_price">Price:</div>--><div class="recent_ad_price"> '.$pages['price'].'$</div></div></div></a>
		';
		}
		}
	 }
	  else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") {
	 $result = @mysql_query("SELECT * FROM furrat_product ORDER by id desc LIMIT 0,15");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		echo'
		 <a href="'.home_url().'/ku/add/'.$pages['id'].'">         <div class="recent_ad_pic_main">            
                 <div class="recent_ad_pic">                                   				
                <img src="'.home_url().'/xenon-upload/'.$pages['ione'].'">                    
                   

                 

         <!--</div>-->         
         </div>     
     <div class="recent_ad_name">'.$pages['kuname'].'</div><div id="recent"><!--<div id="recent_title">Title:</div>--><div class="recent_ad_city">';
	 $city=$pages['city'];
	 $result1 = @mysql_query("SELECT * FROM furrat_city WHERE id='$city' ORDER by id desc");
	 if ( @mysql_num_rows($result1) > 0 ) {
		while($pages1 = @mysql_fetch_array($result1)) {
		echo $pages1['kuname'];
		}
		}
	 echo'</div></div><div id="recent2">    <!--<div id="recent_price">Price:</div>--><div class="recent_ad_price"> '.$pages['price'].'$</div></div></div></a>
		';
		}
		}
	 }
	 else {
	 $result = @mysql_query("SELECT * FROM furrat_product ORDER by id desc LIMIT 0,15");
		if ( @mysql_num_rows($result) > 0 ) {
		while($pages = @mysql_fetch_array($result)) {
		echo'
		 <a href="'.home_url().'/en/add/'.$pages['id'].'">         <div class="recent_ad_pic_main">            
                 <div class="recent_ad_pic">                                   				
                <img src="'.home_url().'/xenon-upload/'.$pages['ione'].'">                    
                   

                 

         <!--</div>-->         
         </div>     
     <div class="recent_ad_name">'.$pages['enname'].'</div><div id="recent"><!--<div id="recent_title">Title:</div>--><div class="recent_ad_city">';
	 $city=$pages['city'];
	 $result1 = @mysql_query("SELECT * FROM furrat_city WHERE id='$city' ORDER by id desc");
	 if ( @mysql_num_rows($result1) > 0 ) {
		while($pages1 = @mysql_fetch_array($result1)) {
		echo $pages1['enname'];
		}
		}
	 echo'</div></div><div id="recent2">    <!--<div id="recent_price">Price:</div>--><div class="recent_ad_price"> '.$pages['price'].'$</div></div></div></a>
		';
		}
		}
	 }
	 ?>
	 
	 
	 <div id="loadadd"></div>

	 
	 
	 <script>function show_more()
{
	//alert('I am working');
	document.getElementById('kurdshopping_show_more').style.display="block";
	document.getElementById('show_more_button').style.display="none";
}</script><div id="new_arival">        <div class="inttext" id="intext">        <span class="seelink"><a id="atext" style="cursor:pointer; color:white; text-decoration:none;" onclick="loadAdd()">
<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'See More'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'رؤية المزيد'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'سەە مۆرە'; }
else { echo'See More'; }
?>
</a></span></div></div><div id="kurdshopping_show_more" style="display:none;">   


	 
	 <div id="new_arival_bottom">        <div class="inttext">        <a href="http://www.kurdshopping.com/en/index.php/recent/ads">        <span class="seelink">New Arrivals</span></a></div>        </div></div></div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
<?php @include('footer.php'); ?>