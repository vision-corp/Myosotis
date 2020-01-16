<?php
/**
 * ArticlesAdminController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\HttpHelper;
use yasmf\View;
use yasmf\Controller;
use models\articles_admin_model;

/**
 * Class ArticlesAdminController de la partie ADMIN
 * @package controllers\admin
 */
class ArticlesAdminController implements Controller
{

    public function index($pdo)
    {
        $view = new View("/views/admin/admin-articles");
        $article = articles_admin_model::lireArticle($pdo);
        $view->setVar('liste', $article);
        return $view;
    }

    /**
     * Ajoute un article a la base de donnée si l'article est constitué d'un titre,
     *  d'un sous titre, et d'un d'une image et d'un contenu
     */
    public function ajoutArticle($pdo)
    {
        $titre = HttpHelper::getParam('titre');
        $sousTitre = HttpHelper::getParam('sousTitre');
        $image = HttpHelper::getParam('image');
        $txtEditor = HttpHelper::getParam('txtEditor');

        if ($titre != null && $sousTitre != null && $image != null && $txtEditor != null) {
            articles_admin_model::creerArticle($pdo, $titre, $sousTitre, $image, $txtEditor);
            $reussite = true;
        } else {
            $reussite = false;
        }
        return $this->index($pdo)->setVar('reussite', $reussite);
    }

    public function modifierArticle($pdo, $id) {
        // STUB
    }

}

