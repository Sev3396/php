<?php

$servername = "162.222.225.87:3306";
$username = "ebasew8q";
$password = "Password@123";
$dbname = "ebasew8q_itaxi";
$conn =new  mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$name=$_POST["Name"];
	$password=$_POST["Password"];
	
	$mysql_qry="insert into basic_info(Name,Password )values('$name','$password')";
	
	if($conn->query($mysql_qry) === TRUE)
	{
		echo "Inserted Successfully";
	}
	else
	{
		echo "Error:" . $mysql_qry . "<br>" . $conn->error;
	}

	$conn->close();

	

?>