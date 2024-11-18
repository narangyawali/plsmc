<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your DB username
$password = "";     // Replace with your DB password
$dbname = "student_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$roll_number = $_POST['roll_number'];
$address = $_POST['address'];

// Insert data into the database
$sql = "INSERT INTO students (name, roll_number, address) VALUES ('$name', $roll_number, '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New student added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<a href="form.php">Add Another Student</a>
<br>
<a href="list.php">View Student List</a>
