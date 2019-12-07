<!--*
    * _nav.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Menu du panel admin. Adaptable en fonction du grade
-->
<?php
    // Configuration des liens menant à chaque page de la partie admin
    $dashboard = "/?controller=admin&mode=admin";
    $planning = "/?controller=planning&mode=admin";
    $articles = "/?controller=articles&mode=admin";
    $contenu = "/?controller=contenu&mode=admin";
    $utilisateurs = "/?controller=utilisateurs&mode=admin";
    $profil = "/?controller=profil&mode=admin";
    $deconnexion = "/?controller=connexion&mode=admin";
?>

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
                        <a class="nav-link" href="<?php echo $dashboard; ?>">Tableau de bord <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $planning; ?>">Planning</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $articles; ?>">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $contenu; ?>">Contenu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $utilisateurs; ?>">Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $profil; ?>">Mon profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $deconnexion; ?>">Se déconnecter</a>
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
                        <a class="nav-link active" href="<?php echo $dashboard; ?>">
                            <span data-feather="home"></span>
                            Tableau de bord <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $planning; ?>">
                            <span data-feather="file"></span>
                            Planning
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $articles; ?>">
                            <span data-feather="shopping-cart"></span>
                            Articles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $contenu; ?>">
                            <span data-feather="users"></span>
                            Contenu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $utilisateurs; ?>">
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
                        <a class="nav-link" href="<?php echo $profil; ?>">
                            <span data-feather="file-text"></span>
                            Modifier mon profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $deconnexion; ?>">
                            <span data-feather="file-text"></span>
                            Se déconnecter
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
