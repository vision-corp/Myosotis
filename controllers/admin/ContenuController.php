<?php

namespace controllers\admin;

use services\user\ContentService;
use yasmf\HttpHelper;
use yasmf\View;


class ContenuController
{
    private $contentService;

    public function __construct()
    {
        $this->contentService = ContentService::getDefaultContentService();
    }

    public function index($pdo)
    {
        if ($identifiant = HttpHelper::getParam("identifiant")
            || $titre = HttpHelper::getParam("titre")
            || $sousTitre = HttpHelper::getParam("sousTitre")
            || $image = HttpHelper::getParam("image")
            || $contenu = HttpHelper::getParam("txtEditor")
            || $page = HttpHelper::getParam("page")
            || $pos = HttpHelper::getParam("pos"))
        {
            $this->contentService->addSection($pdo, $page, $identifiant, $titre, $sousTitre, $image, $contenu, $pos);
        }

        $findContent = $this->contentService->findSectionByPage($pdo, "accueil");
        $view = new View("/views/admin/admin-contenu");
        $view->setVar('findContent', $findContent);
        return $view;
    }

}

