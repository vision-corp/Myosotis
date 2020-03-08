<?php
/**
 * admincontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers\admin;

use yasmf\connecthelpers;
use yasmf\httphelper;
use yasmf\view;
use yasmf\config;


class admincontroller
{
    public function index()
    {
        connecthelpers::secure();
        $view = new view(config::getRacine()."/views/admin/admin");
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }
}

