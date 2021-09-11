<?php
$conn=mysqli_connect("localhost","root","","hospital");
        if(isset($_GET['delete'])){
            $delete_id = $_GET['delete'];
            mysqli_query($conn, "DELETE FROM doctor WHERE id = '$delete_id'");
            echo "Done deleting. You will be redirected to home page in 3.";
            header("refresh:3; url= home.php"); 
        }
?>