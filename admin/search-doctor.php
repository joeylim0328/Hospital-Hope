<!DOCTYPE html>

    <html>
    <head>
        <title>Modifying Records</title>
        <link rel="stylesheet" a href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
       <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"> 
    </head>
        
    <body>
        <nav class="navtop">
			<div>
				<h1 style="font-family: 'Ubuntu', sans-serif;">MODIFY OR DELETE RECORDS</h1>
				<a href="back-admin.php" style="font-family: 'Ubuntu', sans-serif;"><i class="fas fa-sign-out-alt"></i>Back</a>
			</div>
		</nav>
        <div class="container2">
        <div><img src="search_icon.png">
                <h2 style="color:white">Search</h2></div>
        
        <form action="action.php" method="post">
        <label>Search by Specialty:</label>
        <select name="specialties">
            <option>All Specialties</option>
        <?php
        $mysqli = NEW MySQLi('localhost','root','','hospital');
        
        $resultSet = $mysqli->query("SELECT specialties FROM doctor GROUP BY specialties");

        while($rows = $resultSet->fetch_assoc()){
            $specialties = $rows['specialties'];
            echo "<option value='$specialties'>$specialties</option>";
        }
        ?> 
        </select><br>
        Search by Doctor's Name: <input type="text" name="name" placeholder="Please enter a name...">
        <Button>Search</Button> 
        </form>
        </div>
    </body>
</html>

<?php

    // php select option value from database

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "hospital";

    // connect to mysql database

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    // mysql select query
    $query = "SELECT * FROM 'specialties";

    // for method 1

    $result1 = mysqli_query($connect, $query);

?>