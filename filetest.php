<?php
if (!file_exists('lukas.txt')){
	exit('Unable to open file!');
}
$file = fopen('lukas.txt','r');
while (!feof($file)) {
	echo fgets($file);
}
fclose($file);
?>