<?php

require_once "Livre.class.php";
require_once "Model.class.php";

class LivreManager extends Model{
     private $livres;

     public function ajoutLivre($livre) {
          $this->livres[] = $livre;
     }

     public function getLivres() {
          return $this->livres;
     }

     public function chargementLivres(){
          $req = $this->getBdd()->prepare("SELECT * FROM livres ORDER BY id DESC");
          $req->execute();
          $mesLivres = $req->fetchAll(PDO::FETCH_ASSOC);
          $req->closeCursor();

          foreach($mesLivres as $livre){
               $l = new Livre($livre['id'], $livre['titre'], $livre['auteur'], $livre['genre'], $livre['image']);
               $this->ajoutLivre($l);
          }
     }
}