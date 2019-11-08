<?php
	date_default_timezone_set('America/New_York');
	$dbhost = 'localhost';
	$dbuser = 'wali-tech';
	$dbpass = 'walilaboni420';
	$dbname = 'join';

	$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
?>
