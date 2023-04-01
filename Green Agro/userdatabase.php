<?php
// connect to the database
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "greenagro";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

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

// close database connection
mysqli_close($conn);
?>