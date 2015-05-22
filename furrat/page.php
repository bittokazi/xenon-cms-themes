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
<div id="new_arival">                </div> 



  

<?php while ( show_count() < post_count() ) { global $posts,$lolzzc; echo '<div style="margin-left:10px;" id="content" class="float_l">
            	<h2>'.the_title().'</h2>'; 
echo'<p>';

if(is_page()) { echo the_content(); } elseif(is_post()) { echo the_content(); } else { echo the_summery(); }

echo'<br></p></div>';  end_post(); 
} echo error_404();
?>


	    
	 

	 
	 
	 <div id="loadadd"></div>

	 
	 
	 <script>function show_more()
{
	//alert('I am working');
	document.getElementById('kurdshopping_show_more').style.display="block";
	document.getElementById('show_more_button').style.display="none";
}</script><div id="new_arival">        </div><div id="kurdshopping_show_more" style="display:none;">   


	 
	 <div id="new_arival_bottom">        <div class="inttext">        <a href="http://www.kurdshopping.com/en/index.php/recent/ads">        <span class="seelink">New Arrivals</span></a></div>        </div></div></div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
<?php @include('footer.php'); ?>