<?php
    include_once 'greyHead.php';
    ?>


  <title>Grey Raven's Castle - Search Results</title>
  <meta name="description"
    content="Search results page.">
  <meta property="og:title" content="Grey Raven's Castle - Search Results">
  <meta property="og:description"
    content="Search results page.">
</head>

<body>

  <?php
        include_once 'greyheader.php';
  ?>

  <main class="container">
    <div class="row">
    <?php
        include_once 'greyleft.php';
    ?>

      <div class="col middle pt-3 ps-4 border-sm-bottom border-md-bottom-0">
      <h2>Search Results</h2>
            <?php
                include_once 'includes/dbh.inc.php';
            ?>

            <div class="search">
                <?php
                    if(isset($_POST['search-b'])){
                        $search = mysqli_real_escape_string($conn, $_POST['search-in']);
                        $sql = "SELECT id, name, ind_page FROM hjewelry WHERE name LIKE '%$search%' OR id LIKE '%$search%' OR description LIKE '%$search%'";
                        $result = mysqli_query($conn, $sql);
                        $queryResult = mysqli_num_rows($result);


                        echo "There are ".$queryResult." results."; ?> </br> 
                        
                        <div class="container">
                            <div class="row">

                        <?php

                        if($queryResult > 0){
                            while($row = mysqli_fetch_assoc($result)) {
                                $pic_url = 'pics/'.$row['id'];
                                $n = $row['name'];
                                $i = $row['ind_page'];
                                $qs = glob($pic_url . "{ t.JPG, c.JPG,-1 bc.JPG}",GLOB_BRACE );

                                foreach($qs as $q){
                                    ?>

                                        <div class="col">
                                            <div class="card mb-4" style="width: 14rem;">
                                                <img src="<?php echo $q ?>" class="card-img-top" alt="<?php $row['name']?>">
                                                <div class="card-body">
                                                    <a href="<?php echo $i ?>" class="btn btn-outline-dark stretched-link border-0"><?php echo $n ?></a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                }
                            }
                        }
                    }
                ?>
                            </div>
                        </div>
            </div>

      </div>

      <?php
        include_once 'greyright.php';
    ?>
    </div>
  </main>

  <?php
    include_once 'greyFoot.php';
    ?>