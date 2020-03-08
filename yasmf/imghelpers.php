<?php


namespace yasmf;
use yasmf\config;


class imghelpers
{
    const MAXSIZE = 1000000;
    public static function upload_img($file) {
        $DOSSIER_UPLOAD = config::getRacine() . "/images/uploads";

        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'gif');

        $_SESSION['imgErr'] = null;

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < self::MAXSIZE) {
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = self::DOSSIER_UPLOAD . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    return $fileDestination;
                } else {
                    $_SESSION['imgErr'] = "Ce fichier est trop lourd";
                    return null;
                }
            } else {
                $_SESSION['imgErr'] = "Une erreur est apparue lors du téléchargement du fichier";
                return null;
            }
        } else {
            $_SESSION['imgErr'] = "Un fichier de ce type ne peut pas être utilisé.";
            return null;
        }
    }
}