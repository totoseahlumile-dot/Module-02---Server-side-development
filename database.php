<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "basic_users_db";

// Connect to MySQL
$conn = mysqli_connect($server, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database
$sql = "CREATE DATABASE IF NOT EXISTS $database";
mysqli_query($conn, $sql);

// Use the database
mysqli_select_db($conn, $database);

// Create the users table
$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
)";

if (mysqli_query($conn, $sql)) {
    echo "Users table created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Insert one sample user
$sql = "INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "Sample user added successfully.";
} else {
    echo "Error adding user: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
