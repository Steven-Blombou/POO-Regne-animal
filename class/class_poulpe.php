<?php

require_once ('class_cephalopode.php');

class Poulpe extends Cephalopode {
  protected $_nombreCoeurs;
  protected $_corpsMou;

  public function __construct($nomAnimal) {
      parent::__construct( $nomAnimal);
      $this->_nombreCoeurs = " suis doté de trois cœurs ! <br>";
      $this->_corpsMou = " corps est entièrement mou  <br>";
    }

    public function getnombreVentouse() {
          return $this->_nombreCoeur;
        }

    public function getcorpsMou() {
          return $this->_corpsMou;
        }

        public function information() {
          echo ("<center>======================================<br>");
          echo ('Je suis un poulpe ! <br>');
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
              echo ("- Je ".$this->_nombreCoeurs."  <br>");
              echo ("- Mon   ".$this->_corpsMou." excepté la partie de ma bouche qui est équipée d'un bec <br>");
              echo ("======================================<br></center>");
          }

        }


 ?>
