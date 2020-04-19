<?php

require_once('class_echinoderme.php');

class EtoileDeMer extends Echinoderme{
  private $_esperanceDeVie;
  private $_alimentation;
  private $_nourriture;

  public function __construct($nomAnimal){
      parent::__construct( $nomAnimal);
      $this->_esperanceDeVie = " d'environ quatre à cinq années. <br>";
      $this->_alimentation = "  carnivore ! <br>";
      $this->_nourriture = " d'animaux lents.  ! <br>";
    }

      public function getesperanceDeVie(){
        return $this->_esperanceDeVie;
      }

        public function getalimentation(){
          return $this->_alimentation;
        }

          public function getnourriture(){
            return $this->_nourriture;
          }

            public function information() {
              echo ("<center>======================================<br>");
              echo ('Je suis une etoile de mer ! <br>');
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
                echo ("- Nous sommes encore   ".$this->_nombreEspeces." especes <br>");
                echo ("- J'ai une esperance de vie ".$this->_esperanceDeVie."  <br>");
                echo ("- J'ai  une alimentation de type  ".$this->_alimentation."  <br>");
                echo ("- Je me nourris   ".$this->_nourriture."  <br>");
                echo ("======================================<br></center>");
            }

          }

 ?>
