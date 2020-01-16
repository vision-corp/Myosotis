<?php
/**
 * ActualiteController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers;

use models\articles_visible_model;
use yasmf\HttpHelper;
use yasmf\View;


class ActualiteController
{
    public function index($pdo) {
        $view = new View("/views/visible/actualite");
        $view->setVar('page', 'actualite');
        $articles = articles_visible_model::lireArticle($pdo);
        $view->setVar('articles', $articles);
        return $view;
    }
}