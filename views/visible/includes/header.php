<!--*
    * header.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Header de toutes les pages de la partie visible du site.
    * Inclut les feuilles de style et la barre de navigation
-->
<!DOCTYPE html>
<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Florian Hyver, Tom Margalejo, Jean-Charles Luans, Tanguy Fenouillot">
    <title>Les Myosotis</title>

    <!-- Fichiers Css -->
    <link href="<?php echo $RACINE; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $RACINE; ?>/css/visible.css" rel="stylesheet">
</head>
<body>

<?php
spl_autoload_extensions(".php");
spl_autoload_register();

use yasmf\HttpHelper;
?>
<header>
    <!-- Menu de navigation -->
    <?php require '_nav.php'; ?>


</header>
<main role="main">
