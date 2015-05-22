<?php
echo'

		<div class="login_all" style="float:right; text-align:right; margin-right:10px;">      <input type="text" value="" placeholder="اسم المستخدم" id="lpun"/>    </div>    
		<div class="login_all" style="float:right; text-align:right;">     
      
        <input type="password" value="" placeholder="******" id="lppw"/>      </div> 

		<div class="login_all_btn" style="float:right; text-align:right; margin-right:-12px; margin-left:02px;">        
		
		<div id="log_btn" style="float:right; text-align:right;">        <input class="login_next" name="test" type="button" value="تسجيل الدخول" style=" background: none repeat scroll 0 0 red;
    margin-right: 5px;" onclick="logIn11()"/>     
        </div>           
		
		<div id="log_btn" style="float:right; text-align:right;">               <a href="'.home_url().'/dashboard"><input class="login_next" type="button" value="نسيت كلمة" style="background: none repeat scroll 0 0 #2387C8;
    width: 162px;"/></a>     </div>
	
	</div>'; 
	
?>