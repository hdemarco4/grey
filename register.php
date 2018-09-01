<?php
include_once 'greyHead.php';
?>

    <div class="row">
        <?php
        include_once 'leftColumn.php';
        ?>

        <div class="column middle">
            <form action="includes/reg.inc.php" class="regForm" method="POST">
                <input type="text" name="email" placeholder="Enter email" required>
                <input type="password" name="pwd" placeholder="Enter password" required>
                <input type="password" name="pwd2" placeholder="Enter password again" required>

                <button type="submit" name="submit">Register</button>

            </form>

        </div>

        <?php
        include_once 'rightColumn.php';
        ?>

    </div>

<?php
include_once 'greyFoot.php';
?>