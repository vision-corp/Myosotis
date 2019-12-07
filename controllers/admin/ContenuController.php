<?php

namespace controllers\admin;

use yasmf\HttpHelper;
use yasmf\View;


class ContenuController
{
    public function index()
    {
       $view = new View("/views/admin/admin-contenu");
        return $view;
    }
}

