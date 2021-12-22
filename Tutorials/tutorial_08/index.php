<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
 
/* Attempt to connect to MySQL database */
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($conn -> connect_error){
    die("ERROR: Could not connect. " . $conn->connect_error);
}
?>
