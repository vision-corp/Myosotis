<?php
/**
 * ArticlesAdminController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\ConnectHelpers;
use yasmf\HttpHelper;
use yasmf\View;
use yasmf\Controller;
use model\articles_admin_model;
use yasmf\ImgHelpers;

/**
 * Class ArticlesAdminController de la partie ADMIN
 * @package controllers\admin
 */
class ArticlesAdminController implements Controller
{

    public function index($pdo)
    {
        ConnectHelpers::secureAdmin();
        $view = new View("/views/admin/admin-articles");
        $article = articles_admin_model::lireArticle($pdo);
        $view->setVar('liste', $article);
        $_SESSION['erreursArticles'] = null;
        return $view;
    }

    /**
     * Ajoute un article a la base de donnée si l'article est constitué d'un titre,
     *  d'un sous titre, et d'un d'une image et d'un contenu
     */
    public function ajoutArticle($pdo)
    {
        ConnectHelpers::secureAdmin();
        date_default_timezone_set('Europe/Paris');

        $titre = HttpHelper::getParam('titre');
        $sousTitre = HttpHelper::getParam('sousTitre');
        $file = HttpHelper::getFile('fichier');
        $txtEditor = HttpHelper::getParam('txtEditor');
        $date = "Le " . date("d-m-Y") . " à " . date("H:i");

        $image = ImgHelpers::upload_img($file);

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
        ConnectHelpers::secureAdmin();
        $id = HttpHelper::getParam('id');
        articles_admin_model::supprimerArticle($pdo, $id);
        return $this->index($pdo);
    }

    public function modifierArticle($pdo) {
        ConnectHelpers::secureAdmin();
        date_default_timezone_set('Europe/Paris');

        $id = HttpHelper::getParam('idModif');

        $titre = HttpHelper::getParam('titreModif');
        $sousTitre = HttpHelper::getParam('sousTitreModif');
        $image = HttpHelper::getParam('imageModif');
        $txtEditor = HttpHelper::getParam('txtEditorModif');
        $date = "Le " . date("d-m-Y") . " à " . date("H:i");


        if ($titre != null && $sousTitre != null && $txtEditor != null) {
            articles_admin_model::modifierArticle($pdo, $id, $titre, $sousTitre, $image, $txtEditor, $date);
        }
        return $this->index($pdo);

    }



}

