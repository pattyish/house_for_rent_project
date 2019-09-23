<?php
    ini_set('display_errors', 1);
	$con = $conn = new mysqli('localhost', 'housemajor_user', 'housemajor#$', 'housemajor_db');

	if(!$conn){
	    die("We can't connect");
		die($conn->connect_error);
	}
	
?>
