<?php
/**
 * ContenuController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\ConnectHelpers;
use yasmf\HttpHelper;
use yasmf\View;
use model\section_model;


class ContenuController
{
    public function index($pdo)
    {
        ConnectHelpers::secureAdmin();
        $view = new View("/views/admin/admin-contenu");
        $view->setVar("accueil", section_model::getSection($pdo, "accueil"));
        $view->setVar("presentation", section_model::getSection($pdo, "presentation"));
        return $view;
    }
}

