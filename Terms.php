<?php
    include_once 'greyHead.php';
    ?>


  <title>Grey Raven's Castle - Terms and Conditions</title>
  <meta name="description"
    content="The terms and conditions for Grey Raven's Castle.">
  <meta property="og:title" content="Grey Raven's Castle - Terms and Conditions">
  <meta property="og:description"
    content="The terms and conditions for Grey Raven's Castle.">
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

      <div class="col middle py-3 ps-4 border-sm-bottom border-md-bottom-0">
        <h2>Terms and Conditions</h2>
        <p><?php echo file_get_contents('includes/Terms.txt')?></p>

      </div>

      <?php
        include_once 'greyright.php';
    ?>
    </div>
  </main>

  <?php
    include_once 'greyFoot.php';
    ?>