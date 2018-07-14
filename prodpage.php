<!doctype html>
<html lang="en">
<head>
    <title>Grey Raven's Castle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Grey, Raven, Castle, Wire, Wrapped, Jewelry">


    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="gallery.css">

</head>

<body>

<a href="index.php">
    <img src="imgs/mylogo.gif" alt="Logo" style="display: block;">
</a>

<div class="row">
    <!--Left bar-->
    <div class="column left">
        <a target="_blank" href="https://www.etsy.com/shop/GreyRavensCastle">
            Hosted on <img src="imgs/etsy logo.jpg" alt="Etsy Logo" width="180">
        </a>
    </div>
    <!--End Left bar-->

    <div class="column middle">
        <?php
        $id = $_GET["id"];

        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "working";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = mysqli_query($conn,"SELECT * FROM products WHERE id='$id'");
        $row = mysqli_fetch_row($sql);

        $name = $row[1];
        $quantity = $row[2];
        $wholesale = $row[3];
        $retail = $row[4];
        $length = $row[6];
        $alt_name = $row[8];
        $pic_url = 'pics/' . $row[0] . ' ';
        $doc_url = 'docs/' . $row[0] . ' ';
        $etsy = $row[9];

        $desc = $doc_url . 'd.txt';

        ?>

            <h2> <?php echo $name?> </h2>

            <p><a target="_blank" href="<?php echo $etsy ?>">Check out this product's Etsy page!</a></p>
            <p>The price for this piece is $<?php echo $retail?></p>
            <p><?php echo file_get_contents($desc)?></p>

        <?php

        $qs = glob($pic_url . "*.{png,JPG,jpg,PNG}",GLOB_BRACE );
        foreach($qs as $q){
            ?>

            <div class="gallery2">
                <img src="<?php echo $q ?>" alt="<?php echo $alt_name ?>" width="180" height="auto">
            </div>

            <?php
        }


        mysqli_close($conn);
        ?>




    </div>

    <div class="column right">
        <!--Nav list-->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
                <a href="storemain.php" class="dropbtn">Store</a>
                <div class="dropdown-content">
                    <a href="storebead.php">Beaded Creations</a>
                    <a href="storewire.php">Wire Wrapped Creations</a>
                </div></li>
            <li><a href="about.php">About</a></li>
            <li><a href="charities.php">Charities</a></li>
        </ul>
        <!--End Nav list-->

    </div>
</div>


</body>
</html>