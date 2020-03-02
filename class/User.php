<?php

namespace class;

class User {
  private $prenom;
  private $nom;
  private $pseudo;
  private $email;

  public function __construct($prenom, $nom, $pseudo, $email) {
    $this.prenom = $prenom;
    $this.nom = $nom;
    $this.pseudo = $pseudo;
    $this.email = $email;
  }

  
}
