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

<?php
if (isset($article)) {
    ?>
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-12">
                <h1> <?php echo $article['titre'] ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p><i> <?php echo $article['datePublication'] ?></i></p>

            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <!-- TODO remplacer image -->
                <img src="/images/photoCorps1.JPG" class="img-article">
            </div>
            <div class="col-md-7">
                <?php echo $article['contenu'] ?>
            </div>
        </div>

        <hr/>
        <br/>
    </div>

<?php  } ?>
<!-- Inclusion du footer -->
<?php require 'includes/footer.php';?>
