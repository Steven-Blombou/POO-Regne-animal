<?php

class Animaux
{
  protected $_nomAnimal;
  protected $_classification;
  protected $_avoirTete;
  protected $_avoirBouche;
  protected $_avoirYeux;

    //Initialisation de notre Classe
    public function __construct( $nomAnimal) {
      $this->_nomAnimal = $nomAnimal;
      $this->_classification =  "Je suis un etre vivant ! <br>";
      $this->_avoirTete = "une tete.";
      $this->_avoirBouche =  "une bouche.";
      $this->_avoirYeux =  "des yeux.";
    }

    public function getnomAnimal() {
      return $this->_nomAnimal;
    }

    public function getclassification() {
      return $this->_classification;
    }

    public function getavoirTete(){
      return $this->_avoirTete;
    }

    public function getavoirBouche(){
      return $this->_avoirBouche;
    }

    public function getavoirYeux(){
      return $this->_avoirYeux;
    }

    public function information() {
      echo ("<center>======================================<br>");
      echo ('Je suis un animal ! <br>');
    }

    public function caracteristiques() {
        echo ("<center>======================================<br>");
        echo (" portant le nom de : ".$this->_nomAnimal." <br><br> Mes Caractéristiques sont : <br>");
        echo '<br>';
        echo ("-  ".$this->_classification. " <br>");
        echo ("- J'ai   ".$this->_avoirTete. " <br>");
        echo ("- ou/et  ".$this->_avoirBouche." <br>");
        echo ("- ou/et  ".$this->_avoirYeux." <br>");
        echo ("======================================<br></center>");
    }

}

 ?>
