<?php
/**
 * parametrescontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\connecthelpers;
use yasmf\httphelper;
use yasmf\view;
use model\parametres_model;
use yasmf\config;


class parametrescontroller
{
    public function index($pdo)
    {
        connecthelpers::secureAdmin();
        $view = new view(config::getRacine()."/views/admin/admin-parametres");
        $view->setVar("optn", parametres_model::getParamApp($pdo));
        $view->setVar("tel", parametres_model::getTelechargements($pdo));
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }

    public function updateMentionsLegales($pdo) {
        connecthelpers::secureAdmin();
        $newVal = httphelper::getParam('txtEditor');
        if(strlen($newVal) != 0) {
            parametres_model::updateMentionsLegales($pdo, $newVal);
        }
        return $this->index($pdo);
    }

    public function updateContact($pdo) {
        connecthelpers::secureAdmin();
        $email = httphelper::getParam('email');
        $tel = httphelper::getParam('telephone');
        $adresse = httphelper::getParam('adresse');
        $cp = httphelper::getParam('cp');
        $ville = httphelper::getParam('ville');
        $pays = httphelper::getParam('pays');
        $conditions = httphelper::getParam('txtEditor');
        if (strlen($email) != 0 && strlen($tel) != 0 && strlen($adresse) != 0 && strlen($cp) != 0 && strlen($ville) != 0
            && strlen($pays) != 0 && strlen($conditions) != 0) {
            parametres_model::updateContact($pdo, $email, $tel, $adresse, $cp, $ville, $pays, $conditions);
        }
        return $this->index($pdo);
    }

    public function updateSlide($pdo) {
        connecthelpers::secureAdmin();
        $titreSlide1 = httphelper::getParam("titreSlide1");
        $titreSlide2 = httphelper::getParam("titreSlide2");
        $titreSlide3 = httphelper::getParam("titreSlide3");
        $sousTitreSlide1 = httphelper::getParam("sousTitreSlide1");
        $sousTitreSlide2 = httphelper::getParam("sousTitreSlide2");
        $sousTitreSlide3 = httphelper::getParam("sousTitreSlide3");
        $imageSlide1 = httphelper::getParam("imageSlide1");
        $imageSlide2 = httphelper::getParam("imageSlide2");
        $imageSlide3 = httphelper::getParam("imageSlide3");

        if (strlen($titreSlide1) != 0 && strlen($titreSlide2) != 0 && strlen($titreSlide3) != 0
            && strlen($sousTitreSlide1) != 0 && strlen($sousTitreSlide2) != 0 && strlen($sousTitreSlide3) != 0
            && strlen($imageSlide1) != 0 && strlen($imageSlide2) != 0 && strlen($imageSlide3) != 0) {

            parametres_model::updateSlide($pdo, 1, $titreSlide1, $sousTitreSlide1, $imageSlide1);
            parametres_model::updateSlide($pdo, 2, $titreSlide2, $sousTitreSlide2, $imageSlide2);
            parametres_model::updateSlide($pdo, 3, $titreSlide3, $sousTitreSlide3, $imageSlide3);
        }

        return $this->index($pdo);
    }

    public function addTel($pdo) {
        $titre = httphelper::getParam("titre");
        $lien = httphelper::getParam("lien");

        if(strlen($titre) != 0 && strlen($lien) != 0) {
            parametres_model::addTel($pdo, $titre, $lien);

        }
        return $this->index($pdo);
    }

    public function deleteTel($pdo) {
        $id = httphelper::getParam("id");

        parametres_model::deleteTel($pdo, $id);

        return $this->index($pdo);
    }

    public function updateTel($pdo) {

        $id = httphelper::getParam("id");
        $titre = httphelper::getParam("titre");
        $lien = httphelper::getParam("lien");

        if (strlen($id) != 0 && strlen($titre) != 0 && strlen($lien) != 0) {
            parametres_model::updateTel($pdo, $id, $titre, $lien);

        }
        return $this->index($pdo);
    }
}