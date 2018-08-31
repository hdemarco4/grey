<?php
include_once 'greyHead.php';
?>

<div class="row">
    <?php
    include_once 'leftColumn.php';
    ?>

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

    <?php
    include_once 'rightColumn.php';
    ?>
</div>


<?php
include_once 'greyFoot.php';
?>