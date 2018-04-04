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


$sql = "SELECT * FROM attendance";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $rows = array();
	
	while($r = $result->fetch_assoc()) {
      $rows[] = $r;
    }
	print json_encode($rows);
} else {
    echo "0 results";
}

$conn->close();
 
?>