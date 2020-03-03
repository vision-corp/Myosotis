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
