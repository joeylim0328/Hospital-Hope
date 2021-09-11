<?php
$Name=$_POST['p_name'];
$IC=$_POST['p_ic_number'];
$Contact=$_POST['p_contact_number'];
$Doctor_Specialty=$_POST['doctor_specialty'];
$Doctor_name=$_POST['doctor_name'];
$Date=$_POST['p_date'];
$Time:=$_POST['p_time'];
if(!empty($Name)||!empty($IC)||!empty($Contact)||!empty($Doctor_Specialty)||!empty($Doctor_name)||!empty($p_date)||!empty($p_time)){

		//DATABASE CONNECT	
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "hospital";
        
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		if (mysqli_connect_error()) {    
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}else {
			//$INSERT = "INSERT Into patient_appointment (name, ic, Contact, Doctor_Specialty, Doctor_name, p_date, p_time ) values(?, ?, ?, ?, ?, ?, ?)";
			//$stmt = $conn->prepare($INSERT);
			//$stmt->bind_param("ssssss", $Name, $IC, $Contact, $Doctor_Specialty, $Doctor_name,$p_date,$p_time)
			$stmt->execute();
			echo "Appointment is sucessfully made";
			$stmt->close();
			$conn->close();
		}else {
			echo "All field are required";
			die();
	
?>