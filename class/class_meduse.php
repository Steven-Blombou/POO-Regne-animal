<?php

require_once('class_cnidaires.php');

class Meduse extends Cnidaire{
  private $_composition;
  private $_vitesseMvt;
  private $_alimentation;

  public function __construct($nomAnimal){
      parent::__construct( $nomAnimal);
      $this->_composition = " composée 98 % d'eau et de 2 % de matières sèches. <br>";
      $this->_vitesseMvt = "  lents  ! <br>";
      $this->_alimentation = " carnivore  ! <br>";
    }

        public function getcomposition(){
          return $this->_composition;
        }

          public function getvitesseMvt(){
            return $this->_vitesseMvt;
          }

          public function getalimentation(){
            return $this->_alimentation;
          }

            public function information() {
              echo ("<center>======================================<br>");
              echo ('Je suis une meduse ! <br>');
            }

              public function caracteristiques() {
                  echo ("<center>======================================<br>");
                  echo (" portant le nom de : ".$this->_nomAnimal." <br><br> Mes Caractéristiques sont : <br>");
                  echo '<br>';
                  echo ("-  ".$this->_classification. " <br>");
                  echo ("- J'ai   ".$this->_avoirTete. "  <br>");
                  echo ("- ou/et  ".$this->_avoirBouche."  <br>");
                  echo ("- ou/et  ".$this->_avoirYeux."  <br>");
                  echo ("- J'ai  ".$this->_harpons."  <br>");
                  echo ("- Nous sommes encore   ".$this->_nombreEspeces." especes <br>");
                  echo ("- Je suis   ".$this->_composition." <br>");
                  echo ("- Mes mouvements sont  ".$this->_vitesseMvt."  <br>");
                  echo ("- Mon alimentation est de type  ".$this->_alimentation."  <br>");
                  echo ("======================================<br></center>");
              }

}


 ?>
