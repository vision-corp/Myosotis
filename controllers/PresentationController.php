<?php
/**
 * PresentationController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers;

use yasmf\HttpHelper;
use yasmf\View;


class PresentationController
{
    public function index($pdo) {
        $view = new View("/views/visible/presentation");
        $view->setVar('page', 'presentation');
        return $view;
    }
}