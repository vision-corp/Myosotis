<!-- header -->
<?php require 'includes/header.php'; ?>

<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  <!-- Entête corps -->
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <!-- Titre de la page -->
    <h1 class="h2">Ajouter un utilisateur</h1>

    <!-- Boutons d'actions sur la page -->
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <form action="/admin/admin-membres.php">
          <input type="submit" name="retour" value="retour" class="btn btn-sm btn-outline-secondary">
        </form>
      </div>
    </div>
  </div>

  <!-- Liste des utilisateurs -->
  <!-- Menu d'ajout d'un utilisateur -->
  <div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Prénom</label>
            <input type="text" class="form-control" id="firstName" placeholder="Prénom"equired>
            <div class="invalid-feedback">
              Vous devez entrer un prénom valide.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Nom</label>
            <input type="text" class="form-control" id="lastName" placeholder="Nom"required>
            <div class="invalid-feedback">
              Vous devez entrer un nom valide.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Pseudo</label>
          <div class="input-group">
            <input type="text" class="form-control" id="username" placeholder="Pseudo" required>
            <div class="invalid-feedback" style="width: 100%;">
              Un pseudo est requis.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="email@exemple.fr">
          <div class="invalid-feedback">
            Un email correct est obligatoire.
          </div>
        </div>


        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Rôle</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="benevole">Bénévole</option>
              <option>Intervenant</option>
              <option>Autre</option>
            </select>
            <div class="invalid-feedback">
              Veuillez sélectionner un rôle.
            </div>
          </div>
          <div class="col-md-7 mb-3">
            <label for="zip">Autres information <span class="text-muted">(Optionnel)</span></label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Enregistrer</button>
      </form>
    </div>

</main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
