<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 //$data="Frelancer job";
$data=$_POST["Data"];

$sql = "SELECT * FROM updates WHERE Category='$data'";
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