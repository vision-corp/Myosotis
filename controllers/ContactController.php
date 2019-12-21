<?php
/**
 * ContactController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers;

use yasmf\HttpHelper;
use yasmf\View;


class ContactController
{
    public function index($pdo) {
        $view = new View("/views/visible/contact");
        $view->setVar('page', 'contact');
        return $view;
    }
}