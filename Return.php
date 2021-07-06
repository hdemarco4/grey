<?php
    include_once 'greyHead.php';
    ?>


  <title>Grey Raven's Castle - Return Policy</title>
  <meta name="description"
    content="The return policy for Grey Raven's Castle.">
  <meta property="og:title" content="Grey Raven's Castle - Return Policy">
  <meta property="og:description"
    content="The return policy for Grey Raven's Castle.">
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
        <h2>Return Policy</h2>
        <p><?php echo file_get_contents('includes/Return.txt')?></p>

      </div>

      <?php
        include_once 'greyright.php';
    ?>
    </div>
  </main>

  <?php
    include_once 'greyFoot.php';
    ?>