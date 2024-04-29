<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database server is different
$username = "root"; // Database username
$password = ""; // No password for root user
$dbname = "cholera_db"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$password = $_POST['password'];

// Prepare and execute SQL statement to check user credentials
$sql = "SELECT * FROM log WHERE name = '$name' AND password = '$password'";
$result = $conn->query($sql);

// Check if user exists
if ($result->num_rows > 0) {
    // User authentication successful, redirect to index.php
    header("Location: index.php");
    exit;
} else {
    // User authentication failed, redirect back to login page with error message
    header("Location: login.php?error=Invalid credentials");
    exit;
}

// Close database connection
$conn->close();
?>
