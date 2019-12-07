<?php
/**
 * Some helpful parameters that we must use in this application
 */
namespace yasmf;


class Config
{
    // Racine du projet (à utiliser pour tous les liens)
    private $racine = "/";

    // Permet d'accéder à la racine du projet par encapsulation
    public function getRacine(){
        return $this->racine . "";
    }
}