<?php
/**
 * utilisateurscontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\httphelper;
use yasmf\view;
use yasmf\controller;
use yasmf\formhelpers;
use model\usersservices;
use yasmf\connecthelpers;
use yasmf\config;

class utilisateurscontroller implements controller
{
    public function index($pdo, $modal = NULL)
    {
        connecthelpers::secureAdmin();
        $view = new view(config::getRacine()."/views/admin/admin-membres");
        $view->setVar('users', usersservices::getUsers($pdo));
        $view->setVar('modal', $modal);
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }
    public function newUser($pdo) {
        connecthelpers::secureAdmin();
        $prenom = httphelper::getParam('prenom');
        $nom = httphelper::getParam('nom');
        $pseudo = httphelper::getParam('pseudo');
        $email = httphelper::getParam('email');


        if (formhelpers::testUser($prenom, $nom, $pseudo, $email)) {
            // Génère mot de passe aléatoire
            $password = formhelpers::generate_password(10);

            // Sauvegarde de l'utilisateur
            usersservices::registerUser($pdo, $prenom, $nom, $pseudo, $email, $password);

            // TODO Envoi l'email

            return $this->index($pdo);
        } else {
            return $this->index($pdo, "ajoutUser");
        }
    }

    public function removeUser($pdo) {
        connecthelpers::secureAdmin();
        usersservices::removeUser($pdo, httphelper::getParam('id'));
        return $this->index($pdo);
    }

    public function modifyUser($pdo) {
        connecthelpers::secureAdmin();
        $prenom = httphelper::getParam('prenomModif');
        $nom = httphelper::getParam('nomModif');
        $pseudo = httphelper::getParam('pseudoModif');
        $email = httphelper::getParam('emailModif');
        $id = httphelper::getParam('id');

        if (formhelpers::testUser($prenom, $nom, $pseudo, $email)) {
            usersservices::updateUser($pdo, $id, $prenom, $nom, $pseudo, $email);
            return $this->index($pdo);
        } else {
            return $this->index($pdo, "modifyUser");
        }
    }

}
