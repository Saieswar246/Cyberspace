<?php

$dbHost= "localhost";
$dbUsername= "root";
$dbPassword = "";
$dbName = "registration";

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	echo "Connection failed!";
}

?>