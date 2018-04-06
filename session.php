<?php
session_start();
if(!isset($_SESSION['username'])||!isset($_SESSION['password'])){
	header("Location:login.php");
}
if(isset($_SESSION['views']))
	$_SESSION['views'] = $_SESSION['views']+1;
else
	$_SESSION['views']=1;
echo "Views=".$_SESSION['views']."</br>";
if(isset($_SESSION['views1']))
	$_SESSION['views1']= $_SESSION['views1']+1;
else
	$_SESSION['views1']=1;
echo "View1=".$_SESSION['views1']."</br>";
?>
<html>
<head>
	<title></title>
</head>
<body>

<a href="http://localhost/destroySession.php">Destroy Session</a></br>
<a href="http://localhost/unset.php">Unset Views</a></br>
<form action="upload_file.php" method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file"/>
    <br/>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>