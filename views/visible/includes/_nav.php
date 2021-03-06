<!--*
    * _nav.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Barre de navigation responsive de la partie visible du site
-->
<?php

/**
 * Permet d'afficher ou pas la variable selected suivant la page sur laquelle on se trouve.
 * @param $onglet nom de la page à tester
 * @param $page nom de la page actuelle (envoyé par le controller)
 */
function select($onglet, $page) {
    $selected = ' active';

    if (isset($page) && $page === $onglet) {
        echo $selected;
    } elseif(!isset($page) && $onglet === 'accueil') {
        echo $selected;
    }
}
?>

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a href="https://www.admr.org/" target="_blank"><img src="../images/logo_admr.png" width="110" height="50" class="d-inline-block align-top" alt=""></a>
    <a class="navbar-brand mx-md-3" href="/?controller=home">Les Myosotis</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php select('accueil', $page); ?>">
                <a class="nav-link" href="/?controller=home">Accueil </a>
            </li>
            <li class="nav-item <?php select('presentation', $page); ?>">
                <a class="nav-link" href="/?controller=presentation"
                >Présentation</a>
            </li>
            <li class="nav-item <?php select('actualite', $page); select('article', $page); ?>">
                <a class="nav-link" href="/?controller=actualite">Actualité</a>
            </li>
            <li class="nav-item <?php select('contact', $page); ?>">
                <a class="nav-link" href="/?controller=contact">Contact</a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0" method="POST" action="/?controller=Connexion&mode=admin">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"name="Ok" value="Ok">Connexion</button>
        </form>
    </div>
</nav>
