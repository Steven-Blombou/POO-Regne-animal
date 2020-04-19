<?php

require_once ('class_arthropode.php');

  class Arachnide extends Arthropode {
    protected $_nombreDePattes;


      public function __construct($nomAnimal) {
        parent::__construct($nomAnimal);
        $this->_nombreDePattes = " 8 pattes ! ";
      }

        public function getnombreDePattes() {
          return $this->_nombreDePattes;
        }

        public function information() {
          echo ("<center>======================================<br>");
          echo ('Je suis un arachnide ! <br>');
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
