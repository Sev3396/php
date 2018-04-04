<?php
require "conn.php";
$name=$_POST["Name"];
$contact_no=$_POST["Contact_No"];
$vehicle=$_POST["Vehicle"];
$reg_no=$_POST["Registration_No"];
$amount=$_POST["Account_Balance"];
$mysql_qry="insert into basic_info(Name,Contact_No,Vehicle,Registration_No,Account_Balance)values('$name','$contact_no','$vehicle','$reg_no','$amount')";
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