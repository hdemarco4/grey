<?php
include_once 'greyHead.php';
?>

<div class="row">
    <?php
    include_once 'leftColumn.php';
    ?>

    <div class="column middle">
        <h1>Wire Wrapped Creations</h1>

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

        $sql = "SELECT name, id, etsy_page, alt_name, ind_page FROM products WHERE type LIKE 'wired'";
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
                            <div class="desc"><?php echo $n ?></div>
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

    <?php
    include_once 'rightColumn.php';
    ?>
</div>

<?php
include_once 'greyFoot.php';
?>