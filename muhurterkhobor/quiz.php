<?php
//quiz
function bdwave_quiz_home() {
echo '<h3>QUIZ MENU</h3>
<p>ADD NEW QUIZ QUESTION</p>
<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&newpage=add_new_quiz" method="post">
<input type="text" name="name"><br>
<input type="text" name="ans"><br>
<input type="hidden" name="type" value="quiz">
<input type="submit" name="submit" value="Submit" /></form></h4>


<h3>ADD QUIZ WINNER</h3>

<h4><form action="xenon-theme-settings.php?theme=bdwave-admin&newpage=add_new_quizw" method="post">
Quiz: <input type="text" name="name"><br>
Winner: <input type="text" name="winner"><br>
<input type="submit" name="submit" value="Submit" /></form></h4>
<h3>QUIZ List</h3>';
$result1p = @mysql_query("SELECT * FROM bdwave_quiz ORDER by id desc LIMIT 0,10");
if ( @mysql_num_rows($result1p) > 0 ) {
while($general = @mysql_fetch_array($result1p)) {
echo '<p>ID: '.$general['id'].' widget name: '.$general['name'].'  ANSWER: '.$general['answer'].' DATE: '.$general['date'].' >>>> <a href="xenon-theme-settings.php?theme=bdwave-admin&newpage=quiz_result&quiz_id_c='.$general['id'].'">Show public answers</a>  /////  <a href="xenon-theme-settings.php?theme=bdwave-admin&polldeleteid='.$general['id'].'">delete</a> </p><br>';
}
}
}

function bdwave_quiz_home_single() {
echo '
<h3>QUIZ Result</h3>';
$quizid=defence_sql_injection($_GET['quiz_id_c']);
$result1p = @mysql_query("SELECT * FROM bdwave_quizc WHERE quiz='$quizid' ORDER by id desc");
if ( @mysql_num_rows($result1p) > 0 ) {
while($general = @mysql_fetch_array($result1p)) {
echo '<p>ID: '.$general['id'].'  name: '.$general['name'].'  ANSWER: '.$general['answer'].' Details: '.$general['details'].'  </p><br>';
}
}
}


function bdwave_new_quiz_add() {
$name=defence_sql_injection($_POST['name']);
$ans=defence_sql_injection($_POST['ans']);
$query="INSERT INTO bdwave_quiz VALUES ('','$name','$ans',CURDATE())";
@mysql_query($query);
echo'Added NEW Quiz';
}
function bdwave_new_quizw_add() {
$name=defence_sql_injection($_POST['name']);
$ans=defence_sql_injection($_POST['winner']);
$query="INSERT INTO bdwave_quizw VALUES ('','$name','$ans')";
@mysql_query($query);
echo'Added NEW winner';
}
//quiz finish


function quiz_increament_bdwave() {
if ( isset($_POST['quiz_id']) && isset($_POST['quiz_ans']) && $_POST['quiz_ans']!="" ) {
$quizid=defence_sql_injection($_POST['quiz_id']);
$name=defence_sql_injection($_POST['quiz_name']);
$quizans=defence_sql_injection($_POST['quiz_ans']);
$details=defence_sql_injection($_POST['quiz_details']);
$query="INSERT INTO bdwave_quizc VALUES ('','$quizid','$name','$quizans','$details')";
@mysql_query($query);
ob_start();
session_start();
$_SESSION['quiz']=$quizans;
ob_flush();
}
}
quiz_increament_bdwave();
?>