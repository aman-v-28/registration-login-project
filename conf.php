<?php
	// $servername = 'localhost';
	// $user = 'root';
	// $pass = '';
	// $dbname = 'test';

	$servername = 'remotemysql.com';
	$user = '3cqGdTIFQp';
	$pass = 'd232n2IP3y';
	$dbname = '3cqGdTIFQp';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);
	if(!$conn){
		die("Could not connect to the database --> ".mysqli_connect_error());
	}
?>