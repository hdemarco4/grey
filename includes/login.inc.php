<?php

session_start();

if(isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Check if user is in database
    $sql = "SELECT * FROM users WHERE email=?";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
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
                $_SESSION['u_email'] = $row['email'];
                header("Location: ../index.php?login=success");
                exit();
            }
        }
    }



} else {
    header("Location: ../index.php?login=error");
    exit();
}