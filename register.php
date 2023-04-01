<?php
include "db/dbconfig.php";
session_start();
?>

<!-- page content -->


<?php 
// process registration
// process form data
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// insert user data into database
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$hashed_password')";
if (mysqli_query($conn, $sql)) {
  echo "User registered successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>