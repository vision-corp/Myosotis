<!--*
    * profil.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Afficher le profil d'un utilisateur et permet de le modifier
-->

<!-- Inclusion de l'entête -->
<?php require 'includes/header.php'; ?>

<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <!-- Entête corps -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <!-- Titre de la page -->
        <h1 class="h2">Modifier mon profil</h1>
    </div>

    <!-- Formulaire de modification du profil -->
    <div class="col-md-8 order-md-1">
        <?php
            if ($erreurs != null) {
        ?>
        <div class="alert alert-danger" role="alert">
            <ul>
                <?php for ($i = 0; $i < sizeof($erreurs); $i++) { ?>
                <li><?php echo $erreurs[$i]; ?></li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
        <form class="needs-validation" method="post" action="/?controller=profil&mode=admin&action=modifyUser">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom"
                        <?php echo ' value="' . $prenom . '"'; ?>
                    required >
                    <div class="invalid-feedback">
                        Vous devez entrer un prénom valide.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom"
                        <?php echo ' value="' . $nom . '"'; ?>
                           required>
                    <div class="invalid-feedback">
                        Vous devez entrer un nom valide.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="pseudo">Pseudo</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo"
                        <?php echo ' value="' . $pseudo . '"'; ?>
                           required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Un pseudo est requis.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemple.fr"
                    <?php echo ' value="' . $email . '"'; ?>
                required >
                <div class="invalid-feedback">
                    Un email correct est obligatoire.
                </div>
            </div>
            <div class="mb-3">
                <label for="apass">Ancien mot de passe</label>
                <input type="password" class="form-control" id="apass" name="apass" placeholder="Ancien mot de passe">
                <div class="invalid-feedback">
                    Mot de passe incorrect.
                </div>
            </div>
            <div class="mb-3">
                <label for="npass">Nouveau mot de passe</label>
                <input type="password" class="form-control" id="npass" name="npass" placeholder="Nouveau mot de passe">
                <div class="invalid-feedback">
                    Les mots de passe ne correspondent pas.
                </div>
            </div>
            <div class="mb-3">
                <label for="rnpass">Répétez votre mot de passe</label>
                <input type="password" class="form-control" id="rnpass" name="rnpass" placeholder="Répétez votre mot de passe">
                <div class="invalid-feedback">
                    Les mots de passe ne correspondent pas.
                </div>
            </div>
            <input type="hidden" name="id" id="id" value=<?php echo $id;?>>

            <hr class="mb-4">
            <!-- Bouton de validation -->
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enregistrer">
        </form>
    </div>

</main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
