<?php


namespace model;


class parametres_model
{
    public static function getParamApp($pdo) {
        $stmt = $pdo->prepare("select * from parametres");
        $stmt->execute();
        $tab = array();
        while ($data = $stmt->fetch()) {
            $tab[$data['param']] = $data['valeur'];

        }
        return $tab;
    }

    public static function getTelechargements($pdo) {
        $stmt = $pdo->prepare("select * from telechargements");
        $stmt->execute();
        $tab = array();
        while ($data = $stmt->fetch()) {
            array_push($tab, array($data['titre'],$data['lien'], $data['id']));
        }
        return $tab;
    }

    public static function updateMentionsLegales($pdo, $value) {
        $stmt = $pdo->prepare("update parametres set valeur = ? where param='mentionsLegales'");
        $stmt->execute([$value]);
    }

    public static function updateContact($pdo, $email, $tel, $add, $cp, $ville, $pays, $conditions) {

        // Email
        $stmt = $pdo->prepare("update parametres set valeur = ? where param = 'email'");
        $stmt->execute([$email]);

        // tel
        $stmt = $pdo->prepare("update parametres set valeur = ? where param = 'telephone'");
        $stmt->execute([$tel]);

        // adresse
        $stmt = $pdo->prepare("update parametres set valeur = ? where param = 'adresse'");
        $stmt->execute([$add]);

        // code postal
        $stmt = $pdo->prepare("update parametres set valeur = ? where param = 'cp'");
        $stmt->execute([$cp]);

        // ville
        $stmt = $pdo->prepare("update parametres set valeur = ? where param = 'ville'");
        $stmt->execute([$ville]);

        // pays
        $stmt = $pdo->prepare("update parametres set valeur = ? where param = 'pays'");
        $stmt->execute([$pays]);

        // conditions
        $stmt = $pdo->prepare("update parametres set valeur = ? where param = 'conditions_formContact'");
        $stmt->execute([$conditions]);
    }

    public static function updateSlide($pdo, $number, $titre, $sousTitre, $image) {
        $titreSlide = "s" . $number . "_titre";
        $sousTitreSlide = "s" . $number . "_sousTitre";
        $imageSlide = "s" . $number . "_image";

        $stmt = $pdo->prepare("update parametres set valeur = ? where param = ?");
        $stmt->execute([$titre, $titreSlide]);

        $stmt = $pdo->prepare("update parametres set valeur = ? where param = ?");
        $stmt->execute([$sousTitre, $sousTitreSlide]);

        $stmt = $pdo->prepare("update parametres set valeur = ? where param = ?");
        $stmt->execute([$image, $imageSlide]);
    }

    public static function addTel($pdo, $titre, $lien) {
        $stmt = $pdo->prepare("insert into telechargements (titre, lien) values (?, ?)");
        $stmt->execute([$titre, $lien]);
    }

    public static function deleteTel($pdo, $id) {
        $stmt = $pdo->prepare("delete from telechargements where id = ?");
        $stmt->execute([$id]);
    }

    public static function updateTel($pdo, $id, $titre, $lien) {
        $stmt = $pdo->prepare("update telechargements set titre = ?, lien = ? where id = ?");
        $stmt->execute([$titre, $lien, $id]);
    }

    public static function getMentionsContact($pdo) {
        $stmt = $pdo->prepare("select * from parametres where param = 'conditions_formContact'");
        $stmt->execute();
        $tab = $stmt->fetch();
        return $tab;
    }


}