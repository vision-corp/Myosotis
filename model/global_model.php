<?php

namespace model;

class global_model {

    public static function getMentionsLegales($pdo) {

        $stmt = $pdo->prepare("Select valeur From parametres Where param = 'mentionsLegales'");
        $stmt->execute([]);

        $mentions = $stmt->fetch();

        return $mentions;
    }

}