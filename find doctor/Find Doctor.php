<!DOCTYPE html>
<html>
    <head>
    <style>
    .navtop {
    background-color: rgba(222,184,145,0.6);
	width: 100%;
	border: 0;
    text-align:center;

        }
        
    h1{
    font-size: 40px;
     font-family: 'Ubuntu', sans-serif; 

        } 
        
    form{
     font-size:20px; 
    font-family: 'Play', sans-serif;
    font-weight:bold;
    text-align:center;
        
        }
        
    body{
     background-image: linear-gradient(rgba(0,0,0,-2),rgba(0,0,0,-2)),url(background.jpg);
    height: 100vh;
    background-size:cover;
    background-position:center;
    position: relative;
        }
        </style>
    
    </head>
<body>
    <nav class="navtop">
        <div>
    <h1><font face="arial">Our Doctors</font></h1>
        </div>
    </nav>
    <br/>
    <br/>
    
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
        </select> 
        <br/>
        <br/>
        <br/>
    Search by Doctor's Name: <input type="text" name="name" placeholder="Please enter a name..." size="30">
    <Button style="font-size:18px">Search</Button> 
    </form>
    
    <br>
    <br>
    <br>
    <br>
    <td><a href="http://localhost/hospitalhope/Hospital Management.html"><button type="button" style="font-size:18px;float:right">Back</button></a></td>
     
</body>
</html>