<?php
	$fp = fopen("log.html", 'a');
    fwrite($fp, "</br>" . $_GET["usermsg"]);
    fclose($fp);
	echo $_GET["usermsg"];
?>