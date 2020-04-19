<?php

require_once ('class_mollusque.php');

class Cephalopode extends Mollusque {
  protected $_tentacule;

  public function __construct($nomAnimal) {
      parent::__construct( $nomAnimal);
      $this->_tentacule = " possede de nombreuses tentacules sur la tete ! <br>";
    }

    public function getcoquille() {
          return $this->_tentacule;
        }

        public function information() {
          echo ("<center>======================================<br>");
          echo ('Je suis un cephalopode ! <br>');
        }

          public function caracteristiques() {
              echo ("<center>======================================<br>");
              echo (" portant le nom de : ".$this->_nomAnimal." <br><br> Mes Caractéristiques sont : <br>");
              echo '<br>';
              echo ("-  ".$this->_classification. " <br>");
              echo ("- J'ai   ".$this->_avoirTete. "  <br>");
              echo ("- ou/et  ".$this->_avoirBouche." <br>");
              echo ("- ou/et  ".$this->_avoirYeux."  <br>");
              echo ("- J'ai   ".$this->_coquille."  <br>");
              echo ("- Je fais partie  des ".$this->_nombreEspeces." especes de mollusque <br>");
              echo ("- Je   ".$this->_tentacule."  <br>");
              echo ("======================================<br></center>");
          }

        }


 ?>
