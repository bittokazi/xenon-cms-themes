<?php
echo'
<div style="float:right; text-align:right;">
';
echo '<h1> چوونه&zwnj; ژوور &nbsp;</h1>
&nbsp;<div id="lupdate"></div>
<div style="clear:both;"></div>
<form action="?action=login" method="post">
<div id="sun2">
<div class="login_all" style="float:right; text-align:right; margin-right:10px;">:ناوى بەكاربەر &nbsp;&nbsp;&nbsp;&nbsp;<input name="fur-un" id="lun" type="text" value="" placeholder="Username" style="margin-right:0px;">    </div>
<div class="login_all" style="float:right; text-align:right;  margin-right:10px;">:وشەى نهێنى <input name="fur-pass" id="lpass" type="password" value="" placeholder="Password" style="margin-left:0px;">    </div>
<div id="log_btn" style="margin-top:23px; margin-left:23px; float:right; text-align:right; ">        <input class="login_next" name="test" type="button" onclick="logIn()" id="register" value="چوونه&zwnj; ژوور" style=" background: none repeat scroll 0 0 red;
    margin-left:15px;">     
        </div>
		</div>
		<div style="clear:both;"></div>
		
		
		<div id="resetpass">
		<h1> وشەى نهێنى ڕێك دەخاتەوە دات &nbsp;</h1>
		<div class="login_all" style="float:right; text-align:right;  margin-right:10px;">:ئيمێل &nbsp;<input id="lpunemail" type="text" value="" placeholder="Email Address" style="margin-right:10px;">    </div>
<div id="log_btn" style="margin-top:23px; margin-left:23px; float:right; text-align:right;">        <input class="login_next" name="test" type="button" onclick="forgetpass()" id="register" value="ڕێك دەخاتەوە بە" style=" background: none repeat scroll 0 0 red;
   margin-left:15px; width:auto;">     
        </div>
		</div>
		
		
		
</form>
<div style="clear:both;"></div><br>
<h1> سيگنوپ ئاند گيڤە ئادد &nbsp;</h1>
&nbsp;<div id="supdate"></div>
<div style="clear:both;"></div>';
@include('xenon-themes/furrat/content/signup.php'); if($slate_title_custom=='yes') {
echo'
<form action="?action=signup" method="post">

<div id="sun1">
<div class="login_all" style="float:right; text-align:right; margin-right:10px;">:ناوى بەكاربەر &nbsp;<input name="fur-un" id="sun" type="text" value="" placeholder="Username" style="margin-right:10px;">    </div><div style="clear:both;"></div>
<div class="login_all" style="float:right; text-align:right; margin-right:10px;">:وشەى نهێنى &nbsp;<input name="fur-pass" id="spass" type="password" value="" placeholder="Password" style="margin-right:10px;">    </div><div style="clear:both;"></div>
<div class="login_all" style="float:right; text-align:right; margin-right:10px;">:ئيمێل &nbsp;<input name="fur-email" id="semail" type="text" value="" placeholder="Email" style="margin-right:10px;;">    </div><div style="clear:both;"></div>
<div class="login_all" style="float:right; text-align:right; margin-right:10px;">:خانە &nbsp;<input name="fur-cell" id="scell" type="text" value="" placeholder="Cell Number" style="margin-right:10px;">    </div>
<div id="log_btn" style="margin-top:23px; margin-left:23px; float:right; text-align:right;">        <input class="login_next" id="sbut" name="test" type="button" onclick="signUp()" id="register" value="سيگنوپ" style=" background: none repeat scroll 0 0 red;
    margin-left:15px;">     
        </div>
		</div>
</form>';
}
else { echo'<h3>&nbsp;&nbsp;&nbsp; سيگنوپ ديسابلەد &nbsp;&nbsp;&nbsp;</h3><br>'; }
echo'<div style="clear:both;"></div><br>
<br><br></div>
';
?>