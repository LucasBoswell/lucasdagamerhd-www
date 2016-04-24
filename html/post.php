<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if(isset($_SESSION['name'])){
	$text = $_POST['text'];
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	fclose($fp);
}
?>