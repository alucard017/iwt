<?php
// Database connection settings
$servername = "localhost"; // MySQL server
$username = "root"; // MySQL username (change as necessary)
$password = ""; // MySQL password (change as necessary)
$dbname = "studentDB"; // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert records into the student table
$sql = "INSERT INTO student (name, age, email, gender, course, year) VALUES
('John Doe', 20, 'john.doe@example.com', 'Male', 'Computer Science', 2023),
('Jane Smith', 22, 'jane.smith@example.com', 'Female', 'Information Technology', 2022),
('Michael Johnson', 21, 'michael.johnson@example.com', 'Male', 'Software Engineering', 2023),
('Emily Davis', 23, 'emily.davis@example.com', 'Female', 'Electrical Engineering', 2021),
('Daniel Brown', 24, 'daniel.brown@example.com', 'Male', 'Mechanical Engineering', 2021)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "5 records inserted successfully.";
} else {
    echo "Error inserting records: " . $conn->error;
}

// Close the connection
$conn->close();
?>
