<?php
/**
 * HomeController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers;

use yasmf\HttpHelper;
use yasmf\View;
use yasmf\Controller;


class HomeController implements Controller
{
    public function index($pdo) {
        $view = new View("/views/visible/index");
        return $view;
    }
}