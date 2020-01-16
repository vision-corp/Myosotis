<?php

namespace models;

class articles_admin_model {

    /** 
     * Créer un nouvel article en base de donnée
     */
    public static function creerArticle($pdo, $titre, $sousTitre, $image, $txtEditor) {
        $stmt = $pdo->prepare("INSERT INTO articles (titre,contenu,image,sousTitre) VALUES (?, ?, ?, ?)");
        $stmt->execute([$titre, $txtEditor, $image, $sousTitre]);
    }

    /**
     * @param $pdo : base de connecter a laquelle on se connecte
     * @return mixed : un tableau de colonne de la BD
     */
    public static function lireArticle($pdo) {
        $stmt = $pdo->query("SELECT id, titre FROM articles");
        $tab = array();
        while($row = $stmt->fetch()) {
            $tab[] = array('id'=>$row['id'], 'titre'=>$row['titre']);
        }
        return $tab;
    }
}