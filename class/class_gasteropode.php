<?php

require_once ('class_mollusque.php');

class Gasteropode extends Mollusque {
  protected $_piedPorteur;

  public function __construct($nomAnimal) {
      parent::__construct( $nomAnimal);
      $this->_piedPorteur = " un pied porteur ! <br>";
    }



        public function information() {
          echo ("<center>======================================<br>");
          echo ('Je suis un gasteropode ! <br>');
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
              echo ("- Je possede ".$this->_piedPorteur." <br>");
              echo ("======================================<br></center>");
          }

        }


 ?>
