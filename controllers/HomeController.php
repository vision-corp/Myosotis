<?php

namespace controllers;

use yasmf\HttpHelper;
use yasmf\View;


class HomeController
{
    public function index($pdo) {
        $view = new View("/views/visible/index");
        return $view;
    }
}