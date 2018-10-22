<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Grey Raven's Castle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Grey, Raven, Castle, Wire, Wrapped, Jewelry">

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<header>
    <div class="wrapper-one">
        <a href="index.php" style="float: left">
            <img src="imgs/mylogo.gif" alt="Logo">
        </a>

        <div class="login">
            <?php
                if(isset($_SESSION['u_email'])){
                    echo '<form action="includes/logout.inc.php" method="POST" style="float: right; margin-left: 20px">
                            <button type="submit" name="submit">Logout</button>
                           </form>';

                    ?>

                    <a href="userProfile.php">User Profile</a>

            <?php

                }else {
                    echo '<form action="includes/login.inc.php" method="POST">
                            <input type="text" placeholder="Enter Email" name="email" required>
                            <input type="password" placeholder="Enter Password" name="pwd" required>

                            <button type="submit" name="submit">Login</button>

                           </form>
                           <a href="register.php"><button name="register">Register</button></a>';
                }
            ?>



        </div>

    </div>


</header>