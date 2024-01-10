<?php
// Database configuration
$databaseHost = 'localhost'; // Hostname
$databaseName = 'ecommerce_database'; // Database name
$databaseUser = 'root'; // Database username
$databasePassword = 'gunjan@'; // Database password

// Create a database connection
$mysqli = new mysqli($databaseHost, $databaseUser, $databasePassword, $databaseName);

// Check if the connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
