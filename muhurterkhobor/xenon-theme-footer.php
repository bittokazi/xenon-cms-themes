<div style="clear:both;"></div>
<div id="footer">
<div id="footerstripe"></div>
<div id="footertext">
<p style="line-height:1.8em; color:black; float:left; width:280px;">
<img src="<?php echo theme_location(); ?>/images/logo_n.png" width="220px" height="70px" />
</p>
<p style="line-height:1.8em; color:white; float:left; font-size:14px; width:320px; margin-left:0px;">
সম্পাদকঃ হাসান মাহমুদ পলাশ<br>
বার্তা ও বাণিজ্যিক কার্যালয়ঃ উইকম লিমিটেড, ৮০/৩, গ্রীন রোড, ফার্মগেট, ঢাকা-১২১৫<br>
উইকম লিমিটেডের পক্ষে রিয়াদ খান জনি কর্তৃক প্রকাশিত
</p>
<p style="line-height:1.8em; color:white; font-size:14px; float:left; width:310px; margin-left:40px;">
ফোনঃ ০২৯১৪৩৭৫৯(বার্তা),০১৯১১-৫০৪৭৫০<br>
ইমেইলঃ muhurterkhobor&#64;gmail&#46;com<br> 
স্বত্বাধিকার ©2014 wecommltd.com এর সকল সত্ত্ব সংরক্ষিত
</p>
<div style="clear:both;"></div>
<div style="margin:0 auto; position:relative; text-align:center; color:red;">
Powered By <a style="text-decoration:none; color:red;" href="http://www.wecommltd.com" target="_blank">Wecomm Limited</a>
</div>
</div>
</div>
<?php $bwbn="";
@include('content/bn.php');
if ($bwbn!="") {
echo '
<div style="   position: fixed;
    z-index: 100; 
    bottom: 0; 
	clear: both;
    left: 0;
	float:left;
	margin:0;
	height: 35px;
    width: 100%; background: red;">
<div style="height: 35px; float: left; padding:3px; font-size: 30px; background: blue; color: white;">BREAKING NEWS</div>
<div style="height: 35px; padding:3px; font-size: 30px; background: red; color: white; width:100%;">';
echo"<marquee onmouseover=\"this.setAttribute('scrollamount', 0, 0);\" onmouseout=\"this.setAttribute('scrollamount', 6, 0);\" scrollamount=\"6\">";
echo $bwbn.'</marquee>
</div>
</div>
<div style="clear:both;"></div>
';
}
 ?>
 <div style="width:100%; position:fixed; height:41px; top:0px; left:0px; background:black; z-index:999;" id="bk1"></div>
 <div id="ontop" style=" padding:5px; border-radius:3px; position:fixed; background:#3d4c54; bottom:50px; right:20px; cursor:pointer;" onclick="topAction()"><img src="<?php echo theme_location(); ?>/images/up-arrow.png"/></div>
 
 

 
 
 <div id="FexedFB" style="   position: fixed;
    z-index: 100; 
    bottom: 100px; 
	clear: both;
    left: 5px;
	float:left;
	margin:0;
	height: 0px;
	width:47px;
 background: white;
 border: solid 2px black;
 overflow: hidden;">
	<div style="float:left; clear:both;">
	<div class="fb-like" data-href="https://www.facebook.com/muhurterkhobor" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>
	</div>
 
<script>
var ffbheight=0,myVar222;
function loadFexedFB() {
	if(ffbheight<=86) {
	document.getElementById("FexedFB").style.height=ffbheight+'px';
	ffbheight++;
	}
	else {
	clearInterval(myVar222);
	}
}
function changeFFHeight() {
		myVar222 = setInterval(function(){loadFexedFB();},50);
}
changeFFHeight();
</script> 
 
</body>
</html>