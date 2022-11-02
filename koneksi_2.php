<?php
$server = "192.168.11.161";
$username = "usrindustry40";
$password = "passindustry40";
$database = "industry40";

// Create connection and Check connection
$conn = mysqli_connect($server, $username, $password) or die("Error in connection!");
mysqli_select_db($conn, $database) or die("Could not select database");
