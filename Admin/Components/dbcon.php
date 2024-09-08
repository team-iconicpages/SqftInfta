<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "u345348146_sqftinfra";

// live settings
// $servername = "localhost";
// $username = "u345348146_sqftinfra";
// $password = "Sqftinfra1100@";
// $database = "u345348146_sqftinfra";

// Connect to MySQL server
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>