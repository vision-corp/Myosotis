<?php


namespace yasmf;


class connecthelpers
{
    public static function secure() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION["user_id"]))
        {
            header('Location: /?controller=Connexion&mode=admin');
        } else {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
    }

    public static function secureAdmin() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION["user_id"]))
        {
            header('Location: /?controller=Connexion&mode=admin');
        } else if($_SESSION['user_admin'] != 1){
            header('Location: /?controller=admin&mode=admin');
        } else {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
    }

}