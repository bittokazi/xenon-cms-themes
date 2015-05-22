<?php @include('header.php'); ?>
<script>
</script>
<div id="new_arival">         

</div> 



























<?php
function genRandomStringmu111() {
    $length = 10;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = '';    
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters)-1)];
    }
    return $string;
}

$ruris=explode('/',$_SERVER['REQUEST_URI']);
foreach($ruris as $ruri) {
$id=$ruri;
}
$id=md5(md5(md5($id)));
$result = @mysql_query("SELECT * FROM furrat_reset WHERE reset='$id'");
		if ( @mysql_num_rows($result) > 0 ) {
		while($user = @mysql_fetch_array($result)) {
		$addrs=$_SERVER['SERVER_NAME'];
		$un=$user['email'];
		$passgen=genRandomStringmu111();
$pass=md5(md5(md5($passgen)));
$to = "$un"; $subject = "Furrat.com New Password" ; $email = "Furrat.com user Password Reset Email" ; $message = "  
New password: $passgen 
login with this password. You can change it later. </br>
Powered by www.bitto.us"; $headers = "From: furrat-noreply@$addrs"; 
$sent = mail($to, $subject, $message, $headers);
if($sent) {
$query="UPDATE furrat_user SET password='$pass'
WHERE email='$un'";
@mysql_query($query);
@mysql_query("DELETE FROM furrat_reset Where email='$un'");
echo'&nbsp&nbspPASSWORD RESET SUCCESSFULL. CHECK YOUR EMAIL INBOX FOR NEW PASSWORD.<br><br><br><br>';
}
else {
echo'&nbsp&nbspACCESS DENIED.<br><br><br><br>';
}
}
	}
	else {
echo'&nbsp&nbspACCESS DENIED..<br><br><br><br>';
}
	?>






























</div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
<?php @include('footer.php'); ?>