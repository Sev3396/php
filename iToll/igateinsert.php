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
	$vehicle=$_POST["Vehicle"];
	$reg=$_POST["Registration_No"];
	$debit=$_POST["Amount_detected"];
	$amount=$_POST["Account_Balance"];
	$date=$_POST["Date_Time"];
	$mysql_qry="insert into igate(Name,Vehicle,Registration_No,Amount_detected,Account_Balance,Date_Time)values('$name','$vehicle',		    '$reg','$debit','$amount','$date')";
	
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