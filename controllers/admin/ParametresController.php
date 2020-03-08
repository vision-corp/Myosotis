<?php
/**
 * ParametresController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\ConnectHelpers;
use yasmf\HttpHelper;
use yasmf\View;
use model\parametres_model;
use yasmf\Config;


class ParametresController
{
    public function index($pdo)
    {
        ConnectHelpers::secureAdmin();
        $view = new View(Config::getRacine()."/views/admin/admin-parametres");
        $view->setVar("optn", parametres_model::getParamApp($pdo));
        $view->setVar("tel", parametres_model::getTelechargements($pdo));
        $view->setVar('RACINE', Config::getRacine());
        return $view;
    }

    public function updateMentionsLegales($pdo) {
        ConnectHelpers::secureAdmin();
        $newVal = HttpHelper::getParam('txtEditor');
        if(strlen($newVal) != 0) {
            parametres_model::updateMentionsLegales($pdo, $newVal);
        }
        return $this->index($pdo);
    }

    public function updateContact($pdo) {
        ConnectHelpers::secureAdmin();
        $email = HttpHelper::getParam('email');
        $tel = HttpHelper::getParam('telephone');
        $adresse = HttpHelper::getParam('adresse');
        $cp = HttpHelper::getParam('cp');
        $ville = HttpHelper::getParam('ville');
        $pays = HttpHelper::getParam('pays');
        $conditions = HttpHelper::getParam('txtEditor');
        if (strlen($email) != 0 && strlen($tel) != 0 && strlen($adresse) != 0 && strlen($cp) != 0 && strlen($ville) != 0
            && strlen($pays) != 0 && strlen($conditions) != 0) {
            parametres_model::updateContact($pdo, $email, $tel, $adresse, $cp, $ville, $pays, $conditions);
        }
        return $this->index($pdo);
    }

    public function updateSlide($pdo) {
        ConnectHelpers::secureAdmin();
        $titreSlide1 = HttpHelper::getParam("titreSlide1");
        $titreSlide2 = HttpHelper::getParam("titreSlide2");
        $titreSlide3 = HttpHelper::getParam("titreSlide3");
        $sousTitreSlide1 = HttpHelper::getParam("sousTitreSlide1");
        $sousTitreSlide2 = HttpHelper::getParam("sousTitreSlide2");
        $sousTitreSlide3 = HttpHelper::getParam("sousTitreSlide3");
        $imageSlide1 = HttpHelper::getParam("imageSlide1");
        $imageSlide2 = HttpHelper::getParam("imageSlide2");
        $imageSlide3 = HttpHelper::getParam("imageSlide3");

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
        $titre = HttpHelper::getParam("titre");
        $lien = HttpHelper::getParam("lien");

        if(strlen($titre) != 0 && strlen($lien) != 0) {
            parametres_model::addTel($pdo, $titre, $lien);

        }
        return $this->index($pdo);
    }

    public function deleteTel($pdo) {
        $id = HttpHelper::getParam("id");

        parametres_model::deleteTel($pdo, $id);

        return $this->index($pdo);
    }

    public function updateTel($pdo) {

        $id = HttpHelper::getParam("id");
        $titre = HttpHelper::getParam("titre");
        $lien = HttpHelper::getParam("lien");

        if (strlen($id) != 0 && strlen($titre) != 0 && strlen($lien) != 0) {
            parametres_model::updateTel($pdo, $id, $titre, $lien);

        }
        return $this->index($pdo);
    }
}