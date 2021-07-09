<?php
    include_once 'greyHead.php';
    ?>


  <title>Grey Raven's Castle - Contact Us</title>
  <meta name="description"
    content="The Grey Raven's Castle contact page.">
  <meta property="og:title" content="Grey Raven's Castle - Contact Us">
  <meta property="og:description"
    content="The Grey Raven's Castle contact page.">
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

        <h1>Contact Us</h1>

        <form action="includes/mail.php" method="post" class="mb-5">

          <div class="inputwrapper row mb-3">
            <label for="name" class="col-sm-2 newline">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" id="name" placeholder="Name">
            </div>
          </div>

          <div class="inputwrapper row mb-3">
            <label for="email" class="col-sm-2 newline">Email Address</label>
            <div class="col-sm-10">
              <input type="email" name="email" id="email" placeholder="Email">
            </div>
          </div>

          <div class="inputwrapper">
            <label for="message" class="newline">What do you think?</label>
            <textarea name="message" id="message" cols="50" rows="5" placeholder="message..."></textarea>
          </div>

          <input type="submit" value="Submit" class="mybutton btn btn-outline-dark">

        </form>

        <p>If the form isn't working, email us at <a href="mailto:greyraven1@gmail.com?Subject=Web Contact" target="_blank">greyraven1@gmail.com</a></p>
        
        </div>

      <?php
        include_once 'greyright.php';
    ?>
    </div>
  </main>

  <?php
    include_once 'greyFoot.php';
    ?>