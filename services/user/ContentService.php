<?php
namespace services\user;

use PDOException;

class ContentService
{
    public function findSectionByPage($pdo, $page) {
        $sql = "select * from sections where page = ? order by pos";
        $findSectionStmt = $pdo->prepare($sql);
        $findSectionStmt->execute([$page]);
        return $findSectionStmt;
    }

    public function addSection($pdo, $page, $identifiant, $titre, $sousTitre, $image, $contenu, $pos) {
        $sql = "insert into sections (identifiant, titre, sous_titre, image, contenu, pos, page)
                values (?, ?, ?, ?, ?, ?, ?)";
        $findSectionStmt = $pdo->prepare($sql);
        $findSectionStmt->execute([$identifiant, $titre, $sousTitre, $image, $contenu, $pos, $page]);
        return $findSectionStmt;
    }

    private static $defaultContentService;
    public static function getDefaultContentService()
    {
        if (ContentService::$defaultContentService == null) {
            ContentService::$defaultContentService = new ContentService();
        }
        return ContentService::$defaultContentService;
    }
}