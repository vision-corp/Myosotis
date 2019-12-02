<!--*
    * admin-modifier-evenement.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Permet de modifier un événement
-->

<!-- Inclusion de l'entête -->
<?php require 'includes/header.php'; ?>

<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <!-- Entête corps -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <!-- Titre de la page -->
        <h1 class="h2">Modification de l'événement</h1>

        <!-- Boutons d'actions sur la page -->
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <form action="/admin/admin-calendrier.php">
                    <input type="submit" name="retour" value="retour" class="btn btn-sm btn-outline-secondary">
                </form>
            </div>
        </div>
    </div>

    <!-- Formulaire modification evenement -->
    <div class="col-md-8 order-md-1">
        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" placeholder="Titre de l'événement"equired>
                    <div class="invalid-feedback">
                        Vous devez entrer un titre d'événement valide.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="responsable" class="col-form-label">Responsable :</label>
                        <select class="form-control" name="" id="responsable">
                            <option>User 1</option>
                            <option>User 2</option>
                            <option>User 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="date" class="col-form-label">Date :</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="contenu">Description</label>
                <textarea name="contenu" id="contenu" rows="8" cols="80" class="form-control"></textarea>
                <div class="invalid-feedback">
                    Veuillez entrer un texte pour l'événement.
                </div>
            </div>

            <div class="row col-md-12">

            </div>
            <hr class="mb-4">
            <!-- Bouton de validation -->
            <input type="submtit" class="btn btn-primary btn-lg btn-block" value="Enregistrer">
        </form>
    </div>
</main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
