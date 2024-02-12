<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "walletwisdomhub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pswrd=$_POST['password'];
$cpswrd=$_POST['cpassword'];
$message=$_POST['message'];

$sql = "INSERT INTO signup
VALUES ( '$email', '$fname', '$lname' ,'$pswrd', '$cpswrd','$message')";

if ($conn->query($sql) === TRUE) {
  header("Location: ../signin/signin.html");
} else {
  header("Location: ../sign up/sign up.html");
}

$conn->close();
?>