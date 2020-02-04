<?php

    namespace model;

    class articles_visible_model {

        public static function lireArticle($pdo, $id) {

            $stmt = $pdo->prepare("Select * From articles Where id = ?");
            $stmt->execute([$id]);

            $tab = $stmt->fetch();

            return $tab;
        }

    }