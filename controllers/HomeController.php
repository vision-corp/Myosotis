<?php
/**
 * HomeController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers;

use model\global_model;
use yasmf\HttpHelper;
use yasmf\View;
use yasmf\Controller;
use model\parametres_model;
use model\section_model;


class HomeController implements Controller
{
    public function index($pdo) {
        $view = new View("/views/visible/index");
        $view->setVar("mentions", global_model::getMentionsLegales($pdo));
        $view->setVar("param", parametres_model::getParamApp($pdo));
        $view->setVar('page', 'accueil');
        $view->setVar('sections', section_model::getSection($pdo, "accueil"));
        return $view;
    }
}