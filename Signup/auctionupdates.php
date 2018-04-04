<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

$id= $_POST["Auction_ID"];
$cgpa = $_POST["CGPA"];
$stream = $_POST["Stream"];
$arrear = $_POST["Arrear"];
$category = $_POST["Category"];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "INSERT INTO updates (Auction_ID,CGPA,Stream,Arrear,Category) VALUES('$id','$cgpa','$stream','$arrear','$category')";
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