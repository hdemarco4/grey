<?php
    include_once 'greyHead.php';
    ?>

<div class="row">
    <?php
        include_once 'leftColumn.php';
    ?>

    <div class="column middle">
        <p>This is a castle filled with craftsmen and story tellers.  It starts with just a few rooms but will continue to grow.</p>
        <p>Welcome. Make your self at home.</p>

        <h2>News</h2>

        <?php
            $files = scandir('news', SCANDIR_SORT_DESCENDING);


            for($i=0; $i <= 4; $i++){
                echo '<hr width=100%  align=center>';
                include "news/$files[$i]";
                echo '<br />';

            }
        echo '<hr width=100%  align=center>';
        ?>
        <a href="newsArchive.php">Archive</a>

        <?php
            if(isset($_SESSION['u_email'])) {
                echo "You are logged in";

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