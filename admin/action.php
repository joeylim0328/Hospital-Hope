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
				<h1 style="font-family: 'Ubuntu', sans-serif;">SEARCH DOCTOR</h1>
                <a href="back-modify.php" style="font-family: 'Ubuntu', sans-serif;"><i class="fas fa-sign-out-alt"></i>Back</a>
			</div>
		</nav>
        <div class="container5">
<?php
$conn=mysqli_connect("localhost","root","","hospital");
$x = 'All Specialties';


if($get=$_POST['name']){
    $query="SELECT * FROM doctor where name='$get'";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_array($result)){
        $id=$row["id"];
        $name=$row["name"];
        $contact=$row["contact"];
        $email=$row["email"];
        $specialties=$row["specialties"];
        ?>

	<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Specialties</th>
        <th>Actions</th>
    </tr>
                <p>
        <input type="button" value="Create PDF" 
            id="btPrint" onclick="createPDF()" />
    </p>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $contact; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $specialties; ?></td>
        <td><a href="delete-doctor.php?delete=<?php echo $id; ?>" onclick="return confirm('Do you sure you want to delete the record?');">Delete</a>
        <a href="modify-doctor-form.php?modify=<?php echo $id; ?>" onclick="return confirm('Do you sure you want to modify the record?');">Modify</a></td>
    </tr>
    
    
<?php
    }?></table>
     
        <input type="button" value="Create PDF" 
            id="btPrint" onclick="createPDF()" />
    
            <?php
}
    else{
        echo "No results found. You will be redirected to previous page in 3.";
        header("refresh:3; url= search-doctor.php");
        
    } 
}
else if($get=$_POST['specialties']){
    if($get != $x){
        $query="SELECT * FROM doctor where specialties='$get'";
        $result=mysqli_query($conn,$query);
    }
    else{
        $query="SELECT * FROM doctor";
        $result=mysqli_query($conn,$query);  
    }
	
    if (mysqli_num_rows($result) > 0){
	?>
	
	<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Specialties</th>
        <th>Actions</th>
    </tr>
	
	<?php
	
    while($row=mysqli_fetch_array($result)){
        $id=$row["id"];
        $name=$row["name"];
        $contact=$row["contact"];
        $email=$row["email"];
        $specialties=$row["specialties"];
        ?>
	
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $contact; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $specialties; ?></td>
        <td><a href="delete-doctor.php?delete=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete the record?');">Delete</a>
        <a href="modify-doctor-form.php?modify=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to modify the record?');">Modify</a></td>
    </tr>
	

    
<?php
}
	?></table><?php
    }
    else{
        echo "No results found. You will be redirected to previous page in 3.";
        header("refresh:3; url= search-doctor.php"); 
    } 
}

?>
    
        </div>

        
        
