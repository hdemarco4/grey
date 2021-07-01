<?php
    include_once 'greyhead2.php';
    ?>


<title>Grey Raven's Castle - Product</title>
<meta name="description" content="Change">
<meta property="og:title" content="Grey Raven's Castle - Product">
<meta property="og:description" content="Change">
</head>

<body>

  <?php
        include_once 'greyheader2.php';
  ?>

  <main class="container">
    <div class="row">
      <?php
        include_once 'greyleft2.php';
    ?>

      <div class="col middle pt-3 ps-4 border-sm-bottom border-md-bottom-0">
        <h3> NAME </h3>



        <p>The price for this piece is $PRICE</p>
        <button class="snipcart-add-item btn btn-outline-dark prod" 
          data-item-id="ID" 
          data-item-name="NAME" 
          data-item-price="PRICE"
          data-item-url="URL" 
          data-item-description="description"
          data-item-image="../pics/ID c.JPG" 
          data-item-weight="85" 
          data-item-width="12"
          data-item-length="20" 
          data-item-height="2" 
          data-item-max-quantity="1">
          Add To Cart
        </button>


        <p>Product description</p>



        <div class="container">
            <div class="row card-group">
              <div class="col">
                  <div class="card mb-4" style="width: 14rem;">
                    <img src="../pics/ID  .jpg" class="card-img-top" alt="DESC">
                  </div>
              </div>

              <div class="col">
                  <div class="card mb-4" style="width: 14rem;">
                    <img src="../pics/ID  .jpg" class="card-img-top" alt="DESC">
                  </div>
              </div>

              <div class="col">
                  <div class="card mb-4" style="width: 14rem;">
                    <img src="../pics/ID  .jpg" class="card-img-top" alt="DESC">
                  </div>
              </div>
            </div>
          </div>
        



      </div>

      <?php
        include_once '../greyright.php';
    ?>
    </div>
  </main>

  <?php
    include_once 'greyfoot2.php';
    ?>