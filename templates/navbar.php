<?php
function isActive($page)
{
  return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
}
?>

<nav class="navbar navbar-expand-md bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand ms-5" href="/"><img src="../../assets/img/logo_2023.png" alt="Logo" width="40" class="d-inline-block align-text-top"></a>

    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item me-4">
          <a class="nav-link text-light <?= isActive('/'); ?>" aria-current="page" href="/">Accueil</a>
        </li>

        <li class="nav-item dropdown me-4">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Articles
          </a>
          <ul class="dropdown-menu bg-dark text-bg-light">
            <li><a class="dropdown-item text-light <?= isActive('/articles'); ?>" href="articles">Articles</a></li>
            <li>
              <hr class="dropdown-divider text-bg-light">
            </li>
            <li><a class="dropdown-item text-light" href="/tagg">Tagg</a></li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown me-4">
          <a class="nav-link dropdown-toggle text-light <?= isActive('/account.php'); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Compte
          </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-light" href="/account.php/login.php">Connexion</a></li>
            <li>
              <hr class="dropdown-divider text-bg-light">
            </li>
            <li><a class="dropdown-item text-light" href="/account.php/signin.php">Inscription</a></li>
          </ul>
        </li>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
          <button class="btn btn-outline-dark text-ligh" type="submit">Rechercher</button>
        </form>
      </ul>
    </div>
  </div>
</nav>