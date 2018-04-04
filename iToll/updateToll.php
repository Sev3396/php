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
	$pass=$_POST["Password"];
	$amount=$_POST["Account_Balance"];
	$reg=$_POST["Registration_No"];
	$date=$_POST["Date_Time"];
	$mysql_qry="update basic_info set Account_Balance='$amount',Date_time='$date' where Name='$name' AND Password='$pass' ";
	
	if($conn->query($mysql_qry) === TRUE)
	{
		echo "Updated Successfully";
	}
	else
	{
		echo "Error:" . $mysql_qry . "<br>" . $conn->error;
	}

	$conn->close();

	

?>