<?php
namespace controllers\admin;

use yasmf\ConnectHelpers;

class LogoutController {
    public function index() {
        ConnectHelpers::secure();
        unset($_SESSION['user_id']);
        unset($_SESSION['user_prenom']);
        unset($_SESSION['user_nom']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_pseudo']);
        unset($_SESSION['user_admin']);
        $_SESSION['flash']['success'] = 'Vous êtes maintenant déconnecté';

        header('Location: /?controller=home');
    }
}
