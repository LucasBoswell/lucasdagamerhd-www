<?php
	$fp = fopen("log.html", 'a');
    fwrite($fp, "</br>" . $_POST["usermsg"]);
    fclose($fp);
?>