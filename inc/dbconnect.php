<?php
$servername="localhost";
$username="root";
$password="";
$dbname="onefarm";

$conn = new mysqli($servername, $username, $password, $dbname);

//session_start();

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
else
	//echo 'connection successfull!';



?>