<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "onefarm";  //database

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname); // connecting 
	if(!$conn){
		echo "Connection Failed";
	}
?> 