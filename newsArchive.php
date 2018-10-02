<?php
include_once 'greyHead.php';
?>

    <div class="row">
        <?php
        include_once 'leftColumn.php';
        ?>

        <div class="column middle">
            <h2>News Archive</h2>

            <?php
            $files = scandir('news', SCANDIR_SORT_DESCENDING);


            for($i=0; $i <= count($files)-3; $i++){
                echo '<hr width=100%  align=center>';
                include "news/$files[$i]";
                echo '<br />';

            }
            echo '<hr width=100%  align=center>';
            ?>

        </div>

        <?php
        include_once 'rightColumn.php';
        ?>

    </div>

<?php
include_once 'greyFoot.php';
?>