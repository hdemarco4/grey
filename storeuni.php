<!doctype html>
<html lang="en">
<head>
    <title>Store: Unique Creations</title>
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
        <h1>Unique Creations</h1>

        <?php
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

        $sql = "SELECT name, id, etsy_page, alt_name, ind_page FROM products WHERE id BETWEEN 'H10001' AND 'H10024'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $n = $row["name"];
                $p = 'pics/' . $row["id"] . ' c';
                $e = $row["etsy_page"];
                $a = $row["alt_name"];
                $i = $row["ind_page"];
                $qs = glob($p . "*.{png,JPG,jpg,PNG}",GLOB_BRACE );
                foreach($qs as $q){
                    ?>

                    <div class="gallery">
                        <a target="_blank" href="<?php echo $i ?>">
                            <img src="<?php echo $q ?>" alt="<?php echo $a ?>" width="300" height="200">
                        </a>
                        <a target="_blank" href="<?php echo $i ?>">
                            <div class="desc"> <?php echo $n ?> </div>
                        </a>
                    </div>

                    <?php

                }}
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>

    <div class="column right">
        <!--Nav list-->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="storemain.php">Store</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="charities.php">Charities</a></li>
        </ul>
        <!--End Nav list-->

    </div>
</div>

</body>
</html>