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
<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <!-- Entête corps -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <!-- Titre de la page -->
        <h1 class="h2">Gestion du contenu</h1>

    </div>

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-accueil-tab" data-toggle="tab" href="#nav-accueil" role="tab" aria-controls="nav-accueil" aria-selected="true">Accueil</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-presentation" role="tab" aria-controls="nav-presentation" aria-selected="false">Présentation</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-accueil" role="tabpanel" aria-labelledby="nav-accueil-tab">
            <!-- Entête corps -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">

                <!-- Titre de la page -->
                <h1 class="h2"></h1>

                <!-- Boutons pour ajouter un utilisateur -->
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalAjoutSection" data-page="accueil">Ajouter une section</a>
                    </div>
                </div>
            </div>
            <!-- Liste des utilisateurs -->
            <table class="table">
                <tbody>
                <?php
                foreach ($accueil as $section)
                {
                    ?>
                    <tr>
                        <td><?php echo $section[1]; ?></td>
                        <td class="cellModifier"><a href="#" data-toggle="modal" data-target="#modalModificationSection" data-id="<?php echo $section[0]; ?>" data-titre="<?php echo $section[1]; ?>" data-soustitre="<?php echo $section[2]; ?>" data-image="<?php echo $section[3]; ?>" data-contenu="<?php echo htmlentities($section[4]); ?>" data-pos="<?php echo $section[5]; ?>">Modifier</a></td>
<!--                        <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#supprSectionModal" data-id="--><?php //echo $section[0]; ?><!--" >Supprimer</a></td>-->
                        <td class="cellModifier"><a href="/?controller=contenu&mode=admin&action=deleteSection&id=<?php echo $section[0]; ?>" class="text-danger">Supprimer</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade" id="nav-presentation" role="tabpanel" aria-labelledby="nav-presentation-tab">
            <!-- Entête corps -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">

                <!-- Titre de la page -->
                <h1 class="h2"></h1>

                <!-- Boutons pour ajouter un utilisateur -->
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalAjoutSection" data-page="presentation">Ajouter une section</a>
                    </div>
                </div>
            </div>
            <!-- Liste des utilisateurs -->
            <table class="table">
                <tbody>
                <?php
                foreach ($presentation as $section)
                {
                    ?>
                    <tr>
                        <td><?php echo $section[1]; ?></td>
                        <td class="cellModifier"><a href="#" data-toggle="modal" data-target="#modalModificationSection" data-id="<?php echo $section[0]; ?>" data-titre="<?php echo $section[1]; ?>" data-soustitre="<?php echo $section[2]; ?>" data-image="<?php echo $section[3]; ?>" data-contenu="<?php echo htmlentities($section[4]); ?>" data-pos="<?php echo $section[5]; ?>">Modifier</a></td>
<!--                        <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#supprSectionModal" data-id="--><?php //echo $section[0]; ?><!--" >Supprimer</a></td>-->
                        <td class="cellModifier"><a href="/?controller=contenu&mode=admin&action=deleteSection&id=<?php echo $section[0]; ?>" class="text-danger">Supprimer</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<!-- footer -->
<?php require 'includes/footer.php'; ?>
