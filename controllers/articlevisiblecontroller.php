<?php
/**
 * articlevisiblecontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers;

use model\actualite_visible_model;
use model\articles_visible_model;
use model\global_model;
use yasmf\httphelper;
use yasmf\view;
use yasmf\config;

/**
 * Class articlevisiblecontroller de la partie VISIBLE
 * @package controllers
 */
class articlevisiblecontroller
{
    public function index($pdo) {

        $id = httphelper::getParam('id');

        $view = new view(config::getRacine()."/views/visible/article");
        $view->setVar("mentions", global_model::getMentionsLegales($pdo));
        $view->setVar('page', 'article');
        $article = articles_visible_model::lireArticle($pdo,$id);
        $view->setVar('article', $article);
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }
}