<?php
/**
 * UtilisateursController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\HttpHelper;
use yasmf\View;
use yasmf\Controller;
use yasmf\FormHelpers;
use model\UsersServices;
use yasmf\ConnectHelpers;

class UtilisateursController implements Controller
{
    public function index($pdo, $modal = NULL)
    {
        ConnectHelpers::secureAdmin();
        $view = new View("/views/admin/admin-membres");
        $view->setVar('users', UsersServices::getUsers($pdo));
        $view->setVar('modal', $modal);
        return $view;
    }
    public function newUser($pdo) {
        ConnectHelpers::secureAdmin();
        $prenom = HttpHelper::getParam('prenom');
        $nom = HttpHelper::getParam('nom');
        $pseudo = HttpHelper::getParam('pseudo');
        $email = HttpHelper::getParam('email');


        if (FormHelpers::testUser($prenom, $nom, $pseudo, $email)) {
            // Génère mot de passe aléatoire
            $password = FormHelpers::generate_password(10);

            // Sauvegarde de l'utilisateur
            UsersServices::registerUser($pdo, $prenom, $nom, $pseudo, $email, $password);

            // TODO Envoi l'email

            return $this->index($pdo);
        } else {
            return $this->index($pdo, "ajoutUser");
        }
    }

    public function removeUser($pdo) {
        ConnectHelpers::secureAdmin();
        UsersServices::removeUser($pdo, HttpHelper::getParam('id'));
        return $this->index($pdo);
    }

    public function modifyUser($pdo) {
        ConnectHelpers::secureAdmin();
        $prenom = HttpHelper::getParam('prenomModif');
        $nom = HttpHelper::getParam('nomModif');
        $pseudo = HttpHelper::getParam('pseudoModif');
        $email = HttpHelper::getParam('emailModif');
        $id = HttpHelper::getParam('id');

        if (FormHelpers::testUser($prenom, $nom, $pseudo, $email)) {
            UsersServices::updateUser($pdo, $id, $prenom, $nom, $pseudo, $email);
            return $this->index($pdo);
        } else {
            return $this->index($pdo, "modifyUser");
        }
    }

}
