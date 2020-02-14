<?php
session_start();
if(!$_SESSION['uid']){
	header('location:quality_login.php');
}


?>