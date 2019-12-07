<?php

namespace controllers;

use yasmf\HttpHelper;
use yasmf\View;


class PresentationController
{
    public function index($pdo) {
        $view = new View("/views/visible/presentation");
        return $view;
    }
}