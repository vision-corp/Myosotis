<!--*
    * presentation.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Page de présentation du site les Myosotis. Présente les grandes lignes de l'association.
    * Permet d'accéder à des informations et des documents importants que l'on peut télécharger dans la
    * bas du site.
-->

<!-- Inclusion de l'entête -->
<?php
require 'includes/header.php';

?>

<div class="container">
    <br/>
    <h1>Présentation</h1>

    <!-- Images + textes de présentation -->
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img src="/images/tableExterieur.jpg" class="img-thumbnail rounded">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-6 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="/images/interieur.jpg" class="img-thumbnail rounded">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img src="/images/fleursExterieur.JPG" class="img-thumbnail rounded">
        </div>
    </div>

    <div class="row featurette">
        <div class="col-md-6 order-md-2">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="/images/batimentEntier.jpg" class="img-thumbnail rounded">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- Liens de téléchargements de fichiers -->
    <h3>Téléchargements</h3>

    <div class="row">


        <?php
        for($i = 0; $i < sizeof($telechargements); $i++) {
            if ($i % 2 == 0) {
                ?>
                <div class="col-md-6">
                    <ul>
                        <li><a href="<?php echo $telechargements[$i][1]; ?>" target="_blank"><?php echo $telechargements[$i][0]; ?></a></li>
                    </ul>
                </div>

                <?php
            } else {
                ?>
                <div class="col-md-6">
                    <ul>
                        <li><a href="<?php echo $telechargements[$i][1]; ?>" target="_blank"><?php echo $telechargements[$i][0]; ?></a></li>
                    </ul>
                </div>
                <?php
            }
        }
        ?>

    </div>

    <hr class="featurette-divider">
</div>
</div>

<!--Inclusion du footer-->
<?php require 'includes/footer.php';?>
