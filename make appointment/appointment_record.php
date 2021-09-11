<!DOCTYPE html>
<html>
    <head>
        <title>Make Appointment</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <style>
    .navtop {
    background-color: rgba(222,184,145,0.6);
	width: 100%;
	border: 0;
        }

        
    h1{
    font-size: 40px;
     font-family: 'Ubuntu', sans-serif; 
        }
    
    body{
     background-image: linear-gradient(rgba(0,0,0,-2),rgba(0,0,0,-2)),url(background.jpg);
    height: 100vh;
    background-size:cover;
    background-position:center;
    position: relative;
        }
        
    form{
     font-size:20px; 
    font-family: 'Play', sans-serif;
    font-weight:bold;
        
        }  


        </style>
    
    </head>
<body>
    
    <center>
        <nav class ="navtop">
            <div>
                <h1>Make Appointment</h1>
            </div>
        </nav>
        <br/>
        <br/>
        <br/>
<form action="insert_appointment.php" method="post">
    
        
        <td>Select Doctor Name:&emsp;&emsp;&emsp;&emsp;&emsp;</td>    
            
        <?php 
            $mysqli = new mysqli('localhost','root','','hospital');
            $resultset = $mysqli->query("SELECT name from doctor");
            ?>
                <select name ="doctor">
        <?php 
                while($rows= $resultset->fetch_assoc()){
                    $name= $rows['name'];
                echo"<option value='$name'>$name</option>";
                }
                ?>

            </select>
            
      <table>
        <tr>
            <td>
                Name:
            </td>
            
            <td>
                <input type="text" name="p_name">
            </td>
            
        <tr>
            <td>I/C No.:</td>
            <td><input type="text" name="p_ic_number"></td>
        </tr>
        
        <tr>
            <td>Address:</td>
            <td><input type="text" name="p_address"></td>
        </tr>
        <tr>
            <td>Date :</td>
            <td><input type="date" name="p_date"></td>
            </tr>
            <tr>
            <td>Time :</td>
            <td><input type="text" name="time" placeholder="please enter 24hour format"></td>
		</tr>
        
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="male">Male 
                <input type="radio" name="gender" value="female">Female</td>
        </tr>
        
        <tr>
            <td>Contact No.:</td>
            <td><input type="text" name="p_contact_number"></td>
        </tr>
          
        <tr>
            
            <td><input type="submit" value="Add patient's appointment"></td>
            <td><a href="http://localhost/hospitalhope/Hospital Management.html"><button type="button">Back</button></a></td>
        </tr>
    
    
    
    </table>
    
</form>
    </center>
    
</body>
</html>