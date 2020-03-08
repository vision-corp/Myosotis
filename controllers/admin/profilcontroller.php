<?php
/**
 * profilcontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\httphelper;
use yasmf\view;
use yasmf\formhelpers;
use model\usersservices;
use yasmf\connecthelpers;
use yasmf\config;

class profilcontroller
{
    public function index($pdo, $erreurs = null, $userInfo = null)
    {
        connecthelpers::secure();
        $view = new view(config::getRacine()."/views/admin/profil");

        if ($erreurs === null) {
            $view->setVar("prenom", $_SESSION['user_prenom']);
            $view->setVar("nom", $_SESSION['user_nom']);
            $view->setVar("email", $_SESSION['user_email']);
            $view->setVar("pseudo", $_SESSION['user_pseudo']);
        } else {
            $view->setVar("prenom", $userInfo['prenom']);
            $view->setVar("nom", $userInfo['nom']);
            $view->setVar("email", $userInfo['email']);
            $view->setVar("pseudo", $userInfo['pseudo']);
        }
        $view->setVar("id", $_SESSION['user_id']);
        $view->setVar("admin", $_SESSION['user_admin']);
        $view->setVar("erreurs", $erreurs);
        $view->setVar('RACINE', config::getRacine());

        return $view;
    }

    public function modifyUser($pdo)
    {
        connecthelpers::secure();
        $valide = true;
        $erreurs = array();
        $prenom = httphelper::getParam("prenom");
        $nom = httphelper::getParam("nom");
        $pseudo = httphelper::getParam("pseudo");
        $email = httphelper::getParam("email");
        $apass = httphelper::getParam("apass");
        $npass = httphelper::getParam("npass");
        $rnpass = httphelper::getParam("rnpass");
        $id = httphelper::getParam("id");
        //var_dump($id);
        $aemail = $_SESSION['user_email'];
        $apseudo = $_SESSION['user_pseudo'];
        $passMode = false;

        $infosUser = [
            "prenom" => $prenom,
            "nom" => $nom,
            "email" => $email,
            "pseudo" => $pseudo
        ];

        if(! formhelpers::chkPrenom($prenom)) {
            array_push($erreurs, "Ce prénom n'est pas valide. Il doit faire au moins 2 caractères.");
            $valide = false;
        }

        if(! formhelpers::chkNom($nom)) {
            array_push($erreurs, "Ce nom n'est pas valide. Il doit contenir au moins 2 caractères.");
            $valide = false;
        }

        if (usersservices::emailExist($pdo, $email, $aemail)) {
            array_push($erreurs, "Cet email est déjà associé à un compte.");
            $valide = false;
        } elseif (! formhelpers::check_email_address($email)) {
            array_push($erreurs, "Cet email n'est pas valide.");
            $valide = false;
        }

        if (usersservices::pseudoExist($pdo, $pseudo, $apseudo)) {
            array_push($erreurs, "Ce pseudo est déjà associé à un compte.");
            $valide = false;
        } elseif (! formhelpers::chkPseudo($pseudo)) {
            array_push($erreurs, "Ce pseudo n'est pas valide. Il doit faire plus de 3 caractères.");
            $valide = false;
        }

        if ($npass != null || $rnpass != null || $apass != null) {
            if (! usersservices::chkPassword($pdo, $id, $apass)) {
                array_push($erreurs, "Votre ancien mot de pass est incorrect.");
                $valide = false;
            }

            $recvPass = formhelpers::chkNPassword($npass, $rnpass);
            if ($recvPass != null) {
                array_push($erreurs, $recvPass);
                $valide = false;
            }
            $passMode = true;
        }



        if ($valide) {
            usersservices::updateUser($pdo, $id, $prenom, $nom, $pseudo, $email, $npass, $passMode);
            $_SESSION['user_prenom'] = $prenom;
            $_SESSION['user_nom'] = $nom;
            $_SESSION['user_pseudo'] = $pseudo;
            $_SESSION['user_email'] = $email;
            header("Location: /?controller=admin&mode=admin");

        }
        return $this->index($pdo, $erreurs, $infosUser);

    }

}

