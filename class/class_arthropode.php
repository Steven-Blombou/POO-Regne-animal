<?php

require_once('class_animaux.php');

class Arthropode extends Animaux {
  protected $_squelette;
  protected $_pattesArticulées;
  protected $_nombreEspeces;

  public function __construct($nomAnimal) {
      parent::__construct( $nomAnimal);
      $this->_squelette = " un squelette externe ! <br>";
      $this->_pattesArticulées = " des pattes articulées";
      $this->_nombreEspeces = 1200000;
    }

      public function getsquelette() {
        return $this->_squelette;
      }

        public function getpattesArticulées() {
          return $this->_pattesArticulées;
        }

          public function getnombreEspeces() {
            return $this->_nombreEspeces;
          }


          public function information() {
            echo ("<center>======================================<br>");
            echo ('Je suis un artropode ! <br>');
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
                echo ("- J'ai   ".$this->_pattesArticulées." !  <br>");
                echo ("- Nous sommes encore   ".$this->_nombreEspeces." especes <br>");
                echo ("======================================<br></center>");
            }

          }

 ?>
