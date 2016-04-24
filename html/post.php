<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	$fp = fopen("chat.html", 'a');
    fwrite($fp, $_GET["usermsg"] . "<br>");
    fclose($fp);
?>