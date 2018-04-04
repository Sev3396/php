<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

/* $id= $_POST["Auction_ID"];
$no = $_POST["Reg_No"];
$date = $_POST["Date_Time"];
$status = "Pending";
$details = "Empty"; */


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM auction_bid";
$result = $conn->query($sql);
$count=0;
 $flag['code']=0;
if ($result->num_rows > 0) {
	while($r = $result->fetch_assoc()) {
		$first="select u.Auction_ID, s.Roll_No from updates as u inner join std_details as s on u.CGPA=s.Mark 
		and u.Stream=s.Stream  
		and u.Arrear=s.Arrear where u.Auction_ID='$r[Auction_ID]' and s.Roll_No='$r[Roll_No]'";	
		$result1 = $conn->query($first);
			/* echo "Action id" ;
			echo "$r[Auction_ID]";
				echo "\n" ;
				echo "Rollno" ;
			echo "$r[Roll_No]"; */
			if ($result1->num_rows > 0) {
				// output data of each row
				if($count<=3)
				{
					$accept="update auction_bid SET Status='Accepted',Details='service issued successfully' where Auction_ID='$r[Auction_ID]'
					and Roll_No='$r[Roll_No]'";
					$reject_res= $conn->query($accept);
					 $flag['code']=$count;
				}
				else
				{
					$accept1="update auction_bid SET Status='Rejected',Details='Application Delayed ' where Auction_ID='$r[Auction_ID]'
					and Roll_No='$r[Roll_No]'";
					$reject_res1= $conn->query($accept1);
				}
				$count++;
				//echo "true";
			}
			else
			{
				$reject="update auction_bid SET Status='Rejected',Details='Eligibility Criteria' where Auction_ID='$r[Auction_ID]'
				and Roll_No='$r[Roll_No]'";
				$reject_res= $conn->query($reject);
			}
			
    }
	print(json_encode($flag));
} else {
    echo "0 results";
}


/* $sql= "INSERT INTO auction_bid (Auction_ID,Reg_No,Status,Date_Time,Details) VALUES('$id','$no','$status','$date','$details')";
if($conn->query($sql) === TRUE)
	{
		echo "Inserted Successfully";
	}
	else
	{
		echo "Error:" . $sql . "<br>" . $conn->error;
	} */
$conn->close();
?>