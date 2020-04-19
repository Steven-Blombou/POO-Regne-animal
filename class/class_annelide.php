<?php

require_once('class_animaux.php');

class Annelide extends Animaux {
  protected $_corpsAnneaux;
  protected $_nombreEspeces;


public function __construct($nomAnimal) {
    parent::__construct( $nomAnimal);
    $this->_corpsAnneaux = "un corps avec des anneaux ! <br>";
    $this->_nombreEspeces = 15000;
  }

  public function getcorpsAnneaux() {
        return $this->_corpsAnneaux;
      }

      public function getnombreEspeces() {
            return $this->_nombreEspeces;
          }

          public function information() {
            echo ("<center>======================================<br>");
            echo ('Je suis un annelide ! <br>');
          }


          public function caracteristiques() {
              echo ("<center>======================================<br>");
              echo (" portant le nom de : ".$this->_nomAnimal." <br><br> Mes Caractéristiques sont : <br>");
              echo '<br>';
              echo ("-  ".$this->_classification. " <br>");
              echo ("- J'ai   ".$this->_avoirTete. "  <br>");
              echo ("- ou/et  ".$this->_avoirBouche." <br>");
              echo ("- ou/et  ".$this->_avoirYeux."  <br>");
              echo ("- J'ai   ".$this->_corpsAnneaux."  <br>");
              echo ("- Nous sommes encore   ".$this->_nombreEspeces." especes <br>");
              echo ("======================================<br></center>");
          }
        }

 ?>
