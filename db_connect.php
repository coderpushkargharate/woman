<?php
$servername = "localhost";       
$username = "root";             
$password = "";                
$database = "women_empowerment"; 
$port = 3307;                    

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: uncomment to test connection
// echo "Connected successfully";
?>
