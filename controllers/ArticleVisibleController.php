<?php
/**
 * ArticleVisibleController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers;

use models\actualite_visible_model;
use models\articles_visible_model;
use yasmf\HttpHelper;
use yasmf\View;

/**
 * Class ArticleVisibleController de la partie VISIBLE
 * @package controllers
 */
class ArticleVisibleController
{
    public function index($pdo) {

        $id = HttpHelper::getParam('id');

        $view = new View("/views/visible/article");
        $view->setVar('page', 'article');

        $article = articles_visible_model::lireArticle($pdo,$id);
        $view->setVar('article', $article);
        return $view;
    }
}