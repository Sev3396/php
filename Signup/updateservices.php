<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

$id= $_POST["Auction_ID"];
$no = $_POST["Reg_No"];
$date = $_POST["Date_Time"];
$status = "Pending";
$details = "Empty";


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "INSERT INTO auction_bid (Auction_ID,Roll_No,Status,Date_Time,Details) VALUES('$id','$no','$status','$date','$details')";
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