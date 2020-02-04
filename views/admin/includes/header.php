<!--*
    * header.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Header de la partie admin
-->

<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Les Myosotis - ADMR</title>

    <!--CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="/css/calendrier.css" rel="stylesheet">

    <!-- Css perso -->
    <link href="/css/style.css" rel="stylesheet">


    <link href='/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='/fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
    <link href='/fullcalendar/packages/list/main.css' rel='stylesheet' />
    <script src='/fullcalendar/packages/core/main.js'></script>
    <script src='/fullcalendar/packages/core/s-all.js'></script>
    <script src='/fullcalendar/packages/interaction/main.js'></script>
    <script src='/fullcalendar/packages/daygrid/main.js'></script>
    <script src='/fullcalendar/packages/timegrid/main.js'></script>
    <script src='/fullcalendar/packages/list/main.js'></script>

</head>

<body>

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/perso.js"></script>


<!-- Menu horizontal -->
<nav class="navbar d-none d-md-block navbar-dark bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Les Myosotis</a>
</nav>

<!-- Menu sidebar -->
<?php require '_nav.php'; ?>
