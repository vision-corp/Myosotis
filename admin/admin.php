<!-- header -->
<?php require 'includes/header.php'; ?>

    <!-- Corps de la page -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

      <!-- Entête corps -->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <!-- Titre de la page -->
        <h1 class="h2">Tableau de bord</h1>
      </div>


      <p>Statistiques, planning du jour, ...</p>

        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

        <div class="container">
            <canvas id="visites"></canvas>
        </div>

        <script>
            let visites = document.getElementById('visites').getContext('2d');

            let visitesGraph = new Chart(visites, {
                type:'line',
                data:{
                    labels:['Jour 1', 'Jour 2', 'Jour 3', 'Jour 4', 'Jour 5', 'Jour 6', 'Jour 7', 'Jour 8', 'Jour 9',
                            'Jour 10', 'Jour 11', 'Jour 12', 'Jour 13', 'Jour 14', 'Jour 15'],
                    datasets:[6, 2, 5, 8, 0, 9, 12, 3, 7, 2, 2, 5, 10, 6, 2]
                },
                options:{}
            });
        </script>

    </main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
