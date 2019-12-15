<?php
/**
 * ProfilController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\HttpHelper;
use yasmf\View;


class ProfilController
{
    public function index()
    {
       $view = new View("/views/admin/profil");
        return $view;
    }
}

