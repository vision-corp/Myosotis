<?php
/**
 * contactcontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers;

use model\global_model;
use yasmf\httphelper;
use yasmf\view;
use model\parametres_model;
use yasmf\config;


class contactcontroller
{
    public function index($pdo) {
        $view = new view(config::getRacine()."/views/visible/contact");
        $view->setVar("mentions", global_model::getMentionsLegales($pdo));
        $view->setVar("mentionsForm", parametres_model::getMentionsContact($pdo));
        $view->setVar("param", parametres_model::getParamApp($pdo));
        $view->setVar('page', 'contact');
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }
}