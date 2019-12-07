<?php

namespace controllers;

use yasmf\HttpHelper;
use yasmf\View;


class ContactController
{
    public function index($pdo) {
        $view = new View("/views/visible/contact");
        return $view;
    }
}