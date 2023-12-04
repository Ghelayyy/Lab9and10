<?php

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "lab-9-10";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}
?>