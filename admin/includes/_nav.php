<!-- Menu smartphone -->
<div class="row d-md-none">
  <div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/admin.php">Les Myosotis</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/admin/admin.php">Tableau de bord <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/admin-calendrier.php">Planning</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/admin-articles.php">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/admin-contenu.php">Contanu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/admin-membres.php">Utilisateurs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/profil.php">Mon profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/connexion.php">Se déconnecter</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

<!-- Menu sidebar desktop -->
<div class="container-fluid">
  <div class="row ">
<nav class="col-md-2 d-none d-md-block bg-light bd-sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="/admin/admin.php">
          <span data-feather="home"></span>
          Tableau de bord <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/admin-calendrier.php">
          <span data-feather="file"></span>
          Planning
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/admin-articles.php">
          <span data-feather="shopping-cart"></span>
          Articles
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/admin-contenu.php">
          <span data-feather="users"></span>
          Contenu
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/admin-membres.php">
          <span data-feather="bar-chart-2"></span>
          Utilisateurs
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Mon profil</span>
      <a class="d-flex align-items-center text-muted" href="#">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="/admin/profil.php">
          <span data-feather="file-text"></span>
          Modifier mon profil
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/connexion.php">
          <span data-feather="file-text"></span>
          Se déconnecter
        </a>
      </li>
    </ul>
  </div>
</nav>
