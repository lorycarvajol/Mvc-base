<?php

class Livre{

     //attribut en private
     private $id;
     private $titre;
     private $auteur;
     private $genre;
     private $image;

     //constructeur
     public function __construct($id, $titre, $auteur, $genre, $image){
          $this->id = $id;
          $this->titre = $titre;
          $this->auteur = $auteur;
          $this->genre = $genre;
          $this->image = $image;
     }

     //getter accéssible par un algorithme tiers
     public function getId(){
          return $this->id;
     }
     public function getTitre(){return $this->titre;}
     public function getAuteur(){return $this->auteur;}
     public function getGenre(){return $this->genre;}
     public function getImage(){return $this->image;}
           
     //setter
     public function setId($id){
          $this->id = $id;
     }
     public function setTitre($titre){$this->titre = $titre;}
     public function setAuteur($auteur){$this->auteur = $auteur;}
     public function setGenre($genre){$this->genre = $genre;}
     public function setImage($image){$this->image = $image;}
              
}