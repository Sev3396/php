<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

$name = $_POST["uname"];
$pass = $_POST["pwd"];


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "SELECT Name,Password FROM basic_info WHERE Name='$name' AND Password='$pass'";
$result = $conn->query($sql);

if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
			// echo "Name:" .$row["Name"]. " Pass:" .$row["Password"]. "<br>";
			echo json_encode(1);
	}
}
	else
	{
			echo json_encode("0");
	}
$conn->close();
?>
