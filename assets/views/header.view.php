<!-- HEADER VIEW PHP -->
<header class="header">
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6 text-center mt-5">
            <h1>The Meatgrinder</h1>
        </div>

        <div class="col-md-3 text-end pe-5 mt-5">
            <i class="bi bi-cart4 fs-5 cart-icon" @click="showShoppingCart"></i>
        </div>
    </div>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="?page=home">Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="?page=home">Home</a>
      <a class="nav-item nav-link" href="?page=contact">Contact Us</a>
      <a class="nav-item nav-link" href="?page=addproducts">Add products</a>
      <a class="nav-item nav-link" href="?page=register">Register</a>
      <a class="nav-item nav-link" href="?page=login">Login</a>
    </div>
  </div>
</nav>
    <?= !is_null($content) && array_key_exists('headerData', $content) ? $content['headerData'] : '' ?>
</header>