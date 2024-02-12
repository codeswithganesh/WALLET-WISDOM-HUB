<?php
$servername = "localhost"; // Update with your MySQL server hostname or IP address
$username = "root";
$password = "";
$dbname = "walletwisdomhub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phone']; // Added missing semicolon
$message = $_POST['message'];

// SQL query to insert data into the database
$sql = "INSERT INTO contact (name, email, phone, message) 
        VALUES ('$name', '$email', '$phno', '$message')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    // Redirect to a thank you page or display success message
    header("Location: ../contact/contact.html");
    exit(); // Terminate the script after redirection
} else {
    // If insertion fails, redirect back to the contact form
    header("Location: ../contact/contact.html");
    exit(); // Terminate the script after redirection
}

$conn->close(); // Close the database connection
?>
