<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST["key"])) {
	if($_POST["key"] == "123") {
		exec("sh refresh.sh");
		echo "Refreshed.";
	}
} else echo "Invalid password.";
?>