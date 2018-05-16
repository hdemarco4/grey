<!doctype html>
<html lang="en">
<head>
    <title>Grey Raven's Castle</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<a href="index.php">
    <img src="mylogo.gif" alt="Logo" style="display: block;">
</a>

<div class="row">
    <!--Left bar-->
    <div class="column left">
        <a href="https://www.etsy.com/shop/GreyRavensCastle">
            Hosted on <img src="etsy logo.jpg" alt="Etsy Logo" width="180">
        </a>
    </div>
    <!--End Left bar-->

    <div class="column middle">
        <?php
        $id = $_GET["id"];

        $servername = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "products";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = mysqli_query($conn,"SELECT * FROM uni_prod, wire_prod, solder_prod WHERE uni_prod.id='$id' or wire_prod.id='$id' or solder_prod.id='$id'");
        $row = mysqli_fetch_row($sql);

        $name = $row[1];
        $quantity = $row[2];
        $wholesale = $row[3];
        $retail = $row[4];
        $length = $row[6];
        $alt_name = $row[8];
        $pic_url = 'pics/' . $row[0] . ' ';
        $etsy = $row[9];

        $qs = glob($pic_url . "*.{png,JPG,jpg,PNG}",GLOB_BRACE );
        foreach($qs as $q){
            ?>

            <div>
                <img src="<?php echo $q ?>" alt="<?php echo $alt_name ?>" style="width:300px;float:left;">
            </div>

            <?php
        }
        mysqli_close($conn);
        ?>

        <p><a target="_blank" href="<?php echo $etsy ?>">Check out this product's Etsy page!</a></p>
        <p>The price for this piece is $<?php echo $retail?></p>


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