<?php
include_once 'greyHead.php';
?>


    <div class="row">
        <?php
        include_once 'leftColumn.php';
        ?>

        <div class="column middle">
            <h2>Privacy Policy</h2>
            <p><?php echo file_get_contents('includes/Privacy.txt')?></p>
        </div>

        <?php
        include_once 'rightColumn.php';
        ?>
    </div>

<?php
include_once 'greyFoot.php';
?>