<?php

function get_connection()
{
	$servername = "mysql8.000webhost.com";
	$username = "a3022695_u1";
	$password = "abc123";
	$db = "a3022695_db";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	} 

	return $conn;
}

function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>