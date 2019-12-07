<?php

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

