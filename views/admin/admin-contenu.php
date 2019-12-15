<!--*
    * admin-contenu.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Permet de modifier le contenu du site (articles, titres, ...)
-->

<!-- Inclusion de l'entête -->
<?php
    require 'includes/header.php';
    require 'includes/modals/ajout-section.php';
    require 'includes/modals/suppr-section.php';
    require 'includes/modals/modification-section.php';

    spl_autoload_extensions(".php");
    spl_autoload_register();
    use yasmf\HttpHelper;
?>

<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <!-- Entête corps -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Titre de la page -->
                    <h1 class="h2">Modifier le contenu du site</h1>
                    <!-- Boutons d'actions sur la page -->

                </div>

                <!-- Bouton de retour -->
                <div class=" mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalAjoutSection">Ajouter une section</a>
                    </div>
                    <div class="btn-group mr-2">

                        <form action="/views/adminadmin/admin-articles.php">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Accueil
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Accueil</a>
                                    <a class="dropdown-item" href="#">Présentation</a>
                                    <a class="dropdown-item" href="#">Contact</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <br/>

            <!-- Liste des sections -->
            <table class="table">
                <tbody>
                <tr>
                    <td>User 1</td>
                    <td class="cellModifier"><a href="#"data-toggle="modal" data-target="#modalModificationSection">Modifier</a></td>
                    <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#supprSectionModal">Supprimer</a></td>
                </tr>
                <tr>
                    <td>User 2</td>
                    <td class="cellModifier"><a href="#"data-toggle="modal" data-target="#modalModificationSection">Modifier</a></td>
                    <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#supprSectionModal">Supprimer</a></td>
                </tr>
                <tr>
                    <td>User 3</td>
                    <td class="cellModifier"><a href="#"data-toggle="modal" data-target="#modalModificationSection">Modifier</a></td>
                    <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#supprSectionModal">Supprimer</a></td>
                </tr>
                <tr>
                    <td>User 4</td>
                    <td class="cellModifier"><a href="#"data-toggle="modal" data-target="#modalModificationSection">Modifier</a></td>
                    <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#supprSectionModal">Supprimer</a></td>
                </tr>
                </tbody>
            </table>
        </div>
</main>
<!-- footer -->
<?php require 'includes/footer.php'; ?>
