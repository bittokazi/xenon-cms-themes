<?php @include('header.php'); ?>
<script>
var iu=15,lu=0;
function loadCat() {
document.getElementById('divloader').className = "div-loaders";
document.getElementById('dlmsg').innerHTML='Loading More Adds...';
if(intervaldl==0) {
setTimeout(function(){
    if(intervaldl==0) { intervaldl=1; loadCat(); }
}, intervaltime);
}
else if(intervaldl==1) {
intervaldl=0;
var xmlhttp;
var txt,id,un,msg,str22,str23,str24,str25,x,i;
str22=document.getElementById("cat").value;
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
xmlhttp.open("GET","<?php echo home_url(); ?>/core?action=loadcat&start="+iu+"&cat="+str22,true);
xmlhttp.send();
}
}



function showCom(cat) {
document.getElementById('com').style.display = 'none';
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
			document.getElementById('com').style.display = 'none';
			document.getElementById("showcom1").innerHTML='<option value=""></option>';
			if ( lu==0 ) {  } else { searchFurrat(); }
		}
		else {
			document.getElementById('com').style.display = 'block';
			document.getElementById("showcom1").innerHTML=xmlhttp.responseText;
			if ( lu==0 ) {  } else { searchFurrat(); }
		}	
    }
   }
xmlhttp.open("GET","<?php echo home_url(); ?>/core?action=showcom&com="+cat,true);
xmlhttp.send();
}



function showCat(cat) {
document.getElementById('subcat').style.display = 'none';
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
			document.getElementById('subcat').style.display = 'none';
		}
		else {
			document.getElementById('subcat').style.display = 'block';
			document.getElementById("subcat").innerHTML=xmlhttp.responseText;
		}
	showCom(cat);		
    }
   }
xmlhttp.open("GET","<?php echo home_url(); ?>/core?action=showcat&cat="+cat,true);
xmlhttp.send();
}





function openDivcat() {
var NAME;
if(xcc<=catH) {
document.getElementById('catchange').style.height=(catH-xcc)+"px";
xcc++;
}
else {
xcc--;
clearInterval(myVar);
}
}
function closeDivcat() {
if(xcc>=0) {
document.getElementById('catchange').style.height=(catH-xcc)+"px";
xcc--;
}
else {
document.getElementById('catchange').style.height="auto";
xcc++;
clearInterval(myVar);
}
}

function catchange() {
if(document.getElementById('catchange').clientHeight>0) {
catH = document.getElementById('catchange').clientHeight;
xcc=0;
myVar = setInterval(function(){openDivcat()},1);
}
else if(document.getElementById('catchange').clientHeight==0) {
xcc=catH;
myVar = setInterval(function(){closeDivcat()},1);
}
}

function catselect(cat,catid) {
document.getElementById("en").value='';
showCom(catid);
document.getElementById("showcat1").value=catid;
document.getElementById("catTxt").innerHTML=cat;
document.getElementById("add-cont").className = "add-cont-css";
catH = document.getElementById('catchange').clientHeight;
xcc=0;
if ( lu==0 ) { lu=1; searchFurrat(); }
myVar = setInterval(function(){openDivcat()},1);
}


function searchFurrat() {
iu=15;
document.getElementById("atext").innerHTML = 'Show More';
var xmlhttp;
var txt,id,un,msg,en,ar,ku,endes,ardes,kudes,city,cat,com,ione,itwo,ithree,owner,cell,email,price,i,min,max;
cat=document.getElementById("showcat1").value;
if(document.getElementById("showcom1").value!='') { com=document.getElementById("showcom1").value; } else { com='bittotheboss' }
city=document.getElementById("city").value;
if(document.getElementById("en").value!='') { en=document.getElementById("en").value; } else { en='bittotheboss' }
if(document.getElementById("min").value!='') { min=document.getElementById("min").value; } else { min='bittotheboss' }
if(document.getElementById("max").value!='') { max=document.getElementById("max").value; } else { max='bittotheboss' }
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
		document.getElementById("searchload").innerHTML="<div style=\"float:left; margin-left:10px;\">Nothing Found</div>";
		
	}
	else if(xmlhttp.responseText=="yes") {
		document.getElementById("addupdate").innerHTML="<h2>&nbsp;&nbsp;&nbsp;Addvertise Added Successfully</h2>";
		document.getElementById("add-new").style.display = 'none';
		cleardivloadercall('Addvertise Added Successfully');
	}
	else {
		document.getElementById("searchload").innerHTML=xmlhttp.responseText;
	}
    }
   }
xmlhttp.open("POST","<?php echo home_url(); ?>/core?action=searchfurrat",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("en="+en+"&city="+city+"&cat="+cat+"&com="+com+"&min="+min+"&max="+max);
}

