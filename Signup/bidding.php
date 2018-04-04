<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

$roll = $_POST["Reg_No"];
$service = $_POST["Services"];



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "INSERT INTO bidding (Reg_No,Services) VALUES('$roll','$service')";
if($conn->query($sql) === TRUE)
	{
		echo "Inserted Successfully";
	}
	else
	{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
$conn->close();
?>