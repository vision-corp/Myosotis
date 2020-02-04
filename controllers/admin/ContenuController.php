<?php
/**
 * ContenuController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\ConnectHelpers;
use yasmf\HttpHelper;
use yasmf\View;


class ContenuController
{
    public function index($pdo)
    {
        ConnectHelpers::secureAdmin();
        $view = new View("/views/admin/admin-contenu");
        return $view;
    }
}

