<?php
	$user_IP = $_SERVER['REMOTE_ADDR'];
	
	$blocked=array(
	"");
	
	foreach($blocked as $ip) if ($user_IP == $ip) {echo "<h1>Access Denied</h1>";exit();}
?>