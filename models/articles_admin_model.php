<?php

namespace models;

class articles_admin_model {

    /** 
     * Créer un nouvel article en base de donnée
     */
    public static function creerArticle($pdo, $titre, $sousTitre, $image, $txtEditor, $date) {
        $stmt = $pdo->prepare("INSERT INTO articles (titre,contenu,image,sousTitre, datePublication) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$titre, $txtEditor, $image, $sousTitre, $date]);
    }

    /**
     * @param $pdo : base de connecter a laquelle on se connecte
     * @return mixed : un tableau de colonne de la BD
     */
    public static function lireArticle($pdo) {
        $stmt = $pdo->query("SELECT * FROM articles");
        $tab = array();
        while($row = $stmt->fetch()) {
            $tab[] = array('id'=>$row['id'], 'titre'=>$row['titre'], 'sousTitre'=>$row['sousTitre'], 'image'=>$row['image'], 'contenu'=>$row['contenu'], 'datePublication'=>$row['datePublication']);
        }
        return $tab;
    }

    public static function supprimerArticle($pdo, $id) {
        $stmt = $pdo->prepare("DELETE FROM articles WHERE id = ?");
        $stmt->execute([$id]);
    }

    public static function modifierArticle($pdo, $id, $titre, $sousTitre, $image, $txtEditor, $date) {
        $stmt = $pdo->prepare("UPDATE articles SET titre = ?, contenu = ?, image = ?, sousTitre = ?, datePublication = ? WHERE id = ?");
        $stmt->execute([$titre, $txtEditor, $image, $sousTitre, $date, $id]);

    }
}