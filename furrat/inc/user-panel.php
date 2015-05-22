<?php




echo'<h4>&nbsp;<div id="deleteadd"></div>
<div style="clear:both;"></div>








<div id="addupdate"></div>
<div id="add-new" class="add-new-c-hide">



<div id="kurd_pladead_all_content">
<div class="kurdshopping_pament_page_sub">                <p class="kurdshopping_pament_all_sub_left_text" style="display:none;"><input type="text" required="" name="subCatId" id="subCatId" style="visibility:hidden;"><br><label for="catId"></label>  <input type="hidden" name="catId" id="catId" value="15"></p>


<div class="selectcat show_hide3 tTip" onclick="catchange()"><div style="float: left;
    margin-right: 10px;padding-left: 4px;" id="catImg"><img id="catImgsrc" height="35"></div><div id="catTxt">Select A Category</div></div>


	
                    <p></p>
					<div style="clear:both;"></div>
					
					<div class="slidingDiv3" style="width: 871px; display: block;" id="catchange">    <div class="additional-background-allcat"><span class="add-back1"></span><span class="empty-back"></span><span class="add-back2"></span></div>                        <div id="toplistbar"></div>
					
					
					
					<div class="leftmenu_main"><ul id="verticalNav">';   
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
echo'&nbsp;&nbsp;&nbsp;English Title: <input type="text" id="en" value="" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"/>';
$un=$_SESSION['furrat-dash'];
$result = @mysql_query("SELECT * FROM furrat_user Where username='$un'");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
echo'&nbsp;&nbsp;Cell Phone: <input type="text" id="cell" value="'.$pages['cell'].'" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"/><br><br><br>';
echo' <input type="hidden" id="email" value="'.$pages['email'].'" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"/>';
echo'&nbsp;&nbsp;&nbsp;Price($): <input type="text" id="price" value="" style="height: 40px; width:200px; margin-left:33px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"/>';
echo'&nbsp;&nbsp;Name: <input type="text" id="owner" value="" style="height: 40px; width:200px; margin-left:38px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"/><br><br><br>';
}
}
echo'&nbsp;&nbsp;&nbsp;Select City: <select id="city" style="height: 40px; width:205px; margin-left:10px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">';
$result = @mysql_query("SELECT * FROM furrat_city ORDER by id desc");
if ( @mysql_num_rows($result) > 0 ) {
while($pages = @mysql_fetch_array($result)) {
echo'<option value="'.$pages['id'].'">'.$pages['enname'].'</option>';
}
}
echo'</select>';
echo'<div id="com" style="float:left;">&nbsp;&nbsp&nbsp;Company: <select id="showcom1" style="height: 40px; width:200px; margin-left:19px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">';
echo'</select></div><br><br><br>';
echo'&nbsp;&nbsp;&nbsp;Description: <br><br>&nbsp;&nbsp;&nbsp;<textarea id="endes" cols="72" rows="5" style="border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;"></textarea><br>';
echo'<br>
<input type="hidden" id="ione1" value=""/>
<input type="hidden" id="ione2" value=""/>
<input type="hidden" id="ione3" value=""/>
<input type="hidden" id="showcat1" value=""/>
 <div id="istat1" style="float:left;"></div> <div id="istat2"  style="float:left;"></div> <div id="istat3"  style="float:left;"></div><div style="clear:both;"></div>
';
echo'<p id="iu" style="float:left; margin-top:25px;">&nbsp;&nbsp;&nbsp;Image 1: &nbsp;&nbsp;&nbsp;&nbsp;</p><p id="iu" style="float:left;">&nbsp;<input type="file" name="ione" id="ione"  class="custom-file-input"/> 
	
	<input type="button" id="ibut" onclick="imageUpload()" value="Upload" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; cursor:pointer"/>
</p><br><div id="istat" style="clear:both;"></div><div style="clear:both;"></div>';
echo'&nbsp;&nbsp;&nbsp;
<input type="button" id="abut" onclick="addAdd()" value="Submit Add" style="height: 40px; width:200px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; cursor:pointer">
</form></div>
</div>








<div style="clear:both;"></div>
<div id="getaccount"  class="add-new-c-hide"></div>
<div id="getadd"  class="add-new-c-hide"></div>
<div id="editadd" style="display:none;"></div>
<div style="clear:both;"></div>&nbsp; <h2 style="font-size:20px;">

<a  style="cursor:pointer; color:red; text-decoration:none; padding:10px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; background:white; margin-left:10px;"  onclick="showAddnew()">Create New Add</a>

<a  style="cursor:pointer; color:red; text-decoration:none; padding:10px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; background:white; margin-left:10px;"  onclick="getAdd()">Add List</a>

<a  style="cursor:pointer; color:red; text-decoration:none; padding:10px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; background:white; margin-left:10px;"  onclick="getAccount()">Account Settings</a>

<a style="cursor:pointer; color:red; text-decoration:none; padding:10px; border: 1px solid #b4b3b3; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; background:white; margin-left:10px;"  onclick="logOut()">Logout?</a></h2>';
echo'<div style="clear:both;"></div><br>
<div id="loutupdate"></div>
<script>
adddet= document.getElementById(\'add-cont\').clientHeight;
showCat(document.getElementById("parentcat").value);
showCom(document.getElementById("parent").value);
catH = document.getElementById(\'catchange\').offsetHeight;
</script>
<br><br>';




?>