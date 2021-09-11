<?php
    $name=$_POST['name'];
    $contact=$_POST['contact'];   
    $email=$_POST['email'];
    $specialties=$_POST['specialties'];
    $modify_id = $_GET['modifyid']; 

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
            mysqli_query($conn, "UPDATE doctor SET name='$name', contact='$contact', email='$email', specialties='$specialties' WHERE id = '$modify_id'");
            echo "Done modifying. You will be redirected to home page in 3.";
            header("refresh:3; url= home.php"); 
            }
        } 
    else{
        echo"All field are required to be filled in. You will be redirected to record adding page in 3 seconds.";
        header("refresh:3; url= modify-doctor-form.html");
    }

?> 