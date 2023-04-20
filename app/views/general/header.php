<header class="header">
  <div class="offers">
    ofertas de cambio de temporada
  </div>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
      foreach ($sections as $key => $section) {
        if (isset($currentpage) and $currentpage == $key) {
          $active = " active ";
        }else {
          $active = "";
        }
        echo '
        <li class="nav-item '.$active.'">
          <a class="nav-link " href="'.URL.'/'.$key.'">'.$section.'</a>
          </li>
          ';
      }
    ?>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/DarthMarr.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/saga.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Sanguinius.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>