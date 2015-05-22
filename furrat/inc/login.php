<?php
echo'

';
echo '<h1>&nbsp; Login</h1>
&nbsp;<div id="lupdate"></div>
<div style="clear:both;"></div>
<form action="?action=login" method="post">
<div id="sun2">
<div class="login_all">Username: <input name="fur-un" id="lun" type="text" value="" placeholder="Username" style="margin-left:0px;">    </div>
<div class="login_all">Password: <input name="fur-pass" id="lpass" type="password" value="" placeholder="Password" style="margin-left:0px;">    </div>
<div id="log_btn" style="margin-top:23px; margin-left:23px;">        <input class="login_next" name="test" type="button" onclick="logIn()" id="register" value="Login" style=" background: none repeat scroll 0 0 red;
    margin-left:15px;">     
        </div>
		</div>
		<div style="clear:both;"></div>
		
		
		<div id="resetpass">
		<h1>&nbsp; Password Reset</h1>
		<div class="login_all">Email: <input id="lpunemail" type="text" value="" placeholder="Email Address" style="margin-left:0px;">    </div>
<div id="log_btn" style="margin-top:23px; margin-left:23px;" style="margin-left:0px;">        <input class="login_next" name="test" type="button" onclick="forgetpass()" id="register" value="Reset Password" style=" background: none repeat scroll 0 0 red;
   margin-left:15px; width:auto;">     
        </div>
		</div>
		
		
		
</form>
<div style="clear:both;"></div><br>
<h1>&nbsp; Signup to post Add</h1>
&nbsp;<div id="supdate"></div>
<div style="clear:both;"></div>';
@include('xenon-themes/furrat/content/signup.php'); if($slate_title_custom=='yes') {
echo'
<form action="?action=signup" method="post">

<div id="sun1">
<div class="login_all">Username: <input name="fur-un" id="sun" type="text" value="" placeholder="Username" style="margin-left:0px;">    </div><div style="clear:both;"></div>
<div class="login_all">Password: <input name="fur-pass" id="spass" type="password" value="" placeholder="Password" style="margin-left:0px;">    </div><div style="clear:both;"></div>
<div class="login_all">Email: <input name="fur-email" id="semail" type="text" value="" placeholder="Email" style="margin-left:0px;">    </div><div style="clear:both;"></div>
<div class="login_all">Cell: <input name="fur-cell" id="scell" type="text" value="" placeholder="Cell Number" style="margin-left:0px;">    </div>
<div id="log_btn" style="margin-top:23px; margin-left:23px;" style="margin-left:0px;">        <input class="login_next" id="sbut" name="test" type="button" onclick="signUp()" id="register" value="Signup" style=" background: none repeat scroll 0 0 red;
    margin-left:15px;">     
        </div>
		</div>
</form>';
}
else { echo'<h3>&nbsp;&nbsp;&nbsp;Signup Disabled</h3><br>'; }
echo'<div style="clear:both;"></div><br>
<br><br>
';
?>