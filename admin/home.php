<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
            <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	</head>
	<body>
		<nav class="navtop">
			<div>
				<h1 style="font-family: 'Ubuntu', sans-serif;">ADMIN PAGE</h1>
				<a href="logout.php" style="font-family: 'Ubuntu', sans-serif;"><i class="fas fa-sign-out-alt" ></i>Logout</a>
			</div>
		</nav>
        <div class="container2">
            <div><img src="function_icon.png">
                <h2 style="color:white">FUNCTIONS</h2></div>
			<p>Welcome, <?=$_SESSION['name']?>!</p>
            
            <a href="add-doctor.html">
            <button id="btn-add" class="btn-add">Add Doctor</button>
            </a>
            <br>
            <a href="search-doctor.php">
            <button id="btn-modify" class="btn-modify">Edit Doctor Records</button>
            </a>
            <br>
            <a href="http://localhost/hospitalhope/patient record/patient_record/patient_record.html">
            <button id="btn-patient" class="btn-patient">Patient Records</button>
            </a>
			<br>
            <a href="check-appointment.php">
            <button id="btn-patient" class="btn-patient">Check Appointment</button>
            </a>
                
		</div>
	</body>
</html>