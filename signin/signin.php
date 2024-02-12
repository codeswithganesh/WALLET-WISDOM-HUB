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
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
      
      $sql = "SELECT COUNT(*) FROM signup WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $count = mysqli_num_rows($result);


      if($result==1){
  header("Location: ../home/index.html");
}
else{
   header("Location: ../signin/signin.html");
}
   }
?>