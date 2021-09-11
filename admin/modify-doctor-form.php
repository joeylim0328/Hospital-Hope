<?php $modify_id = $_GET['modify']; ?>

<!DOCTYPE html>
<html>
    
<head>
	<title> Modify Records</title>
	<link rel="stylesheet" a href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
    
<body>
    <nav class="navtop">
			<div>
				<h1>MODIFY PAGE</h1>
				<a href="back-modify.php"><i class="fas fa-sign-out-alt"></i>Back</a>
			</div>
		</nav>
    
	<div class="container3">
        
        <img src="person_icon.png">
        
		<form action="modify-doctor.php?modifyid=<?php echo $modify_id; ?>" method="POST">
            <div class="form_input">
              <input type="text" name="name" placeholder="Please modify doctor's name" id="name" required/>	 
            </div>
            
            <div class="form_input">
              <input type="text" name="contact" placeholder="Please modify doctor's contact no" id="contact" required/>	 
            </div>
            
            <div class="form_input">
              <input type="text" name="email" placeholder="Please modify doctor's email address" id="email" required/>
            </div>
            
            <div class="form_input">
              <input type="text" name="specialties" placeholder="Please modify doctor's specialties" id="specialties" required/>
            </div>
            
            <input type="submit" type="submit" value="MODIFY DOCTOR'S RECORD" class="btn-add"/>
            
		</form>
        
	</div>
    
</body>
</html>