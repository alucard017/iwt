<?php
// Database connection settings
$servername = "localhost"; // or your server IP
$username = "root"; // MySQL username (change as necessary)
$password = ""; // MySQL password (change as necessary)

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create database
$sql = "CREATE DATABASE IF NOT EXISTS studentDB";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Database 'studentDB' created successfully or already exists.";
} else {
    echo "Error creating database: " . $conn->error;
}

// Close the connection
$conn->close();
?>
