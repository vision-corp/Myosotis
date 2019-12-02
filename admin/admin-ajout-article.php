<!-- header -->
<?php require 'includes/header.php'; ?>

<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  <!-- Entête corps -->
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <!-- Titre de la page -->
    <h1 class="h2">Ajouter un article</h1>

    <!-- Boutons d'actions sur la page -->
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <form action="/admin/admin-articles.php">
          <input type="submit" name="retour" value="retour" class="btn btn-sm btn-outline-secondary">
        </form>
      </div>
    </div>
  </div>

  <!-- Liste des utilisateurs -->

  <!-- Formulaire d'ajout d'un article -->
  <div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" placeholder="Titre de l'article" required>
            <div class="invalid-feedback">
              Vous devez entrer un titre d'article valide.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
              <label for="image">Image</label>
              <input type="text" class="form-control" id="image" placeholder="Image de l'article" required>
              <div class="invalid-feedback" style="width: 100%;">
                Une image est requise pour créer un article.
              </div>
            </div>
          <div class="col-md-6 mb-3">
              <label for="date">Date</label>
              <input type="date" class="form-control" id="date" placeholder="Pseudo" required>
              <div class="invalid-feedback" style="width: 100%;">
                Ude date doit être renseignée.
              </div>
          </div>
        </div>


        <div class="mb-3">
          <label for="contenu">Texte</label>
          <textarea name="contenu" id="contenu" rows="8" cols="80" class="form-control"></textarea>
          <div class="invalid-feedback">
            Veuillez entrer un texte pour l'article.
          </div>
        </div>

        <div class="row col-md-12">

        </div>
        <hr class="mb-4">

          <!-- Bouton de validation -->
          <input type="submtit" class="btn btn-primary btn-lg btn-block" value="Enregistrer">
      </form>
    </div>

</main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
