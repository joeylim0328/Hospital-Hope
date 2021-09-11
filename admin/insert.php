<?php
    $name=$_POST['name'];
    $contact=$_POST['contact'];   
    $email=$_POST['email'];
    $specialties=$_POST['specialties'];

    if(!empty($name)||!empty($contact)||!empty($email)||!empty($specialties)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "hospital";
        
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } 
        else {
         $SELECT = "SELECT name From doctor Where name = ? Limit 1";
         $INSERT = "INSERT Into doctor (name, contact, email, specialties) values(?, ?, ?, ?)";
         //Prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $name);
         $stmt->execute();
         $stmt->bind_result($name);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssss", $name, $contact, $email, $specialties);
          $stmt->execute();
          echo "New record inserted sucessfully. You will be redirected to home page in 3.";
          header("refresh:3; url= home.php");  
         } else {
          echo "Doctor with the same name exist. You will be redirected to record adding page in 3.";
          header("refresh:3; url= add-doctor.html");
         }
         $stmt->close();
         $conn->close();
        }
    } 
    else{
        echo"All field are required to be filled in. You will be redirected to record adding page in 3.";
        header("refresh:3; url= add-doctor.html");
    }

?> 