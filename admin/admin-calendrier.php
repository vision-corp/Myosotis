<!-- header -->
<?php require 'includes/header.php'; ?>

    <!-- Corps de la page -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

      <!-- Entête corps -->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <!-- Titre de la page -->
        <h1 class="h2">Gestion du planning</h1>

        <!-- Boutons d'actions sur la page -->
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exporter</button>
          </div>
            <div class="dropdown">
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cette semaine
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Semaine 33</a>
                <a class="dropdown-item" href="#">Semaine 34</a>
                <a class="dropdown-item" href="#">Semaine 35</a>
              </div>
            </div>
        </div>
      </div>

      <!-- Contenu page -->
      <?php require 'includes/calendrier.php' ?>

    </main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
