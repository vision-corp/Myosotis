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

    public static function deleteSection($pdo, $id) {
        $stmt = $pdo->prepare("delete from sections where id = ?");
        $stmt->execute([$id]);
    }

    public static function addSection($pdo, $titre, $sousTitre, $position, $image, $contenu, $page) {
        $stmt = $pdo->prepare("insert into sections (titre, sous_titre, image, contenu, pos, page) values (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$titre, $sousTitre, $image, $contenu, $position, $page]);
    }

    public static function updateSection($pdo, $id, $titre, $sousTitre, $position, $image, $contenu) {
        $stmt = $pdo->prepare("update sections set titre = ?, sous_titre = ?, image = ?,  contenu = ?, pos = ? where id = ?");
        $stmt->execute([$titre, $sousTitre, $image, $contenu, $position, $id]);
    }

    public static function updateSectionWithoutImage($pdo, $id, $titre, $sousTitre, $position, $contenu) {
        $stmt = $pdo->prepare("update sections set titre = ?, sous_titre = ?, contenu = ?, pos = ? where id = ?");
        $stmt->execute([$titre, $sousTitre, $contenu, $position, $id]);
    }
}