<?php
$servername = "localhost";
$username = "root";
$password = "localhost";
$dbname = "greenagro";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>