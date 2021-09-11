<!DOCTYPE HTML>
<head>
<style>
    body{
     background-image: linear-gradient(rgba(0,0,0,-2),rgba(0,0,0,-2)),url(background.jpg);
    height: 100vh;
    background-size:cover;
    background-position:center;
    position: relative;
        } 
    </style>
</head>
<?php
$conn=mysqli_connect("localhost","root","","hospital");
$x = 'All Specialties';

if($get=$_POST['name']){
    $query="SELECT * FROM doctor where name='$get'";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0){
        ?>
                <table align="center" border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Specialties</th>
            </tr>
        <?php
        while($rows=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>";
            echo $rows['id'];
            echo "</td>";
            echo "<td>";
            echo $rows['name'];
            echo "</td>";
            echo "<td>";
            echo $rows['contact'];
            echo "</td>";
            echo "<td>";
            echo $rows['email'];
            echo "</td>";
            echo "<td>";
            echo $rows['specialties'];
            echo "</td>";
            echo "</tr>";
            echo "<br/>";
        }
        ?>
        </table>
        <?php
    }
    else{
        echo "No results found. You will be redirected to previous page in 3 seconds.";
        header("refresh:3; url= Find doctor.php"); 
    }
}
else if($get=$_POST['specialties']){
    if($get != $x){
        $query="SELECT * FROM doctor where specialties='$get'";
        $result=mysqli_query($conn,$query);
        ?>
                 <table align="center" border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Specialties</th>
            </tr>
        <?php  
    }
    else{
        $query="SELECT * FROM doctor";
        $result=mysqli_query($conn,$query);
        ?>
                     <table align="center" border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Specialties</th>
            </tr>
        <?php  
    }
    while($rows=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>";
        echo $rows['id'];
        echo "</td>";
        echo "<td>";
        echo $rows['name'];
        echo "</td>";
        echo "<td>";
        echo $rows['contact'];
        echo "</td>";
        echo "<td>";
        echo $rows['email'];
        echo "</td>";
        echo "<td>";
        echo $rows['specialties'];
        echo "</td>";
        echo "</tr>";
        echo "<br/>";
    }
        ?>
        </table>
        <?php
}
    
?>
