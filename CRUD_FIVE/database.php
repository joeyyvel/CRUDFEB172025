<?php

function connectiondb(){
    
$servername = "localhost";
$username = "joey_admin105";
$password = "pass123";
$databasedb5 = "joeydatabase_five";

$conn = new mysqli($servername, $username, $password, $databasedb5);

if($conn->connect_error){
    die("Connect Failed" .$conn->connect_error);
}
echo "Connection successful CONGRATULATIONS! <br><br>";
 return $conn;
}



?>

