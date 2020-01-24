<?php
	$ip = $_SERVER{'REMOTE_ADDR'};
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ipList = preg_split('/,/', $_SERVER['HTTP_X_FORWARDED_FOR']);
		$ip = $ipList[0];
	}
	print $ip;
?>
