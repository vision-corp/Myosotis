<!--*
    * contact.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Page de présentation du site les Myosotis. Présente les grandes lignes de l'association.
    * Permet d'accéder à des informations et des documents importants que l'on peut télécharger dans la
    * bas du site.
-->

<!-- Inclusion de l'entête et du script de fenêtre modale pour conditions d'utilisation des données -->
<?php
require 'includes/header.php';
require 'includes/_modal-conditions-formulaire.php'
?>

<div class="container marketing">
    <br/>
    <h1>Nous contacter</h1>

    <!-- Formulaire de contact -->
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" aria-describedby="aideNom" placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="john.doe@mail.fr">
                </div>
                <div class="form-group">
                    <label for="object">Objet</label>
                    <input type="text" class="form-control" id="object" aria-describedby="aiudeObjet" placeholder="Ex :Demande d'accueil">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" rows="8" cols="80" class="form-control"></textarea>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                        J'accepte les   <a href="#" class="" data-toggle="modal" data-target="#modal-conditions-formulaire">conditions d'utilisation</a>
                    </label>
                </div>
                <!-- Bouton de validaiton -->
                <input type="submit" class="btn btn-success" value="Envoyer"/>
            </form>
        </div>

        <!-- Carte google map -->
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23551.649258475583!2d2.557043796550918!3d44.3635656386586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b27d9d6875ad6d%3A0x9b8b9a75d5317ec2!2sIUT%20(Institut%20Universitaire%20de%20Technologie)!5e0!3m2!1sfr!2sfr!4v1574679373671!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
    <hr class="featurette-divider">
</div>

<!--Inclusion du footer-->
<?php require 'includes/footer.php';?>
