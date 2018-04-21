<?php

function createConnection() {
	$dbhost = "localhost";
	$dbuser = "pi";
	$dbpass = getPassword();
	$database = "locationInfo";

	$connection = new mysqli($dbhost, $dbuser, $dbpass, $database)
		or die("Connect failed: %s\n". $connection->error);

	return $connection;
}

function getPassword() {
	$passwordFile = "/home/pi/dbPassword.txt";
	$handle = fopen($passwordFile, "r");
	$contents = fread($handle, filesize($passwordFile));
	fclose($handle);
	return trim($contents);
}

function closeConnection($connection) {
	$connection->close();
}

?>
