<?php

$patient_name=$_POST['p_name'];
$patient_ic=$_POST['p_ic_number'];
$patient_address=$_POST['p_address'];
$patient_date=$_POST['p_date'];
$time=$_POST['time'];
$patient_gender=$_POST['gender'];
$patient_contact_number=$_POST['p_contact_number'];
$doctor=$_POST['doctor'];
if ( !empty($patient_name)|| !empty($patient_ic) || !empty($patient_address) || !empty($patient_date) || !empty($time) || !empty($patient_gender)|| !empty($patient_contact_number)|| !empty($doctor)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hospital";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into appointment_record (patient_name, patient_ic, patient_address, patient_date,appointment_time,patient_gender,patient_contact_number,doctor) values(?, ?, ?, ?, ?, ?, ?,?)";
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssss", $patient_name, $patient_ic, $patient_address, $patient_date, $time, $patient_gender, $patient_contact_number,$doctor);
      $stmt->execute();
      echo "New record inserted sucessfully";
        header("refresh:2,url=appointment_record.php");
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>