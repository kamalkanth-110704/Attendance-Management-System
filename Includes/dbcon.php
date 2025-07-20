<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "attendance";
	
	$conn = new mysqli("localhost", "root", "Kamal@123", "attendance");
;
	if($conn->connect_error){
		echo "Seems like you have not configured the database. Failed To Connect to database:" . $conn->connect_error;
	}
?>
