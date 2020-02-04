<!--*
    * admin-articles.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Affiche les articles avec possibilité de modification ou de suppression
-->

<!-- Inclusion de l'entête et du script du modal de suppression d'article -->
<?php require 'includes/header.php';
require 'includes/modals/ajout-article.php';
require 'includes/modals/modification-article.php';
require 'includes/modals/suppr-article-modal.php';
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
            <hr />
            <?php
                for($i = 0; $i < 3;$i++) {
                    ?>
                    <h4>Slide <?php echo $i + 1 ?></h4>
                    <form action="#">

                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="titre" class="">Titre </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="titre" class="">Sous-titre</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="titre" class="">Image</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <input type="submit" value="Valider" class="btn btn-success">
                    </form>
                    <hr/>
                    <?php
                }
            ?>
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
                    for($i = 0; $i < 8; $i++) {


                ?>

                <form action="#">
                <tr>
                    <th scope="row"><?php echo $i + 1;?></th>
                    <td><input type="text" class="form-control" value="Titre <?php echo $i + 1;?>"/></td>
                    <td><input type="text" class="form-control" value="http://www.lienf.fr"/></td>
                    <td>
                        <button type="button" class="btn btn-success">Modifier</button>
                        <button type="button" class="btn btn-danger">Supprimer</button>

                    </td>
                </tr>
                </form>

                <?php
                    }
                ?>

                </tbody>
            </table>
            <input type="submit" class="btn btn-secondary" value="+">
        </div>



        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <form action="#">
                <hr/>

                <div class="col-md-8">
                    <h4>Contact</h4>
                    <div class="form-group">
                        <label for="titre" class="">Email </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Telephone</label>
                        <input type="text" class="form-control">
                    </div>
                    <br/>
                    <h4>Adresse</h4>
                    <div class="form-group">
                        <label for="titre" class="">Adresse</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Code postal</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Ville</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="titre" class="">Pays</label>
                        <input type="text" class="form-control">
                    </div>
                    <br/>
                    <hr/>
                    <br/>
                    <h4>Conditions d'utilisation formulaire</h4>
                    <div class="form-group">
                        <textarea id="txtEditor"></textarea>
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
            <form action="#">
                    <br/>
                    <h4>Conditions d'utilisation formulaire</h4>
                    <div class="form-group">
                        <textarea id="txtEditor"></textarea>
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