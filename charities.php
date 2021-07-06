<?php
    include_once 'greyHead.php';
    ?>


<title>Grey Raven's Castle - Charities</title>
<meta name="description" content="This is a list of the charities that we support here at Grey Raven's Castle.">
<meta property="og:title" content="Grey Raven's Castle - Charities">
<meta property="og:description" content="This is a list of the charities that we support here at Grey Raven's Castle.">
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
        <h1>Charities</h1>
        <p>Here are some charities that we support.</p>

        <div class="container">
          <div class="row">
            <div class="col">

              <div class="card mb-4 border-0" style="width: 14rem;">
                <img src="imgs/MAF_White_Logo.png" class="card-img-top" alt="https://www.morrisanimalfoundation.org/">
                <div class="card-body text-center">
                  <a href="https://www.morrisanimalfoundation.org/" class="btn btn-outline-dark stretched-link border-0" target="_blank">Donate</a>
                </div>
              </div>

              <div class="card mb-4 border-0" style="width: 14rem;">
                <img src="imgs/DFL-main-RGB.png" class="card-img-top" alt="https://www.ddfl.org/">
                <div class="card-body text-center">
                  <a href="https://www.ddfl.org/" class="btn btn-outline-dark stretched-link border-0" target="_blank">Donate</a>
                </div>
              </div>

              <div class="card mb-4 border-0" style="width: 14rem;">
                <img src="imgs/aspca-logo-square.png" class="card-img-top" alt="https://www.aspca.org/">
                <div class="card-body text-center">
                  <a href="https://www.aspca.org/" class="btn btn-outline-dark stretched-link border-0" target="_blank">Donate</a>
                </div>
              </div>

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