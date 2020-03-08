<!DOCTYPE html>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Les Myosotis - ADMR</title>

    <!--CSS -->
    <link rel="stylesheet" href="<?php echo $RACINE; ?>/css/bootstrap.css">
    <link href="<?php echo $RACINE; ?>/css/calendrier.css" rel="stylesheet">

    <!-- Css perso -->
    <link href="<?php echo $RACINE; ?>/css/style.css" rel="stylesheet">


    <link href='<?php echo $RACINE; ?>/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='<?php echo $RACINE; ?>/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='<?php echo $RACINE; ?>/fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
    <link href='<?php echo $RACINE; ?>/fullcalendar/packages/list/main.css' rel='stylesheet' />
    <script src='<?php //echo $RACINE; ?>/fullcalendar/packages/core/main.js'></script>
    <script src='<?php echo $RACINE; ?>/fullcalendar/packages/core/locales-all.js'></script>
    <script src='<?php echo $RACINE; ?>/fullcalendar/packages/interaction/main.js'></script>
    <script src='<?php echo $RACINE; ?>/fullcalendar/packages/daygrid/main.js'></script>
    <script src='<?php echo $RACINE; ?>/fullcalendar/packages/timegrid/main.js'></script>
    <script src='<?php echo $RACINE; ?>/fullcalendar/packages/list/main.js'></script>

</head>

<body>

<script src="<?php echo $RACINE; ?>/js/jquery.js"></script>
<script src="<?php echo $RACINE; ?>/js/bootstrap.js"></script>
<script src="<?php echo $RACINE; ?>/js/perso.js"></script>


<!-- Menu horizontal -->
<nav class="navbar d-none d-md-block navbar-dark bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Les Myosotis</a>
</nav>

<!-- Menu sidebar -->
<?php require '_nav.php'; ?>
