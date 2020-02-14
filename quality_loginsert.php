<?php
session_start();
include'lib/connection.php';


$uname=$_POST['name'];
$upass=$_POST['password'];



$sql="select * from `qualitylogin` where `name`='$uname' and `password`='$upass'";
$res=mysqli_query($conn,$sql);
while($num=mysqli_num_rows($res)){
	if($num > 0){
		$row=mysqli_fetch_array($res);
		$_SESSION['uid'] = $row['id'];
		$_SESSION["uname"] = $row['name'];

		header('location:alluser_display.php');
	}

	else{
		echo " wrong passwod/ email id";
	}

}

?>