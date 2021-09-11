<?php
$patient_name=$_POST['p_name'];
$patient_ic=$_POST['p_ic_number'];
$patient_address=$_POST['p_address'];
$patient_date_of_birth=$_POST['p_date_of_birth'];
$patient_gender=$_POST['gender'];
$patient_contact_number=$_POST['p_contact_number'];
if (!empty($patient_name) || !empty($patient_ic) || !empty($patient_address) || !empty($patient_date_of_birth) || !empty($patient_gender) || !empty($patient_contact_number)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hospital";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into patient_record (patient_name, patient_ic, patient_address, patient_date_of_birth,patient_gender,patient_contact_number) values(?, ?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssss", $patient_name, $patient_ic, $patient_address, $patient_date_of_birth, $patient_gender, $patient_contact_number);
      $stmt->execute();
      echo "New record inserted sucessfully. You will be redirected to previous page in 3 seconds.";
        header("refresh:3; url= patient_record.html");
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>