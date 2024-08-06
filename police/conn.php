<?php

    $host = "localhost";
	$user = "root";
	$pass = "";
	$database="onefarm";

	$db=mysqli_connect($host,$user,$pass,$database);
	if(!$db){
		die("Connection failed".mysqli_connect_error());
	}

?>