var iu=15;
function searchFurratmore() {
var xmlhttp;
var txt,id,un,msg,en,ar,ku,endes,ardes,kudes,city,cat,com,ione,itwo,ithree,owner,cell,email,price,i,min,max;
cat=document.getElementById("showcat1").value;
if(document.getElementById("showcom1").value!='') { com=document.getElementById("showcom1").value; } else { com='bittotheboss' }
city=document.getElementById("city").value;
if(document.getElementById("en").value!='') { en=document.getElementById("en").value; } else { en='bittotheboss' }
if(document.getElementById("min").value!='') { min=document.getElementById("min").value; } else { min='bittotheboss' }
if(document.getElementById("max").value!='') { max=document.getElementById("max").value; } else { max='bittotheboss' }
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
		document.getElementById("atext").innerHTML = 'Nothing to show';
	}
	else {
		document.getElementById("searchload").innerHTML=document.getElementById("searchload").innerHTML+xmlhttp.responseText;
			iu=iu+15;

	}
    }
   }
xmlhttp.open("POST","<?php echo home_url(); ?>/core?action=searchfurratmore&start="+iu,true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("en="+en+"&city="+city+"&cat="+cat+"&com="+com+"&min="+min+"&max="+max);
}
</script>
<?php 	 foreach($ruris as $ruri) {
$id=$ruri;
}
echo '<input type="hidden" value="'.$id.'" id="cat"/>';
?>
<div id="new_arival">        <div class="inttext">        <span class="seelink">Search</span></div>        </div> 




















 <div id="add-new" class="add-new-c">



<div id="kurd_pladead_all_content">
<div class="kurdshopping_pament_page_sub">                <p class="kurdshopping_pament_all_sub_left_text" style="display:none;"><input type="text" required="" name="subCatId" id="subCatId" style="visibility:hidden;"><br><label for="catId"></label>  <input type="hidden" name="catId" id="catId" value="15"></p>


<div class="selectcat show_hide3 tTip" onclick="catchange()"><div style="float: left;
    margin-right: 10px;padding-left: 4px;" id="catImg"><img id="catImgsrc" height="35"></div><div id="catTxt">Select A Category</div></div>


	
                    <p></p>
					<div style="clear:both;"></div>
					
					<div class="slidingDiv3" style="width: 871px; display: block;" id="catchange">    <div class="additional-background-allcat"><span class="add-back1"></span><span class="empty-back"></span><span class="add-back2"></span></div>                        <div id="toplistbar"></div>
					
					
					
					<div class="leftmenu_main"><ul id="verticalNav">  
<?php					
$result = @mysql_query("SELECT * FROM furrat_cat Where parent='0' ORDER by id desc");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
echo'<li onclick="showCat(this.value)" rel="panel" id="parentcat" cl="#16" style="cursor:pointer" class="" value="'.$pages['id'].'"><a>'.$pages['enname'].'</a></li>';
}
}													
echo'
</ul></div>
													
													









													<div id="sections"> 								       
													<div class="section" id="subcat" style="display: block;"></div>        						    
														
														</div>                    
														
														
														</div>                <p></p>
														</div>
</div>
<div id="add-cont" class="add-cont-css-hide"><form action="xenon-theme-settings.php?theme=furrat-admin&action=add-cat" method="post"
enctype="multipart/form-data">';
echo'&nbsp;&nbsp;&nbsp;Search Title: <input type="text" id="en" value="" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"  onkeyup="searchFurrat()"/>';

echo'&nbsp;&nbsp;&nbspSelect City: <select id="city" style="height: 40px; width:205px; margin-left:10px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;" onchange="searchFurrat()">';
$result = @mysql_query("SELECT * FROM furrat_city ORDER by id desc");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
echo'<option value="'.$pages['id'].'">'.$pages['enname'].'</option>';
}
}
echo'</select><br><br>';

echo'&nbsp;&nbsp;&nbsp;Mini price($): <input type="text" id="min" value="" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"  onkeyup="searchFurrat()"/>';
echo'&nbsp;&nbsp;&nbsp;Max Price($): <input type="text" id="max" value="" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"  onkeyup="searchFurrat()"/>';
echo'<br><br>';
echo'<div id="com" style="float:left;">&nbsp;&nbsp&nbsp;Company: <select onchange="searchFurrat()" id="showcom1" style="height: 40px; width:200px; margin-left:19px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">';
echo'</select></div><br><br><br>';
echo'';
echo'<br>
<input type="hidden" id="showcat1" value=""/><div style="clear:both;"></div>
';
echo'<div style="clear:both;"></div>';
echo'
</form></div>';

?>
</div>







	    
	 
<div id="searchload"></div>
	 
	 
	 <div id="loadadd"></div>

	 
	 
	 <script>function show_more()
{
	//alert('I am working');
	document.getElementById('kurdshopping_show_more').style.display="block";
	document.getElementById('show_more_button').style.display="none";
}</script><div id="new_arival">        <div class="inttext" id="intext">        <span class="seelink"><a id="atext" style="cursor:pointer; color:white; text-decoration:none;" onclick="searchFurratmore()">Show More</a></span></div></div><div id="kurdshopping_show_more" style="display:none;">   


	 
	 <div id="new_arival_bottom">        <div class="inttext">        <a href="http://www.kurdshopping.com/en/index.php/recent/ads">        <span class="seelink">New Arrivals</span></a></div>        </div></div></div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
<?php @include('footer.php'); ?>