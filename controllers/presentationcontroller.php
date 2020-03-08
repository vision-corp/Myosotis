<?php
/**
 * presentationcontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers;

use model\global_model;
use model\section_model;
use yasmf\httphelper;
use yasmf\view;
use model\parametres_model;
use yasmf\config;


class presentationcontroller
{
    public function index($pdo) {
        $view = new view(config::getRacine()."/views/visible/presentation");
        $view->setVar("mentions", global_model::getMentionsLegales($pdo));
        $view->setVar("telechargements", parametres_model::getTelechargements($pdo));
        $view->setVar('page', 'presentation');
        $view->setVar('sections', section_model::getSection($pdo, "presentation"));
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }
}