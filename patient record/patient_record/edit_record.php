<?php
if(isset($_POST['search'])){//connect database and search when press search
    $patient_id=$_POST['p_id'];
    $connect=mysqli_connect("localhost","root","","hospital");
    $query="SELECT `patient_name`,`patient_ic`,`patient_address`,`patient_date_of_birth`,`patient_gender`,`patient_contact_number`,`patient_description`FROM `patient_record` WHERE `patient_id`='$patient_id'";
    
    $result=mysqli_query($connect,$query)or die("error:".mysqli_error($connect));
    
    if(mysqli_num_rows($result)>0){//display record if found
        while($row=mysqli_fetch_array($result)){
            $p_name=$row['patient_name'];
            $p_ic_number=$row['patient_ic'];
            $p_address=$row['patient_address'];
            $p_date_of_birth=$row['patient_date_of_birth'];
            $gender=$row['patient_gender'];
            $p_contact_number=$row['patient_contact_number'];
            $p_description=$row['patient_description'];
            
        }
    }else{//if record not found, clear input
        echo'<script>alert("Record is not exist.")</script>';
        mysqli_close($connect);
        $patient_id="";
        $p_name="";
        $p_ic_number="";
        $p_address="";
        $p_date_of_birth="";
        $gender="";
        $p_contact_number="";
        $p_description="";
    }
    
    
    
}else if(isset($_POST['update'])){// connect database and update
    $connect=mysqli_connect("localhost","root","","hospital");
    $patient_id=$_POST['p_id'];
    $patient_name=$_POST['p_name'];
    $patient_ic=$_POST['p_ic_number'];
    $patient_address=$_POST['p_address'];
    $patient_date_of_birth=$_POST['p_date_of_birth'];
    $patient_gender=$_POST['gender'];
    $patient_description=$_POST['p_description'];
    
    $query="UPDATE `patient_record` SET `patient_id`='".$patient_id."',`patient_name`='".$patient_name."',`patient_ic`='".$patient_ic."',`patient_address`='".$patient_address."',`patient_date_of_birth`='".$patient_date_of_birth."',`patient_gender`='".$patient_gender."',`patient_description`='".$patient_description."' WHERE `patient_id`=$patient_id ";
    
    $result=mysqli_query($connect,$query);
    if($result){
        echo'<script>alert("Data Updated")</script>';
    }else{
        echo'<script>alert("Data is not updated")</script>';
    }
    mysqli_close($connect);
    $patient_id="";
    $p_name="";
    $p_ic_number="";
    $p_address="";
    $p_date_of_birth="";
    $gender="";
    $p_contact_number="";
    $p_description="";
}else if(isset($_POST['delete'])){// delete record from database
    $patient_id=$_POST['p_id'];
    $connect=mysqli_connect("localhost","root","","hospital");
    $query="DELETE FROM `patient_record` WHERE patient_id=$patient_id";
    
    $result=mysqli_query($connect,$query);
    if($result){
        echo'<script>alert("Record has been deleted.")</script>';
    }else{
        echo'<script>alert("Record has not deleted.")</script>';
    }
    mysqli_close($connect);
    $patient_id="";
    $p_name="";
    $p_ic_number="";
    $p_address="";
    $p_date_of_birth="";
    $gender="";
    $p_contact_number="";
    $p_description="";


}else{//input will be cleared when first enter the page.
    $patient_id="";
    $p_name="";
    $p_ic_number="";
    $p_address="";
    $p_date_of_birth="";
    $gender="";
    $p_contact_number="";
    $p_description="";
    
}
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="record.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
       <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <style>
        form{
    font-family: 'Play', sans-serif;
    font-weight:bold;
        }
    </style>
	</head>
	<body>
		<nav class="navtop">
			<div>
				<h1 style="font-family: 'Ubuntu', sans-serif;">EDIT PATIENT'S RECORD</h1>
                <a href="back-patientrecord.php" style="font-family: 'Ubuntu', sans-serif;"><i class="fas fa-sign-out-alt"></i>Back</a>
			</div>
		</nav>
        


<form action="edit_record.php" method="post">
    <table class=container3>
        <tr>
            <td>
                Enter patient's id:
            </td>
            <td>
                <input type="text" name="p_id" value="<?php echo $patient_id?>">
                <input type="submit" name='search' value="Search">
            </td>
        </tr>
        <tr>
            <td>
                Patient's name:
            </td>
            <td>
                <input type="text" name="p_name" value="<?php echo $p_name?>">
            </td>
        </tr>

        <tr>
            <td>I/C No.:</td>
            <td><input type="text" name="p_ic_number" value="<?php echo $p_ic_number?>"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="p_address" value="<?php echo $p_address?>"></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td><input type="date" name="p_date_of_birth" value="<?php echo $p_date_of_birth?>"></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><input type="radio" name="gender" value="male" <?php if($gender=="male"){echo "checked";}?>/>Male <input type="radio" name="gender" value="female"<?php if($gender=="female"){echo "checked";}?>>Female</td>
        </tr>
        <tr>
            <td>Contact No.:</td>
            <td><input type="text" name="p_contact_number" value="<?php echo $p_contact_number?>"></td>
        </tr>
        <tr>
            <td>
                Description/Medical History:
            </td>
            <td>
                <textarea rows="8" cols="50" name="p_description" id='edit'><?php echo $p_description?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name='update' value="Update patient's record"> <input type="submit" name='delete' value="Delete"/></td>
            
            
            <td><a href="patient_record.html"></a></td>
        </tr>
    
    
    
    </table>
    
</form>
</body>
</html>