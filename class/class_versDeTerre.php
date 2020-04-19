<?php

require_once('class_annelide.php');

class VersDeTerre extends Annelide {
  private $_nombreDePatte;
  private $_nourriture;


  public function __construct($nomAnimal){
      parent::__construct( $nomAnimal);
      $this->_nombreDePatte = "depourvus <br>";
      $this->_nourriture = "de matières organiques en décomposition ou de terre mélangée à de la matière organique  ! <br>";
    }

    public function getnombreDePatte(){
          return $this->_nombreDePatte;
        }

        public function getnourriture(){
          return $this->_nourriture;
        }

        public function information() {
          echo ("<center>======================================<br>");
          echo ('Je suis un vers de terre ! <br>');
        }


        public function caracteristiques() {
            echo ("<center>======================================<br>");
            echo (" portant le nom de : ".$this->_nomAnimal." <br><br> Mes Caractéristiques sont : <br>");
            echo '<br>';
            echo ("-  ".$this->_classification. " <br>");
            echo ("- J'ai   ".$this->_avoirTete. "  <br>");
            echo ("- ou/et   ".$this->_avoirBouche."  <br>");
            echo ("- ou/et  ".$this->_avoirYeux."  <br>");
            echo ("- J'ai   ".$this->_corpsAnneaux."  <br>");
            echo ("- Nous sommes encore   ".$this->_nombreEspeces." especes <br>");
            echo ("- Je suis   ".$this->_nombreDePatte." de pattes <br>");
            echo ("- Je me nourris   ".$this->_nourriture."  <br>");
            echo ("======================================<br></center>");
        }

}

 ?>
