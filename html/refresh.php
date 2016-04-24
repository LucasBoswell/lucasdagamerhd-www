<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET["key"])) {
	if($_GET["key"] == "123") {
		echo shell_exec("sh refresh.sh");
		echo "Refreshed. Yay!";
	}
} else echo "Invalid password.";
?>