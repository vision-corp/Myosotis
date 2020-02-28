<!--*
    * admin-articles.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Affiche les articles avec possibilité de modification ou de suppression
-->

<!-- Inclusion de l'entête et du script du modal de suppression d'article -->
<?php require 'includes/header.php';
require 'includes/modals/ajout-telechargement.php';
?>

<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <!-- Entête corps -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <!-- Titre de la page -->
        <h1 class="h2">Paramètres de l'application</h1>

    </div>

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-accueil-tab" data-toggle="tab" href="#nav-accueil" role="tab" aria-controls="nav-accueil" aria-selected="true">Slides accueil</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-telechargements" role="tab" aria-controls="nav-telechargemenbts" aria-selected="false">Téléchargements</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-mentions" role="tab" aria-controls="nav-mentions" aria-selected="false">Mentions légales</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-accueil" role="tabpanel" aria-labelledby="nav-accueil-tab">
            <form action="/?controller=parametres&mode=admin&action=updateSlide" method="post" id="formSlide">
                <hr />
                <div class="" role="" id="messageSlide"></div>
                <h4>Slide 1</h4>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="titre" class="">Titre</label>
                        <input type="text" class="form-control" name="titreSlide1" id="titreSlide1" value="<?php echo $optn['s1_titre']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Sous-titre</label>
                        <input type="text" class="form-control" name="sousTitreSlide1" id="sousTitreSlide1" value="<?php echo $optn['s1_sousTitre']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Image</label>
                        <input type="text" class="form-control" name="imageSlide1" id="imageSlide1" value="<?php echo $optn['s1_image']; ?>">
                    </div>
                </div>

                <hr/>

                <h4>Slide 2</h4>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="titre" class="">Titre </label>
                        <input type="text" class="form-control" name="titreSlide2" id="titreSlide2" value="<?php echo $optn['s2_titre']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Sous-titre</label>
                        <input type="text" class="form-control" name="sousTitreSlide2" id="sousTitreSlide2" value="<?php echo $optn['s2_sousTitre']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Image</label>
                        <input type="text" class="form-control" name="imageSlide2" id="imageSlide2" value="<?php echo $optn['s2_image']; ?>">
                    </div>
                </div>

                <hr/>

                <h4>Slide 3</h4>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="titre" class="">Titre </label>
                        <input type="text" class="form-control" name="titreSlide3" id="titreSlide3" value="<?php echo $optn['s3_titre']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Sous-titre</label>
                        <input type="text" class="form-control" name="sousTitreSlide3" id="sousTitreSlide3" value="<?php echo $optn['s3_sousTitre']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Image</label>
                        <input type="text" class="form-control" name="imageSlide3" id="imageSlide3" value="<?php echo $optn['s3_image']; ?>">
                    </div>
                </div>
                <hr/>

                <input type="submit" value="Valider" class="btn btn-success">
            </form>
        </div>
        <div class="tab-pane fade" id="nav-telechargements" role="tabpanel" aria-labelledby="nav-telechargements-tab">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Lien</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>

                <?php
                for($i = 0; $i < sizeof($tel); $i++) {


                    ?>

                    <form action="/?controller=parametres&mode=admin&action=updateTel" method="post">
                        <tr>
                            <th scope="row"><?php echo $i + 1;?></th>
                            <td><input type="text" class="form-control" name="titre" id="titre" value="<?php echo $tel[$i][0];?>"/></td>
                            <td><input type="text" class="form-control" name="lien" id="lien" value="<?php echo $tel[$i][1];?>"/></td>
                            <input type="hidden" value="<?php echo $tel[$i][2] ?>" name="id" id="id">
                            <td>
                                <input type="submit" value="Modifier" class="btn btn-success">
                                <a href="/?controller=parametres&mode=admin&action=deleteTel&id=<?php echo $tel[$i][2] ?>" class="btn btn-danger">Supprimer</a>

                            </td>
                        </tr>
                    </form>

                    <?php
                }
                ?>

                </tbody>
            </table>
            <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modalAjoutTelechargement">+</a>
        </div>



        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <form action="/?controller=parametres&mode=admin&action=updateContact" id="formContactParam" method="post">
                <hr/>
                <div class="" role="" id="messageContact"></div>
                <div class="col-md-8">
                    <h4>Contact</h4>
                    <div class="form-group">
                        <label for="titre">Email </label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $optn['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Telephone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" value="<?php echo $optn['telephone']; ?>">
                    </div>
                    <br/>
                    <h4>Adresse</h4>
                    <div class="form-group">
                        <label for="titre" class="">Adresse</label>
                        <input type="text" class="form-control"  id="adresse" name="adresse" value="<?php echo $optn['adresse']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Code postal</label>
                        <input type="text" class="form-control" id="cp" name="cp" value="<?php echo $optn['cp']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" value="<?php echo $optn['ville']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Pays</label>
                        <input type="text" class="form-control" id="pays" name="pays" value="<?php echo $optn['pays']; ?>">
                    </div>
                    <br/>
                    <hr/>
                    <br/>
                    <h4>Conditions d'utilisation formulaire</h4>
                    <div class="form-group">
                        <textarea id="txtEditor" name="txtEditor"><?php echo $optn['conditions_formContact']; ?></textarea>
                        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>tinymce.init({selector:'textarea'});</script>
                    </div>
                </div>
                <hr/>
                <input type="submit" value="Valider" class="btn btn-success">
                <input type="submit" value="Annuler" class="btn btn-danger">
            </form>
        </div>




        <div class="tab-pane fade" id="nav-mentions" role="tabpanel" aria-labelledby="nav-mentions-tab">
            <form action="/?controller=parametres&mode=admin&action=updateMentionsLegales" method="POST">
                <br/>
                <div class="" role="" id="messageMentionsLegales"></div>

                <h4>Conditions d'utilisation formulaire</h4>
                <div class="form-group">
                    <textarea id="txtEditor" name="txtEditor"><?php echo $optn['mentionsLegales']; ?></textarea>
                    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                    <script>tinymce.init({selector:'textarea'});</script>
                </div>
                <hr/>
                <input type="submit" value="Valider" class="btn btn-success">
                <input type="submit" value="Annuler" class="btn btn-danger">
        </div>

        </form>
    </div>
    </div>

</main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>

<script src="/js/admin_param.js">
</script>
