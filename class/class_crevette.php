<?php

require_once ('class_crustace.php');

  class Crevette extends Crustace {
    public function __construc($nomAnimal){
      parent::__construct($nomAnimal);
    }

    public function information() {
      echo ("<center>======================================<br>");
      echo ('Je suis un crevette ! <br>');
    }

      public function caracteristiques() {
          echo ("<center>======================================<br>");
          echo (" portant le nom de : ".$this->_nomAnimal." <br><br> Mes Caractéristiques sont : <br>");
          echo '<br>';
          echo ("-  ".$this->_classification. " <br>");
          echo ("- J'ai   ".$this->_avoirTete. "  <br>");
          echo ("- ou/et  ".$this->_avoirBouche." <br>");
          echo ("- ou/et  ".$this->_avoirYeux."  <br>");
          echo ("- J'ai   ".$this->_nombreAntenne."  <br>");
          echo ("- J'ai   ".$this->_thorax." !  <br>");
          echo ("- Je fais partie  des ".$this->_nombreEspeces." especes d'arthopodes <br>");
          echo ("======================================<br></center>");
      }

    }




 ?>
