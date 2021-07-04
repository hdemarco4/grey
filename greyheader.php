<header class="container pt-2 border-bottom border-dark">
    <div class="row headerbox">
      <div class="col">
        <a href="index.php">
          <img src="imgs/mylogo.gif" alt="Grey Raven's Castle Logo">
        </a>
      </div>
      <div class="col snipcart-summary text-end lh-1">
        <p><a href="#" class="snipcart-customer-signin">User Profile</a>
        </p>
        <p>Number of items: <span class="snipcart-items-count"></span></br>
          Total price: <span class="snipcart-total-price"></span></p>
        <p><a href="#" class="snipcart-checkout">Click here to checkout</a></p>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <button class="navbar-toggler border border-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link border border-dark" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link border border-dark" href="charities.php">Charities</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle border border-dark" href="jewelrymain.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Jeweler's Workshop</a>
              <ul class="dropdown-menu border border-dark" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item border-bottom border-dark" href="jewelerbead.php">Beaded Creations</a></li>
                <li><a class="dropdown-item border-bottom border-dark" href="jewelerwirec.php">Copper Wire Wraps</a></li>
                <li><a class="dropdown-item border-bottom border-dark" href="jewelerwires.php">Silver Wire Wraps</a></li>
                <li><a class="dropdown-item" href="jewelerwireb.php">Bronze Wire Wraps</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link border border-dark" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="d-flex" action="search.php" method="POST">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search-in">
            <button class="btn btn-outline-dark" type="submit" name="search-b">Search</button>
          </form>
        </div>
      </div>
    </nav>

  </header>