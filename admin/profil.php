<!-- header -->
<?php require 'includes/header.php'; ?>

<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  <!-- Entête corps -->
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <!-- Titre de la page -->
    <h1 class="h2">Modifier mon profil</h1>

    <!-- Boutons d'actions sur la page -->
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <form action="/admin/admin.php">
          <input type="submit" name="retour" value="retour" class="btn btn-sm btn-outline-secondary">
        </form>
      </div>
    </div>

  </div>


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
        <div class="mb-3">
          <label for="apass">Ancient mot de passe</label>
          <input type="password" class="form-control" id="apass" placeholder="Acien mot de passe">
          <div class="invalid-feedback">
            Mot de passe incorrect
          </div>
        </div>
        <div class="mb-3">
          <label for="npass">Nouveau mot de passe</label>
          <input type="password" class="form-control" id="npass" placeholder="Nouveau mot de passe">
          <div class="invalid-feedback">
            Les mots de passe ne correspondent pas
          </div>
        </div>
        <div class="mb-3">
          <label for="rnpass">Répétez votre mot de passe</label>
          <input type="email" class="form-control" id="rnpass" placeholder="Répétez votre mot de passe">
          <div class="invalid-feedback">
            Les mots de passe ne correspondent pas
          </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Enregistrer</button>
      </form>
    </div>

</main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
