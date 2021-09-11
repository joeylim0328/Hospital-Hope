<?php
include 'pdo_connect.php';
if(isset($_POST['user'])) {
    $query = "SELECT 'pass' FROM 'admin' WHERE 'user' = ?";
    $params = array($_POST['user']);
    $results = dataQuery($query, $params);
}
 
$hash = $results[0]['pass']; // first and only row if username exists;
 
echo password_verify($_POST['pass'], $hash) ? 'password correct' : 'passwword incorrect';
 
?>