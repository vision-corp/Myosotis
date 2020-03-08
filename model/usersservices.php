<?php

namespace model;

class usersservices {

  public static function registerUser($pdo, $prenom, $nom, $pseudo, $email, $password) {
    $passCrypt = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare('insert into users values(null, ?, ?, ?, ?, ?, 0)');
    $stmt->execute([$prenom, $nom, $pseudo, $email, $passCrypt]);
  }

  public static function getUsers($pdo) {
    $stmt = $pdo->prepare("select * from users where pseudo != 'admin'");
    $stmt->execute();
    $tab = array();
    while ($data = $stmt->fetch()) {
      $tab[] = array($data['prenom'], $data['nom'], $data['pseudo'],$data['email'], $data['password'], $data['id']);
    }
    return $tab;
  }

  public static function removeUser($pdo, $id) {
    $stmt = $pdo->prepare('delete from users where id = ?');
    $stmt->execute([$id]);
  }

  public static function updateUser($pdo, $id, $prenom, $nom, $pseudo, $email, $password = null, $passMode = false) {
      if ($passMode) {
      $stmt = $pdo->prepare('update users set prenom = ?, nom = ?, pseudo = ?, email = ?, password = ? where id = ?');
      $stmt->execute([$prenom, $nom, $pseudo, $email, $password, $id]);
      } else {
          $stmt = $pdo->prepare('update users set prenom = ?, nom = ?, pseudo = ?, email = ? where id = ?');
          $stmt->execute([$prenom, $nom, $pseudo, $email, $id]);
      }

  }

  public static function getUser($pdo, $pseudo, $password) {
      $stmt = $pdo->prepare("select * from users where pseudo = ? AND password = ?");
      $stmt->execute([$pseudo, $password]);
      $user = $stmt->fetch();
      return $user;
  }

  public static function pseudoExist($pdo, $pseudo, $apseudo) {
      $stmt = $pdo->prepare("select * from users where pseudo = ?");
      $stmt->execute([$pseudo]);
      $pseudo = $stmt->fetch();
      if ($pseudo == null || strcasecmp($pseudo['pseudo'], $apseudo) === 0) {
          return false;
      }
      return true;
  }

    public static function emailExist($pdo, $email, $aemail) {
        $stmt = $pdo->prepare("select * from users where email = ?");
        $stmt->execute([$email]);
        $email = $stmt->fetch();
        if ($email == null || strcasecmp($email['email'], $aemail) === 0 ) {
            return false;
        }
        return true;
    }

    public static function chkPassword($pdo, $id, $password) {
      var_dump($id);
      var_dump($password);
        $stmt = $pdo->prepare("select * from users where id = ? and password = ?");
        $stmt->execute([$id, $password]);
        $user = $stmt->fetch();
        if ($user == null) {
            return false;
        }
        return true;
    }
}