<?php
/**
 * articlesadmincontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\connecthelpers;
use yasmf\httphelper;
use yasmf\view;
use yasmf\controller;
use model\articles_admin_model;
use yasmf\imghelpers;
use yasmf\config;

/**
 * Class articlesadmincontroller de la partie ADMIN
 * @package controllers\admin
 */
class articlesadmincontroller implements controller
{

    public function index($pdo)
    {
        connecthelpers::secureAdmin();
        $view = new view(config::getRacine()."/views/admin/admin-articles");
        $article = articles_admin_model::lireArticle($pdo);
        $view->setVar('liste', $article);
        $_SESSION['erreursArticles'] = null;
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }

    /**
     * Ajoute un article a la base de donnée si l'article est constitué d'un titre,
     *  d'un sous titre, et d'un d'une image et d'un contenu
     */
    public function ajoutArticle($pdo)
    {
        connecthelpers::secureAdmin();
        date_default_timezone_set('Europe/Paris');

        $titre = httphelper::getParam('titre');
        $sousTitre = httphelper::getParam('sousTitre');
        $txtEditor = httphelper::getParam('txtEditor');
        $date = "Le " . date("d-m-Y") . " à " . date("H:i");
        $image = httphelper::getParam('image');
        //if ($titre != null && $sousTitre != null && $image != null && $txtEditor != null) {
        if ($titre != null && $sousTitre != null && $image != null && $txtEditor != null) {
            articles_admin_model::creerArticle($pdo, $titre, $sousTitre, $image, $txtEditor, $date);
            $reussite = true;
        } else {
            $_SESSION['erreursArticles'] = "L'article n'a pas pu être enregistré";
            $reussite = false;
            echo "erreur";
        }

        return $this->index($pdo);
    }

    public function supprimerArticle($pdo) {
        connecthelpers::secureAdmin();
        $id = httphelper::getParam('id');
        articles_admin_model::supprimerArticle($pdo, $id);
        return $this->index($pdo);
    }

    public function modifierArticle($pdo) {
        connecthelpers::secureAdmin();
        date_default_timezone_set('Europe/Paris');

        $id = httphelper::getParam('idModif');

        $titre = httphelper::getParam('titreModif');
        $sousTitre = httphelper::getParam('sousTitreModif');
        $image = httphelper::getParam('imageModif');
        $txtEditor = httphelper::getParam('txtEditorModif');
        $date = "Le " . date("d-m-Y") . " à " . date("H:i");


        if ($titre != null && $sousTitre != null && $txtEditor != null) {
            articles_admin_model::modifierArticle($pdo, $id, $titre, $sousTitre, $image, $txtEditor, $date);
        }
        return $this->index($pdo);

    }



}

