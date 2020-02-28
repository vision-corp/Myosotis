<?php


namespace yasmf;


class ImgHelpers
{
    public static function upload_img() {


        // Constantes
        define('TARGET', 'images/upload');     // Repertoire cible du serveur
        define('MAX_SIZE', 40000000);    // Taille max en octets du fichier (ici 40Mo)
        define('WIDTH_MAX', 5000);    // Largeur max de l'image en pixels
        define('HEIGHT_MAX', 5000);   // Hauteur max de l'image en pixels

        // Tableaux de donnees
        $tabExt = array('jpg', 'png', 'jpeg', 'PNG', 'JPG', 'JPEG');    // Extensions autorisees
        $infosImg = array();

        // Variables
        $extension = '';
        $message = '';
        $nomImage = '';
        $cheminValide = '';

        // on créer le repertoire image si il n'existe pas
        if (!is_dir(TARGET)) {
            if (!mkdir(TARGET, 0755)) {
                exit('Erreur : le répertoire ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le manuellement !');
            }
        }

        // script
        //if (!empty($_POST)) {
        // On verifie si une image a été selectionnée
        if (!empty($_FILES['image']['name'])) {
            // on récupere l'extension du fichier
            $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            // On verifie l'extension du fichier
            if (in_array(strtolower($extension), $tabExt)) {
                // On recupere les dimensions du fichier
                $infosImg = getimagesize($_FILES['image']['tmp_name']);
                // On verifie le type de l'image
                if ($infosImg[2] >= 1 && $infosImg[2] <= 14) {
                    // On verifie les dimensions et taille de l'image
                    if (($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['image']['tmp_name']) <= MAX_SIZE)) {
                        // Parcours du tableau d'erreurs
                        if (
                            isset($_FILES['image']['error'])
                            && UPLOAD_ERR_OK === $_FILES['image']['error']
                        ) {
                            // On renomme le fichier
                            $nomImage = md5(uniqid()) . '.' . $extension;
                            // Si c'est OK, on teste l'upload
                            if (move_uploaded_file($_FILES['image']['tmp_name'], TARGET . $nomImage)) {
                                // on envoie le chemin absolue de l'image enregistrer dans la BD
                                $cheminValide = TARGET . $nomImage;
                                return $cheminValide;
                                $message = 'Upload réussi !';
                                var_dump(message);
                            } else {
                                // On affiche l'erreur correspondante
                                $message = 'Problème lors de l\'upload !';
                            }
                        } else {
                            // On affiche l'erreur correspondante
                            $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
                        }
                    } else {
                        // On affiche l'erreur correspondante
                        $message = 'Erreur dans les dimensions de l\'image !';
                    }
                } else {
                    // On affiche l'erreur correspondante
                    $message = 'Le fichier à uploader n\'est pas une image !';
                }
            } else {
                // On affiche l'erreur correspondante
                $message = 'L\'extension du fichier est incorrecte !';
            }
        } else {
            // On affiche l'erreur correspondante
            $message = 'Aucune image n\'a été selectionnée';
        }
        //}
    }
}