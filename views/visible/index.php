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

<!-- Carousel -->
<div id="carousselAccueil" class="carousel slide pointer-event" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousselAccueil" data-slide-to="0" class=""></li>
        <li data-target="#carousselAccueil" data-slide-to="1" class=""></li>
        <li data-target="#carousselAccueil" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item">
            <img src="/images/batiment.jpg">
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1 class="titreSlide tshadow"><?php echo $param['s1_titre'] ?></h1>
                    <p class="tshadow"><?php echo $param['s1_sousTitre'] ?></p>
                    <p><a class="btn btn-lg btn-success" href="/?controller=presentation" role="button">En savoir plus</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/images/exterieur.jpg">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="tshadow"><?php echo $param['s2_titre'] ?></h1>
                    <p class="tshadow"><?php echo $param['s2_sousTitre'] ?></p>
                    <p><a class="btn btn-lg btn-success" href="/?controller=presentation" role="button">En savoir plus</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="/images/animation.jpg">
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1 class="tshadow"><?php echo $param['s3_titre'] ?></h1>
                    <p class="tshadow"><?php echo $param['s2_sousTitre'] ?></p>
                    <p><a class="btn btn-lg btn-success" href="/?controller=presentation" role="button">En savoir plus</a></p>
                </div>
            </div>
        </div>
    </div>


</div>

    <div class="container marketing">

        <?php
        $i = 0;
        foreach ($sections as $section) {
            $i++;
            ?>
        <!-- Images textes présentation + textes-->
        <div class="row featurette">
            <div class="col-md-7 <?php if ($i % 2 != 0){echo " order-md-2";}; ?>">
                <h2 class="featurette-heading"><?php echo $section[1]; ?><br/><span class="text-muted"><?php echo $section[2]; ?></span>
                </h2>
                <p class="lead"><?php echo $section[4]; ?></p>
            </div>
            <div class="col-md-5 <?php if ($i % 2 != 0){echo " order-md-1";}; ?>">
                <img src="/images/photoCorps1.JPG" class="img-thumbnail rounded">
            </div>
        </div>
            <hr class="featurette-divider">
            <?php
        }
        ?>
    </div>

<!-- Inclusion du footer -->
<?php require 'includes/footer.php';?>
