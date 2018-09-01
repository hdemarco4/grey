<?php

if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);

    //Check if email is valid
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?register=email");
        echo "Not a valid email address.";
        exit();
    } else {
        //Check if email is in database
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            header("Location: ../register.php?register=error");
            echo "Email already exists.";
            exit();
        } else {
            if (!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $pwd) === 0) {
                header("Location: ../register.php?register=password");
                echo "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit.";
                exit();
            } else {
                if (!$pwd == $pwd2) {
                    header("Location: ../register.php?register=password");
                    exit();
                } else {
                    //Hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                    //Insert the user into the database
                    $sqlInsert = "INSERT INTO users (email, password, active) VALUES ('$email', '$hashedPwd', 1);";
                    mysqli_query($conn, $sqlInsert);

                    header("Location: ../register.php?register=success");
                    exit();
                }
            }
        }
    }

} else {
    header("Location: ../register.php");
    exit();
}