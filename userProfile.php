<?php
include_once 'greyHead.php';
?>

    <div class="row">
        <?php
        include_once 'leftColumn.php';
        ?>

        <div class="column middle">
            <?php
            if(isset($_SESSION['u_email'])) {
                echo "You are logged in";
                echo '<br />';

                echo $_SESSION['u_email'];
            }

            ?>

        </div>

        <?php
        include_once 'rightColumn.php';
        ?>

    </div>

<?php
include_once 'greyFoot.php';
?>