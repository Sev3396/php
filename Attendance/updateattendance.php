<?php 
$servername = "162.222.225.87:3306";
$username = "ebasew8q";
$password = "Password@123";
$dbname = "ebasew8q_itaxi";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id=$_POST["Userid"];
$date=$_POST["Date"];
$outtime=$_POST["OutTime"];
$sql = "SELECT OutTime FROM attendance WHERE Userid='$id' AND Date='$date'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    //$rows = array();
	
	while($r = $result->fetch_assoc()) {
      //$rows[] = $r;
		//print ($r["OutTime"]);
		if($r["OutTime"] == "00:00")
		{
			$mysql_qry="UPDATE attendance SET OutTime='$outtime' WHERE Userid='$id' AND Date='$date'";
	
			if($conn->query($mysql_qry) === TRUE)
			{
				echo "Updated Successfully";
			}
		else
		{
			echo "Error:" . $mysql_qry . "<br>" . $conn->error;
		}
			
		}
		else {
	
			print "Invalid Entry";
		}
		
		
		
    }
	} else {
    echo "0 results";
}

$conn->close();
 
?>