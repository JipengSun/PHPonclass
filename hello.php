<!DOCTYPE html>
<?php
setcookie("admin","Lukas",time()+10,True);
setcookie("Friend","Frank");
setcookie("cookie[three]","Meng");
setcookie("cookie[two]","Zhen");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Phptry</title>
</head>
<body>
	<form method = "POST" action = "welcome.php">
	My Information:<br>
	Name:<input type = "text" name = "username" size = "20"/><br>	
	<input type="submit" value = "Submit" name = "submit" class = "content"/>
	</form>
	<?php
	if(isset($_COOKIE["cookie"]))
	{
		foreach ($_COOKIE["cookie"] as $name => $value) {
			# code...
			echo "$name:$value<br/>";
		}
	}
	//echo "Hello World</br>";
	//$given_name = "Hello";
	//echo strlen($given_name);
	//echo strpos($given_name,"J");
	//echo strcmp($given_name,"Hallo");
	//echo strcmp($given_name,"kipeng");
	//echo $given_name;
	//echo print "hello";
	//echo echo "hello";
	//$str1 = "123456";
	//$str2 = "45";
	//echo strpos($str1,$str2)."</br>";
	//echo strcmp("Hello","hello");
	//echo strcmp("Hello","Hello")."</br>";
	print_r($_COOKIE);
	?>
</body>
</html>