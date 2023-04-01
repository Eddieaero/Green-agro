<?php
include "db/dbconfig.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Look up the user's credentials in the database
    $user =  $conn->query("SELECT * FROM user WHERE username = '$username' and password='$password'")->fetch_object();
    if($user){
        // Set the session variables
        $_SESSION['username'] = $user['username'];
        $_SESSION['field'] = $user['field'];
        // Redirect to the home page
        header('Location: index.php');
    }
    else{
        // Redirect to the login page
        header('Location: login.php');
    }
}
?>
