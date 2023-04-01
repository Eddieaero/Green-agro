<?php
include "db/dbconfig.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Look up the user's credentials in the database
    $user =  $conn->query("SELECT * FROM user WHERE username = '$username' and password='$password'");
    if($user->num_rows != 0){
        $user = $user->fetch_assoc();
        // Set the session variables
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['field'] = $user['field'];
        // Redirect to the home page
        header('Location: dashboard.php');
    }
    else{
        // Redirect to the login page
        header('Location: login.php?error=1');
    }
}
?>
