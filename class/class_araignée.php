<?php

require_once ('class_arachnide.php');

  class Araignée extends Arachnide {


      public function __construct($nomAnimal) {
        parent::__construct($nomAnimal);
      }



        public function information() {
          echo ("<center>======================================<br>");
          echo ('Je suis une araignée ! <br>');
        }

          public function caracteristiques() {
              echo ("<center>======================================<br>");
              echo (" portant le nom de : ".$this->_nomAnimal." <br><br> Mes Caractéristiques sont : <br>");
              echo '<br>';
              echo ("-  ".$this->_classification. " <br>");
              echo ("- J'ai   ".$this->_avoirTete. "  <br>");
              echo ("- ou/et  ".$this->_avoirBouche." <br>");
              echo ("- ou/et  ".$this->_avoirYeux."  <br>");
              echo ("- J'ai   ".$this->_squelette."  <br>");
              echo ("- J'ai   ".$this->_pattesArticulées."   <br>");
              echo ("- qui sont aux nombres de   ".$this->_nombreDePattes."   <br>");
              echo ("- Je fais partie  des ".$this->_nombreEspeces." especes d'arthopodes <br>");
              echo ("======================================<br></center>");
          }

  }


 ?>
