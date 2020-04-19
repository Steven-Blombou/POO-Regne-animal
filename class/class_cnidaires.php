<?php

require_once('class_animaux.php');

class Cnidaire extends Animaux {
  protected $_harpons;
  protected $_nombreEspeces;

  public function __construct($nomAnimal) {
      parent::__construct( $nomAnimal);
      $this->_harpons = " des harpons urticants ! <br>";
      $this->_nombreEspeces = 10000;
    }

    public function getharpons() {
          return $this->_harpons;
        }

        public function getnombreEspeces() {
              return $this->_nombreEspeces;
            }

            public function information() {
              echo ("<center>======================================<br>");
              echo ('Je suis un cnidaire ! <br>');
            }

            public function caracteristiques() {
                echo ("<center>======================================<br>");
                echo (" portant le nom de : ".$this->_nomAnimal." <br><br> Mes Caractéristiques sont : <br>");
                echo '<br>';
                echo ("-  ".$this->_classification. " <br>");
                echo ("- J'ai   ".$this->_avoirTete. "  <br>");
                echo ("- ou/et   ".$this->_avoirBouche."  <br>");
                echo ("- ou/et  ".$this->_avoirYeux." <br>");
                echo ("- J'ai   ".$this->_harpons."  <br>");
                echo ("- Nous sommes encore   ".$this->_nombreEspeces." especes <br>");
                echo ("======================================<br></center>");
            }

          }

 ?>
