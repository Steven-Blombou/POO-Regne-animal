<?php

require_once ('class_bivalve.php');

class Huitre extends Bivalve {

  public function __construct($nomAnimal) {
      parent::__construct( $nomAnimal);
      $this->_partieCoquille = " deux parties ! <br>";
    }

    public function information() {
      echo ("<center>======================================<br>");
      echo ('Je suis une huitre ! <br>');
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
          echo ("- Elle est constituées en ".$this->_partieCoquille."  <br>");
          echo ("======================================<br></center>");
      }
    }

 ?>
