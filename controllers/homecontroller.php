<?php
/**
 * homecontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers;

use model\global_model;
use yasmf\httphelper;
use yasmf\view;
use yasmf\controller;
use model\parametres_model;
use model\section_model;
use yasmf\config;


class homecontroller implements controller
{
    public function index($pdo) {
        $view = new view(config::getRacine()."/views/visible/index");
        $view->setVar("mentions", global_model::getMentionsLegales($pdo));
        $view->setVar("param", parametres_model::getParamApp($pdo));
        $view->setVar('page', 'accueil');
        $view->setVar('sections', section_model::getSection($pdo, "accueil"));
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }
}