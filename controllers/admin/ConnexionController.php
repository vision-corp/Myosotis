<?php
/**
 * ConnexionController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */

namespace controllers\admin;

use yasmf\ConnectHelpers;
use yasmf\HttpHelper;
use yasmf\View;
use model\UsersServices;


class ConnexionController
{
    public function index($pdo, $err = false)
    {
        $view = new View("/views/admin/connexion");
        $view->setVar("err", $err);
        return $view;
    }
    public function connect($pdo) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $pseudo = HttpHelper::getParam('pseudo');
        $password = HttpHelper::getParam('password');

        if ($pseudo != null && $password != null) {
            $user = UsersServices::getUser($pdo, $pseudo, $password);

            if ($user != null) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_prenom'] = $user['prenom'];
                $_SESSION['user_nom'] = $user['nom'];
                $_SESSION['user_pseudo'] = $user['pseudo'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_admin'] = $user['admin'];

                header('Location: /?controller=admin&mode=admin');
            }
        }
        return $this->index($pdo, true);
    }

}