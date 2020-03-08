<?php
/**
 * actualitecontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers;

use model\actualite_visible_model;
use yasmf\httphelper;
use yasmf\view;
use model\global_model;
use yasmf\config;


class actualitecontroller
{
    public function index($pdo) {
        $view = new view(config::getRacine()."/views/visible/actualite");
        $view->setVar("mentions", global_model::getMentionsLegales($pdo));
        $view->setVar('page', 'actualite');
        $articles = actualite_visible_model::lireArticle($pdo);
        $view->setVar('articles', $articles);
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }
}