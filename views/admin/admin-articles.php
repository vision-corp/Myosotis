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
        <h1 class="h2">Gestion des articles</h1>
        <!-- Boutons d'actions sur la page -->
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modalAjoutArticle" data-whatever="@fat" text-decoration-none>Ajouter un article</a>
            </div>
        </div>
    </div>

    <?php if (isset($_SESSION['erreursArticles']) && $_SESSION['erreursArticles'] != null) { ?>

        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['erreursArticles'];?>
        </div>


    <?php } ?>
    <!-- Liste des articles -->
    <table class="table">
        <tbody>

        <?php if (isset($liste)) {
            foreach ($liste as $ligne) { ?>
                <tr>
                    <td> <?php echo $ligne['titre'] ?> </td>
                    <td class="cellModifier"><a href="#"data-toggle="modal" data-target="#modalModifArticle" data-id="<?php echo $ligne['id']; ?>" data-titre="<?php echo $ligne['titre']; ?>" data-soustitre="<?php echo $ligne['sousTitre']; ?>" data-image="<?php echo $ligne['image']; ?>" data-txteditor="<?php echo htmlentities($ligne['contenu']); ?>" >Modifier</a></td>
                    <td class="cellModifier"><a href="#" class="text-danger" data-toggle="modal" data-target="#supprArticleModal" data-id="<?php echo $ligne['id'] ?>">Supprimer</a></td>
                </tr>
            <?php } }?>

        </tbody>
    </table>
</main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
