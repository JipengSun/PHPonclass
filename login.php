<?php
session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
if($username == 'lukas'&& $password== 'lukasbill'){
	$_SESSION['username'] = "lukas";
	$_SESSION['password'] = 'lukasbill';
//echo "Correct!";
header("Location:session.php");
}
else{
//	echo "Wrong!";
	header("Location:loginform.php");
}

?>