<?php
/**
 * ConnexionController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\HttpHelper;
use yasmf\View;


class ConnexionController
{
    public function index($pdo)
    {
        $view = new View("/views/admin/connexion");
        return $view;
    }
}
