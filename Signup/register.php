<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

$roll = $_POST["Roll_No"];
$mark = $_POST["Mark"];
$stream = $_POST["Stream"];
$spl = $_POST["Specialization"];
$arrear = $_POST["Arrear"];


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "INSERT INTO std_details (Roll_No,Stream,Mark,Specialization,Arrear) VALUES('$roll','$stream','$mark','$spl','$arrear')";
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