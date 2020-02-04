<?php

    namespace model;

    class actualite_visible_model {

        /**
         * @param $pdo : base de connecter a laquelle on se connecte
         * @return mixed : un tableau de colonne de la BD
         */
        public static function lireArticle($pdo) {
            $stmt = $pdo->query("SELECT * FROM articles");
            $tab = array();
            while ($row = $stmt->fetch()) {
                $tab[] = array('id'=>$row['id'], 'titre'=>$row['titre'], 'contenu'=>$row['contenu'], 'image'=>$row['image'], 'sousTitre'=>$row['sousTitre']);
            }
            return $tab;
        }

    }