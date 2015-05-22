<?php
//poll
function bdwave_poll_home() {
echo '<h3>POLL MENU</h3>
<p>ADD NEW QUESTION</p>
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&newpage=add_new_poll" method="post">
<input type="text" name="name"><br>
<input type="hidden" name="type" value="poll">
<input type="submit" name="submit" value="Submit" /></form></h4>
<h3>POll List</h3>';
$result1p = @mysql_query("SELECT * FROM bdwave_poll ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1p) > 0 ) {
while($general = @mysql_fetch_array($result1p)) {
echo '<p>ID: '.$general['id'].' widget name: '.$general['name'].'  YES: '.$general['yes'].' NO: '.$general['no'].' Type: '.$general['yes'].' NO-comment: '.$general['nothing'].'  >>>> <a href="xenon-theme-settings.php?theme=bdwave-admin&newpage=edit_result_poll_p&poll_id_c='.$general['id'].'">Edit result</a>  /////  <a href="xenon-theme-settings.php?theme=bdwave-admin&polldeleteid='.$general['id'].'">delete</a> </p><br>';
}
}
}
//cheating poll
function bdwave_poll_cheat() {
$pollid=$_GET['poll_id_c'];
$result1p = @mysql_query("SELECT * FROM bdwave_poll WHERE id='$pollid'");
if ( @mysql_num_rows($result1p) > 0 ) {
echo '<h3>Edit poll results</h3>
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&newpage=edit_result_poll" method="post">
yes: <input type="text" name="yes"><br>
no: <input type="text" name="no"><br>
no comment: <input type="text" name="noc"><br>
<input type="hidden" name="id" value="'.$_GET['poll_id_c'].'">
<input type="submit" name="submit" value="Submit" /></form></h4>';
}
}
function bdwave_poll_cheat_action() {
if ( isset($_POST['yes']) && isset($_POST['id']) && isset($_POST['no']) && isset($_POST['noc']) ) {
$pollid=$_POST['id'];
$y=defence_sql_injection($_POST['yes']);
$n=defence_sql_injection($_POST['no']);
$nc=defence_sql_injection($_POST['noc']);
$result1p = @mysql_query("SELECT * FROM bdwave_poll WHERE id='$pollid'");
if ( @mysql_num_rows($result1p) > 0 ) {
$query="UPDATE bdwave_poll SET yes = '$y'
WHERE id = '$pollid'";
@mysql_query($query);
$query="UPDATE bdwave_poll SET no = '$n'
WHERE id = '$pollid'";
@mysql_query($query);
$query="UPDATE bdwave_poll SET nothing = '$nc'
WHERE id = '$pollid'";
@mysql_query($query);
echo'<br>POLL RESULT MODIFIED :D<br>';
}
}
}
function bdwave_new_poll_add() {
$result = @mysql_query("SELECT * FROM bdwave_menu");
if ( @mysql_num_rows($result) > 0 ) {
while($general = @mysql_fetch_array($result)) {
$serial=$general['id']+1;
}
}
else {
$serial=1;
}
$name=defence_sql_injection($_POST['name']);
$query="INSERT INTO bdwave_poll VALUES ('','$name','0','0','0')";
@mysql_query($query);
echo'Added POll';
}
//poll finish
function poll_increament_bdwave() {
if ( isset($_POST['poll_yes']) && $_POST['poll_yes']=="yes" ) {
$pollid=$_POST['poll_id'];
$result1p = @mysql_query("SELECT * FROM bdwave_poll WHERE id='$pollid'");
if ( @mysql_num_rows($result1p) > 0 ) {
while($generalpo = @mysql_fetch_array($result1p)) {
$c=$generalpo['yes']+1;
$query="UPDATE bdwave_poll SET yes = '$c'
WHERE id = '$pollid'";
@mysql_query($query);
ob_start();
session_start();
$_SESSION['poll']="yes";
ob_flush();
}
}
}
elseif ( isset($_POST['poll_no']) && $_POST['poll_no']=="no" ) {
$pollid=$_POST['poll_id'];
$result1p = @mysql_query("SELECT * FROM bdwave_poll WHERE id='$pollid'");
if ( @mysql_num_rows($result1p) > 0 ) {
while($generalpo = @mysql_fetch_array($result1p)) {
$c=$generalpo['no']+1;
$query="UPDATE bdwave_poll SET no = '$c'
WHERE id = '$pollid'";
mysql_query($query);
ob_start();
session_start();
$_SESSION['poll']="no";
ob_flush();
}
}
}
elseif( isset($_POST['poll_not']) && $_POST['poll_not']=="not" ) {
$pollid=$_POST['poll_id'];
$result1p = @mysql_query("SELECT * FROM bdwave_poll WHERE id='$pollid'");
if ( @mysql_num_rows($result1p) > 0 ) {
while($generalpo = @mysql_fetch_array($result1p)) {
$c=$generalpo['nothing']+1;
$query="UPDATE bdwave_poll SET nothing = '$c'
WHERE id = '$pollid'";
mysql_query($query);
ob_start();
session_start();
$_SESSION['poll']="not";
ob_flush();
}
}
}
}
function poll_delete() {
$pollid=defence_sql_injection($_GET['polldeleteid']);
$result1p = @mysql_query("SELECT * FROM bdwave_poll WHERE id='$pollid'");
if ( @mysql_num_rows($result1p) > 0 ) {
mysql_query("DELETE FROM bdwave_poll WHERE id='$pollid'");
echo'Deleted POll Item';
}
}
poll_increament_bdwave();
?>