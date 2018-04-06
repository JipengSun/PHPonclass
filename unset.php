<?php
session_start();
echo "Views=".$_SESSION['views']."</br>";
unset($_SESSION['views']);
echo "Views=".$_SESSION['views']."</br>";
?>
<html>
<head>
	<title></title>
</head>
<body>
<a href="http://localhost/session.php">Back to session.php</a></br>
</body>
</html>