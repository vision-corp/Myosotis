<?php
/**
 * ArticleVisibleController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers;

use model\actualite_visible_model;
use model\articles_visible_model;
use model\global_model;
use yasmf\HttpHelper;
use yasmf\View;
use yasmf\Config;

/**
 * Class ArticleVisibleController de la partie VISIBLE
 * @package controllers
 */
class ArticleVisibleController
{
    public function index($pdo) {

        $id = HttpHelper::getParam('id');

        $view = new View(Config::getRacine()."/views/visible/article");
        $view->setVar("mentions", global_model::getMentionsLegales($pdo));
        $view->setVar('page', 'article');
        $article = articles_visible_model::lireArticle($pdo,$id);
        $view->setVar('article', $article);
        $view->setVar('RACINE', Config::getRacine());
        return $view;
    }
}