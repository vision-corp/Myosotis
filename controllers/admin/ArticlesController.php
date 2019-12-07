<?php

namespace controllers\admin;

use yasmf\HttpHelper;
use yasmf\View;


class ArticlesController
{
    public function index()
    {
        $view = new View("/views/admin/admin-articles");
        return $view;
    }
}

