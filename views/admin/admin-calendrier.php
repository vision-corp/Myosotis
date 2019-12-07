<!--*
    * admin-calendrier.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Permet d'afficher et de modifier le planning. Certaines options sont absentes suivant le grade.
-->

<!-- Inclusion de l'entête -->
<?php require 'includes/header.php'; ?>

<!-- Corps de la page -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <!-- Entête corps -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <!-- Titre de la page -->
        <h1 class="h2">Gestion du planning</h1>

        <!-- Boutons d'actions sur la page -->
        <div class="btn-toolbar mb-2 mb-md-0">

            <!-- Impression -->
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Exporter</button>
            </div>

            <!-- Sélection semaine -->
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

    <!-- Calendrier -->
    <?php //require 'includes/calendrier.php' ?>
    <link href='/fullCallendar/core/main.css' rel='stylesheet' />
    <link href='/fullCallendar/daygrid/main.css' rel='stylesheet' />

    <script src='/fullCallendar/core/main.js'></script>
    <script src='/fullCallendar/daygrid/main.js'></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid' ]
            });

            calendar.render();
        });

    </script>
    <div id='calendar'></div>
</main>

<!-- footer -->
<?php require 'includes/footer.php'; ?>
