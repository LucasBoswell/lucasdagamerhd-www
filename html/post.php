<?php
	$fp = fopen("chat.html", 'a');
    fwrite($fp, $_GET["usermsg"] . "<br>");
    fclose($fp);
?>