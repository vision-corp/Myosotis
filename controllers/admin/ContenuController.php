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
use model\section_model;
use yasmf\Config;


class ContenuController
{
    public function index($pdo)
    {
        ConnectHelpers::secureAdmin();
        $view = new View(Config::getRacine()."/views/admin/admin-contenu");
        $view->setVar("accueil", section_model::getSection($pdo, "accueil"));
        $view->setVar("presentation", section_model::getSection($pdo, "presentation"));
        $view->setVar('RACINE', Config::getRacine());
        return $view;
    }

    public function deleteSection($pdo) {
        ConnectHelpers::secureAdmin();
        $id = HttpHelper::getParam('id');
        section_model::deleteSection($pdo, $id);
        return $this->index($pdo);
    }

    public function addSection($pdo) {
        ConnectHelpers::secureAdmin();
        $titre = HttpHelper::getParam('titre');
        $sousTitre = HttpHelper::getParam('sousTitre');
        $image = HttpHelper::getParam('image');
        $contenu = HttpHelper::getParam('contenu');
        $pos = HttpHelper::getParam('pos');
        $page = HttpHelper::getParam('page');
        if ($titre != null && $sousTitre != null && $image != null && $contenu != null && $pos != null && $page != null) {
            section_model::addSection($pdo, $titre, $sousTitre, $pos, $image, $contenu, $page);

        } else {
            $_SESSION['err'] = "contenuAddSection";
        }
        return $this->index($pdo);
    }

    public function updateSection($pdo) {
        ConnectHelpers::secureAdmin();
        $titre = HttpHelper::getParam("titre");
        $sousTitre = HttpHelper::getParam("sousTitre");
        $image = HttpHelper::getParam("image");
        $position = HttpHelper::getParam("pos");
        $contenu = HttpHelper::getParam("contenu");
        $id = HttpHelper::getParam("id");
        if ($titre != null && $sousTitre != null && $position != null && $contenu != null && $id != null) {
            if ($image == null) {
                section_model::updateSectionWithoutImage($pdo, $id, $titre, $sousTitre, $position, $contenu);
            } else {
                section_model::updateSection($pdo, $id, $titre, $sousTitre, $position, $image, $contenu);
            }
        } else {
            $_SESSION['err'] = "contenuUpdateSection";
        }

        return $this->index($pdo);
    }
}

