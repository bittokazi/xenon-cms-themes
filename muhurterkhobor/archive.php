<?php xenon_add_header(); ?>

<div id="block3">
<div class="cb">
<div class="title"><h1><?php
if(is_category()) { echo 'বিভাগ : '. category_title(); }
elseif(is_tags()) { echo 'Posts under Tag : '. xenon_tag_title(); }
elseif(is_search()) { echo 'Search result for : '. xenon_search_title(); }
elseif(is_author()) { echo 'Author Name : '. author_title(); }
elseif(isset($_GET['dir']) && $_GET['dir'] == "archive") { echo '&nbsp; মুহূর্তের খবর আর্কাইভ'; }
elseif(is_404()) { echo'Not Found - 404'; } ?></h1></div>



<div style="clear:both; float:left; margin-left: 8px;">
বছর: <select id="year"></select> | 
মাস: <select id="month">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select> | 
দিন: <select id="dates"></select> | 
<button onclick="getStart()">দেখুন</button>
</div>



<script>
var f=0,n=9,po=0;
function changeYear() {
var y=new Date().getFullYear();
var c='';
for (;y>=2014;y--) {
c=c+'<option value="'+y+'">'+y+'</option>';
document.getElementById("year").innerHTML=c;
}
}
function addDate() {
var d='',c='';
var y=new Date()
for (var i=1;i<=31;i++) {
if (i==y.getDate()) { c=' selected="true" '; }
else { c=' '; }
if(i<10) {
d=d+'<option'+c+'value="0'+i+'">0'+i+'</option>';
}
else {
d=d+'<option'+c+'value="'+i+'">'+i+'</option>';
}
document.getElementById("dates").innerHTML=d;
}
}
addDate();
changeYear();


function getResult(page) {
document.body.scrollTop = document.documentElement.scrollTop = 0;
var xmlhttp;
var y,m,d;
d=document.getElementById('dates').value;
m=document.getElementById('month').value;
y=document.getElementById('year').value;
document.getElementById("archive").innerHTML="<img src=\"<?php echo theme_location().'/loading.gif'; ?>\" alt=\"Loading...\" />";
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
	//document.getElementById('fur-search').style.display = 'block';
		document.getElementById("archive").innerHTML="Nothing found<br>";
		if(po==1) { f=f-n; }
	}
	else {
		//document.getElementById('fur-search').style.display = 'block';
		document.getElementById("archive").innerHTML=xmlhttp.responseText;
	}
    }
   }
xmlhttp.open("GET","<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/getarchive/"+y+"-"+m+"-"+d+"?f="+page,true);
xmlhttp.send();
}
function getNexts() {
po=1;
f=f+n;
getResult(f);
}
function getPrevs() {
if(f==0) {

}
else{
f=f-n;
getResult(f);
}
}
function getStart() {
po=0;
f=0;
getResult(f);
}
</script>



<div style="clear:both;"></div>

<div id="archive"></div>

		       <div style="clear:both;"></div>
		     &nbsp; <button onclick="getPrevs()">Back</button> &nbsp; | &nbsp; <button onclick="getNexts()">Next</button>
			<br>
			</div>
<div class="sb">
<?php
            show_xenon_widget('side-bar',
array('before_widget' => '',
'after_widget' => '',
'before_title' => '<div class="wt">',
'after_title' => '</div>',
'before_content' => '',
'after_content' => '<br><br>'
)); ?>
</div>
</div>
</div>

<?php xenon_add_footer(); ?>