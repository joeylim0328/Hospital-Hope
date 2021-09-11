<?php
    if(isset($_POST['search'])){
        $p_name=$_POST['s_name'];
        $connect = mysqli_connect("localhost", "root", "","hospital");
        
        $query="SELECT `patient_id`,`patient_name`,`patient_ic` ,`patient_address`,`patient_date_of_birth`,`patient_description`,`patient_gender`,`patient_contact_number` FROM `patient_record` WHERE `patient_name`LIKE '%$p_name%' ";
        
        $result=mysqli_query($connect,$query) or die("error:".mysqli_error($connect));
        
        echo "<h1>Search a patient's record</h1>";
        echo "<a href=\"search_patient_record.html\"><button>Back</button></a>";
        echo "<table border='1'>";
        if($r=mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                $patient_name=$row['patient_name'];
                $patient_id=$row['patient_id'];
                $patient_ic=$row['patient_ic'];
                $patient_gender=$row['patient_gender'];
                $patient_address=$row['patient_address'];
                $patient_date_of_birth=$row['patient_date_of_birth'];
                $patient_description=$row['patient_description'];
                $patient_contact_number=$row['patient_contact_number'];
                echo"<tr>";
                echo"<td>".$patient_id."</td> <td> ".$patient_name."</td> <td>".$patient_ic."</td> <td>".$patient_gender."</td> <td>".$patient_address."</td> <td>".$patient_date_of_birth."</td> <td>".$patient_contact_number."</td> <td>".$patient_description."</td>";
                echo"</tr>";
            }
        
        }else{
            echo"<h2>Not Found!</h2>";
            echo"<h3>The name that you entered is not in database.</h3>";
        }
        echo "</table>";
    }
?>