<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "samplelogin";

// create connection
$conn = new mysqli($servername, $username, $password, $database);

//check connection
if($conn -> connec_error){
 die("Connection failed" . $conn -> connect_error);
}


?>