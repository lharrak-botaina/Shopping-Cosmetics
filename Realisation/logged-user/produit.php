<?php

class Produit{

    private $Nom ; 
    private $Prix ; 
    private $id ; 
    private $image_dir;

      
    public function getImage_dir() {
        return $this->Image_dir;
    }
    public function setImage_dir($Image_dir) {
        $this->Image_dir = $Image_dir;
    }

    
    public function getNom() {
        return $this->Nom;
    }
    public function setNom($Nom) {
        $this->Nom = $Nom;
    }
    
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getPrix() {
        return $this->Prix;
    }
    public function setPrix($Prix) {
        $this->Prix = $Prix;
    }


}