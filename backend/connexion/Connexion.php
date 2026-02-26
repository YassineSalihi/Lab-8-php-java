<?php
class Connexion {
  private $connexion;

  public function __construct() {
    # code...
    try {
      $this->connexion = new PDO("mysql:host=localhost;dbname=school1;charset=utf8", "root", "rootroot");
      $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      //throw $th;
      die('Erreur : ' . $e->getMessage());
    }
  }

  public function getConnexion() {
        return $this->connexion;
    }
}

?>
