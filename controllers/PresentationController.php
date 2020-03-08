<?php
/**
 * PresentationController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers;

use model\global_model;
use model\section_model;
use yasmf\HttpHelper;
use yasmf\View;
use model\parametres_model;
use yasmf\Config;


class PresentationController
{
    public function index($pdo) {
        $view = new View(Config::getRacine()."/views/visible/presentation");
        $view->setVar("mentions", global_model::getMentionsLegales($pdo));
        $view->setVar("telechargements", parametres_model::getTelechargements($pdo));
        $view->setVar('page', 'presentation');
        $view->setVar('sections', section_model::getSection($pdo, "presentation"));
        $view->setVar('RACINE', Config::getRacine());
        return $view;
    }
}