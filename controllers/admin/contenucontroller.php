<?php
/**
 * contenucontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\connecthelpers;
use yasmf\httphelper;
use yasmf\view;
use model\section_model;
use yasmf\config;


class contenucontroller
{
    public function index($pdo)
    {
        connecthelpers::secureAdmin();
        $view = new view(config::getRacine()."/views/admin/admin-contenu");
        $view->setVar("accueil", section_model::getSection($pdo, "accueil"));
        $view->setVar("presentation", section_model::getSection($pdo, "presentation"));
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }

    public function deleteSection($pdo) {
        connecthelpers::secureAdmin();
        $id = httphelper::getParam('id');
        section_model::deleteSection($pdo, $id);
        return $this->index($pdo);
    }

    public function addSection($pdo) {
        connecthelpers::secureAdmin();
        $titre = httphelper::getParam('titre');
        $sousTitre = httphelper::getParam('sousTitre');
        $image = httphelper::getParam('image');
        $contenu = httphelper::getParam('contenu');
        $pos = httphelper::getParam('pos');
        $page = httphelper::getParam('page');
        if ($titre != null && $sousTitre != null && $image != null && $contenu != null && $pos != null && $page != null) {
            section_model::addSection($pdo, $titre, $sousTitre, $pos, $image, $contenu, $page);

        } else {
            $_SESSION['err'] = "contenuAddSection";
        }
        return $this->index($pdo);
    }

    public function updateSection($pdo) {
        connecthelpers::secureAdmin();
        $titre = httphelper::getParam("titre");
        $sousTitre = httphelper::getParam("sousTitre");
        $image = httphelper::getParam("image");
        $position = httphelper::getParam("pos");
        $contenu = httphelper::getParam("contenu");
        $id = httphelper::getParam("id");
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

