<?php

if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Check if email is valid
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?register=email");
        exit();
    } else {
        //Hashing the password
        $hashedPwd = pasword_hash($pwd, PASSWORD_DEFAULT);

        //Insert the user into the database
        $sqlInsert = "INSERT INTO users (email, password, active) VALUES ('$email', '$hashedPwd', 1);";
        mysqli_query($conn, $sqlInsert);
        header("Location: ../register.php?register=success");
        exit();
    }

} else {
    header("Location: ../register.php");
    exit();
}