<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<nav class="navtop">
			<div>
				<h1>CHECK APPOINTMENT</h1>
                <a href="back-admin.php" style="font-family: 'Ubuntu', sans-serif;"><i class="fas fa-sign-out-alt" ></i>Back</a>
			</div>
		</nav>
<div class="container4">
<?php
$conn = mysqli_connect("localhost", "root", "", "hospital");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM appointment_record";
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result) > 0) {
?>
<table class="table">
<table border="1">
	<tr>
		<th>Patient Id</th>
		<th>Patient Name</th>
		<th>Patient Ic</th>
		<th>Patient Address</th>
		<th>Appointment Date</th>
		<th>Appointment Time</th>
		<th>Patient Gender</th>
		<th>Patient Contact Number</th>
		<th>Doctor</th>
		<th>Action</th>
	</tr>
<?php
// output data of each row
while($row=mysqli_fetch_array($result)){
	$id=$row["patient_id"];
	echo "<tr><td>" . $id. 
	"</td><td>" . $row["patient_name"] .
	"</td><td>" . $row["patient_ic"]. 
	"</td><td>". $row["patient_address"] . 
	"</td><td>". $row["patient_date"] . 
	"</td><td>" .$row["appointment_time"]. 
	"</td><td>" . $row["patient_gender"].
	"</td><td>" . $row["patient_contact_number"].
	"</td><td>" . $row["doctor"]."</td>"
?>
	<td><a href="delete-appointment.php?delete=<?php echo $id; ?>" onclick="return confirm('Do you sure you want to delete the record?');">Delete</a>
<?php
	"</td></tr>";
}
echo "</table>";
?>
    </table></table>
                                                                                                                                          </bod
<?php
} else { echo "No Appointment. You will be redirected to previous page in 3.";
            header("refresh:3; url= home.php");; }
$conn->close();
?>
    
    <br>
    <br>
    <br>
    <br>
    <td><a href="home.php"></a></td>
    </div>
</body>
</html>
