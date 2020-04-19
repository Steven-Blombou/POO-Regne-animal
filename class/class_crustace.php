<?php

require_once ('class_arthropode.php');

  class Crustace extends Arthropode {
    protected $nombreAntenne;
    protected $thorax;

    public function __construct($nomAnimal) {
        parent::__construct( $nomAnimal);
        $this->_nombreAntenne = " quatre antennes ! <br>";
        $this->_thorax = " un cephalo-thorax";
      }

        public function getnombreAntenne() {
          return $this->_nombreAntenne;
        }
          public function getthorax() {
            return $this->_thorax;
          }

          public function information() {
            echo ("<center>======================================<br>");
            echo ('Je suis un crutacé ! <br>');
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
