<?php
	$servername = "localhost";
	$username="root";
	$password="";
	$dbname="iconsite";

	$conn = mysqli_connect($servername, $username, $password, $dbname)
        or die('Error Connecting to MySQL DataBase');

?>