<?php
$server = "localhost:3308";
$username = "root";
$password = "";
$database = "call_center";

// Create connection and Check connection
$conn = mysqli_connect($server, $username, $password) or die("Error in connection!");
mysqli_select_db($conn, $database) or die("Could not select database");
