<?php
/**
 * AdminController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers\admin;

use yasmf\HttpHelper;
use yasmf\View;


class AdminController
{
    public function index()
    {
        $view = new View("/views/admin/admin");
        return $view;
    }
}

