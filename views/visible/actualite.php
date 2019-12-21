<!--*
    * index.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Page d'accueil du site les Myosotis. Présente les grandes lignes de l'association.
    * Permet aux utilisateurs d'accéder aux autres pages et de visualiser les articles.
-->

<!-- Inclusion de l'entête -->
<?php
require 'includes/header.php';
?>

<div class="container">
    <br/>
    <h1>Actualité</h1>
    <div class="row">
        <?php
        for ($i = 0; $i < 8; $i++) {

            ?>
            <div class="col-md-4 col-sm-3 col-xs-2">
                <div class="card mb-5" style="width: 18rem;">
                    <img src="/images/vignette.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Article <?php echo $i + 1 ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/?controller=article" class="btn btn-success">En savoir plus</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<!-- Inclusion du footer -->
<?php require 'includes/footer.php';?>
