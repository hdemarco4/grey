<?php

session_start();

if(isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Check if user is in database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../index.php?login=error");
        exit();
    } else {
        if($row = mysqli_fetch_assoc($result)) {
            //Dehashing the password
            $hashedPwdCheck = password_verify($pwd, $row['password']);
            if($hashedPwdCheck == false) {
                header("Location: ../index.php?login=error");
                exit();
            } elseif($hashedPwdCheck == true) {
                //Log in user
                $_SESSION['u_email'] = $row[$email];
                header("Location: ../index.php?login=success");
                exit();
            }
        }
    }



} else {
    header("Location: ../index.php?login=error");
    exit();
}