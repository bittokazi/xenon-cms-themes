<?php 
@session_start();
if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="en") { $_SESSION['furrat-lan']="en"; @header('Location: en'); }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ar") { $_SESSION['furrat-lan']="ar"; @header('Location: ar'); }
else  if(isset($_SESSION['furrat-lan']) && $_SESSION['furrat-lan']=="ku") { $_SESSION['furrat-lan']="ku"; @header('Location: ku'); }
else { $_SESSION['furrat-lan']="en"; @header('Location: en'); }
 ?>