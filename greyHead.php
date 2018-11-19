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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" id="snipcart" data-api-key="NGQwMWJhZDYtYTgzYy00MDY2LWEyMTgtMTA2ZGYyYmFkZTUwNjM2Nzc1NzUxMjIxNTQ4NzM3"></script>

    <link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" type="text/css" rel="stylesheet" />

</head>

<body>

<header>
    <div class="wrapper-one">
        <a href="index.php" style="float: left">
            <img src="imgs/mylogo.gif" alt="Logo">
        </a>


            <div class="snipcart-summary">

                <p><a href="#" class="snipcart-edit-profile">User Profile</a>
                    <a href="#" class="snipcart-user-logout" style="float: right">Logout</a></p>

                <p>Number of items: <span class="snipcart-total-items"></span>
                    Total price: <span class="snipcart-total-price"></span></p>

                <p><a href="#" class="snipcart-checkout">Click here to checkout</a></p>

            </div>

    </div>


</header>