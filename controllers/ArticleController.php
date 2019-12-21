<?php
/**
 * ArticleController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers;

use yasmf\HttpHelper;
use yasmf\View;


class ArticleController
{
    public function index($pdo) {
        $view = new View("/views/visible/article");
        return $view;
    }
}