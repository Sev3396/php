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
	$contact_no=$_POST["Contact_No"];
	$vehicle=$_POST["Vehicle"];
	$reg_no=$_POST["Registration_No"];
	$amount=$_POST["Account_Balance"];
	$date=$_POST["Date_Time"];
	$district=$_POST["District"];
	
	$mysql_qry="insert into basic_info(Name,Password,Contact_No,Vehicle,Registration_No,Account_Balance,Date_Time,District )values('$name','$password','$contact_no','$vehicle','$reg_no','$amount','$date','$district')";
	
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