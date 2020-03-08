<!--*
    * admin-calendrier.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Permet d'afficher et de modifier le planning. Certaines options sont absentes suivant le grade.
-->

<!-- Inclusion de l'entête -->
<?php require 'includes/header.php'; ?>

<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <!-- Entête corps -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <!-- Titre de la page -->
        <h1 class="h2">Gestion du planning</h1>

        <!-- Boutons d'actions sur la page -->
        <div class="btn-toolbar mb-2 mb-md-0">

            <!-- Impression -->
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Exporter</button>
            </div>

        </div>
    </div>

    <!-- Calendrier -->
      <div id='calendar'></div>

</main>

<script src="<?php echo $RACINE; ?>/js/planning.js"></script>
<!-- footer -->
<?php require 'includes/footer.php'; ?>
