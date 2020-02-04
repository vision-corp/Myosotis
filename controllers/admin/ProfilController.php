<?php
/**
 * ProfilController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\HttpHelper;
use yasmf\View;
use yasmf\FormHelpers;
use model\UsersServices;
use yasmf\ConnectHelpers;

class ProfilController
{
    public function index($pdo, $erreurs = null, $userInfo = null)
    {
        ConnectHelpers::secure();
        $view = new View("/views/admin/profil");

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

        return $view;
    }

    public function modifyUser($pdo)
    {
        ConnectHelpers::secure();
        $valide = true;
        $erreurs = array();
        $prenom = HttpHelper::getParam("prenom");
        $nom = HttpHelper::getParam("nom");
        $pseudo = HttpHelper::getParam("pseudo");
        $email = HttpHelper::getParam("email");
        $apass = HttpHelper::getParam("apass");
        $npass = HttpHelper::getParam("npass");
        $rnpass = HttpHelper::getParam("rnpass");
        $id = HttpHelper::getParam("id");
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

        if(! FormHelpers::chkPrenom($prenom)) {
            array_push($erreurs, "Ce prénom n'est pas valide. Il doit faire au moins 2 caractères.");
            $valide = false;
        }

        if(! FormHelpers::chkNom($nom)) {
            array_push($erreurs, "Ce nom n'est pas valide. Il doit contenir au moins 2 caractères.");
            $valide = false;
        }

        if (UsersServices::emailExist($pdo, $email, $aemail)) {
            array_push($erreurs, "Cet email est déjà associé à un compte.");
            $valide = false;
        } elseif (! FormHelpers::check_email_address($email)) {
            array_push($erreurs, "Cet email n'est pas valide.");
            $valide = false;
        }

        if (UsersServices::pseudoExist($pdo, $pseudo, $apseudo)) {
            array_push($erreurs, "Ce pseudo est déjà associé à un compte.");
            $valide = false;
        } elseif (! FormHelpers::chkPseudo($pseudo)) {
            array_push($erreurs, "Ce pseudo n'est pas valide. Il doit faire plus de 3 caractères.");
            $valide = false;
        }

        if ($npass != null || $rnpass != null || $apass != null) {
            if (! UsersServices::chkPassword($pdo, $id, $apass)) {
                array_push($erreurs, "Votre ancien mot de pass est incorrect.");
                $valide = false;
            }

            $recvPass = FormHelpers::chkNPassword($npass, $rnpass);
            if ($recvPass != null) {
                array_push($erreurs, $recvPass);
                $valide = false;
            }
            $passMode = true;
        }



        if ($valide) {
            UsersServices::updateUser($pdo, $id, $prenom, $nom, $pseudo, $email, $npass, $passMode);
            $_SESSION['user_prenom'] = $prenom;
            $_SESSION['user_nom'] = $nom;
            $_SESSION['user_pseudo'] = $pseudo;
            $_SESSION['user_email'] = $email;
            header("Location: /?controller=admin&mode=admin");

        }
        return $this->index($pdo, $erreurs, $infosUser);

    }

}

