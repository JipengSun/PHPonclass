<?php
session_start();
if (isset($_SESSION['username'])&&isset($_SESSION['password'])) {


	header("Location:session.php");
}
?>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
<form method = "POST" action = "login.php">
	Login Information:<br>
	Username: <input type="text" name="username" size='20' class='content'/><br>
	Password: <input type='password' name='password' size ='20' class ='content'><br>
<input type="submit" value ="Submit" name='submit' class='content'/>
<input type='reset' value='Reset' class='content'/>
</form>
</body>
</html>