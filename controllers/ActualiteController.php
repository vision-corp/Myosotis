<?php
/**
 * ActualiteController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers;

use yasmf\HttpHelper;
use yasmf\View;


class ActualiteController
{
    public function index($pdo) {
        $view = new View("/views/visible/actualite");
        $view->setVar('page', 'actualite');
        return $view;
    }
}