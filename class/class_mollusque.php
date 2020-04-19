<?php

require_once('class_animaux.php');


class Mollusque extends Animaux {
  protected $_coquille;
  protected $_nombreEspeces;

  public function __construct($nomAnimal) {
      parent::__construct( $nomAnimal);
      $this->_coquille = " une coquille visible ou cachée ! <br>";
      $this->_nombreEspeces = 110000;
    }

  public function getcoquille() {
        return $this->_coquille;
      }

      public function getnombreEspeces() {
            return $this->_nombreEspeces;
          }

          public function information() {
            echo ("<center>======================================<br>");
            echo ('Je suis un mollusque ! <br>');
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
                echo ("- Nous sommes encore   ".$this->_nombreEspeces." especes <br>");
                echo ("======================================<br></center>");
            }

          }

 ?>
