<?php
	/*$user = 'root';
	$password = 'root';
	$db = 'mybbs';
	$host = 'localhost';
	$port = 3306;


	$con = new MySQLi($host, $user, $password, $db, $port);
	mysqli_set_charset($con, "utf8");
	// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}*/

	// Place db host name. Sometimes "localhost" but
	// sometimes looks like this: >>      ???mysql??.someserver.net
	$db_host = "localhost";
	// Place the username for the MySQL database here
	$db_username = "root";
	// Place the password for the MySQL database here
	$db_pass = "";
	// Place the name for the MySQL database here
	$db_name = "mybbs";

	// Run the actual connection here
	$db = mysqli_connect("$db_host","$db_username","","$db_name") 	or die("could not connect to mysql");
	mysqli_set_charset($db, "utf8");
	// Check connection
	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>
