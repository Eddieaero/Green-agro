<?php
    include "db/dbconfig.php";
    $id = rand(rand(1,34), rand(56, 600));
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    // insert user data into database
    $sql = "INSERT INTO user (id, username, password) VALUES ('$id', '$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['id'] = $id;
        // Redirect to the home page
        header('Location: /survey.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>