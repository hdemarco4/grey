<?php
include_once 'greyHead.php';
?>

    <div class="row">
        <?php
        include_once 'leftColumn.php';
        ?>

        <div class="column middle">
            <p>Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit.</p>
            <p>If your registration is successful, the url will say 'register=success'.</p>
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