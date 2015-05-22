<form action="#" method="post"><button type="button" class="Kurdshopping_serch_text" style="background: #b5bdc8; /* Old browsers */
background: -moz-linear-gradient(top,  #b5bdc8 0%, #828c95 36%, #28343b 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b5bdc8), color-stop(36%,#828c95), color-stop(100%,#28343b)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #b5bdc8 0%,#828c95 36%,#28343b 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #b5bdc8 0%,#828c95 36%,#28343b 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #b5bdc8 0%,#828c95 36%,#28343b 100%); /* IE10+ */
background: linear-gradient(to bottom,  #b5bdc8 0%,#828c95 36%,#28343b 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b5bdc8', endColorstr='#28343b',GradientType=0 ); /* IE6-9 */
width:80px !important; margin-left:12px;
" onclick="location.href='<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo home_url().'/en/search'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo home_url().'/ar/search'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo home_url().'/ku/search'; }
else { echo home_url().'/en/search'; } ?>'">

<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'Search'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'البحث'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'سۆراخ'; }
else { echo'Search'; }
?>	

</button><div class="Kurdshopping_search" style="width:175px;height:52px;float:left;">

<input onblur="changeClass()" onkeyup="searchFur(this.value)" name="search" id="search" type="text" class="search_fild" placeholder="<?php if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { echo'Enter Search Term'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { echo'أدخل مصطلح البحث'; }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { echo'ئێنتە سێچ تێم'; }
else { echo'Enter Search Term'; }
?>" value=""></input></div></form> 