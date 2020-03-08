<?php
/**
 * ActualiteController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers;

use model\actualite_visible_model;
use yasmf\HttpHelper;
use yasmf\View;
use model\global_model;
use yasmf\Config;


class ActualiteController
{
    public function index($pdo) {
        $view = new View(Config::getRacine()."/views/visible/actualite");
        $view->setVar("mentions", global_model::getMentionsLegales($pdo));
        $view->setVar('page', 'actualite');
        $articles = actualite_visible_model::lireArticle($pdo);
        $view->setVar('articles', $articles);
        $view->setVar('RACINE', Config::getRacine());
        return $view;
    }
}