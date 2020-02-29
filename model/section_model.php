<?php


namespace model;


class section_model
{
    public static function getSection($pdo, $section) {
        $stmt = $pdo->prepare("select * from sections where page = ? order by pos");
        $stmt->execute([$section]);
        $tab = array();
        while ($data = $stmt->fetch()) {
            array_push($tab, array($data['id'],$data['titre'], $data['sous_titre'], $data['image'], $data['contenu'], $data['pos'], $data['page']));
        }
        return $tab;
    }
}