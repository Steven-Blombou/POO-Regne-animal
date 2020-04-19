<?php

require_once('class/class_animaux.php');
require_once('class/class_annelide.php');
require_once('class/class_versDeTerre.php');
require_once('class/class_cnidaires.php');
require_once('class/class_meduse.php');
require_once('class/class_echinoderme.php');
require_once('class/class_etoileDeMer.php');
require_once('class/class_mollusque.php');
require_once('class/class_cephalopode.php');
require_once('class/class_pieuvre.php');
require_once('class/class_poulpe.php');
require_once('class/class_bivalve.php');
require_once('class/class_huitre.php');
require_once('class/class_moule.php');
require_once('class/class_gasteropode.php');
require_once('class/class_escargot.php');
require_once('class/class_limace.php');
require_once('class/class_arthropode.php');
require_once('class/class_crustace.php');
require_once('class/class_crabe.php');
require_once('class/class_crevette.php');
require_once('class/class_arachnide.php');
require_once('class/class_araignée.php');
require_once('class/class_mygale.php');


echo "<br><br><center><h1>Classification Du Regne Animal</h1></center>";
echo "<b>Selon la methode philogenetique :</b> <br>";
echo "- La classification phylogénétique est un système de classification des êtres vivants qui a pour objectif de rendre compte des degrés de parenté entre les espèces et qui permet donc de comprendre leur histoire évolutive.<br>";
echo "- Cette classification remplace désormais la classification traditionnelle.<br>";
echo "- La classification phylogénétique est fondée sur de nouvelles connaissances scientifiques en anatomie comparée, embryologie, biochimie, biologie moléculaire et même paléontologie...<br>";

echo ("<center><br><br>======================================<br>");
echo "On estime qu'il y aurait actuellement plus de 10 000 000 d'espèces animales vivant sur Terre.<br>";
echo "Seul un peu plus de 10 % de ces espèces sont connues et répertoriées. !<br>";
echo "Il existe une telle variété d'animaux qu'il nous a toujours semblé utile d'effectuer des classements.<br>";
echo ("======================================<br></center>");

// Creation d'un animal
$nomAnimal = 'Lilith';
// $avoirTete = 'une';
// $avoirBouche = 'une';
// $avoirYeux ='des';
$animal = new Animaux($nomAnimal);
$animal->information();
$animal->caracteristiques();


// Creation d'un annelide
// $animal = '';
$animal1 = new Annelide("Angus");
$animal1->information();
$animal1->caracteristiques();
// echo $var1 = $animal1->getnomAnimal();
// echo "<br>".$var2 = $animal1 ->getclassification();
// echo "<br>".$var3 = $animal1 ->getavoirTete();
// echo "<br>".$var4 = $animal1 ->getavoirBouche();
// echo "<br>".$var5 = $animal1 ->getavoirYeux();
// echo "<br>".$var6 = $animal1 ->getcorpsAnneaux();
// echo "<br>".$var7 = $animal1 ->getnombreEspeces();
// echo "<br>";


// Creation d'un vers de terre
// $animal = '';
$animal2 = new VersDeTerre("Omer");
$animal2->information();
$animal2->caracteristiques();

// Creation d'un cnidaire
// $animal = '';
$animal3 = new cnidaire("Cyril");
$animal3->information();
$animal3->caracteristiques();

// Creation d'une meduse
// $animal = '';
$animal4 = new Meduse("Melissa");
$animal4->information();
$animal4->caracteristiques();

// Creation d'un Echinoderme
// $animal = '';
$animal5 = new Echinoderme("Elliot");
$animal5->information();
$animal5->caracteristiques();

// Creation d'une etoile de mer
// $animal = '';
$animal6 = new EtoileDeMer("Elisa");
$animal6->information();
$animal6->caracteristiques();

// Creation d'un mollusque
// $animal = '';
$animal7 = new Mollusque("Michael");
$animal7->information();
$animal7->caracteristiques();

// Creation d'un cephalopode
// $animal = '';
$animal8 = new Cephalopode("Cephalé");
$animal8->information();
$animal8->caracteristiques();

// Creation d'une pieuvre
// $animal = '';
$animal9 = new Pieuvre("Octopus");
$animal9->information();
$animal9->caracteristiques();

// Creation d'un poulpe
// $animal = '';
$animal10 = new Poulpe("Poulpie");
$animal10->information();
$animal10->caracteristiques();

// Creation d'un bivalve
// $animal = '';
$animal11 = new Bivalve("Bernard");
$animal11->information();
$animal11->caracteristiques();

// Creation d'une huitre
// $animal = '';
$animal12 = new Huitre("Hector");
$animal12->information();
$animal12->caracteristiques();

// Creation d'une moule
// $animal = '';
$animal13 = new Moule("Melanie");
$animal13->information();
$animal13->caracteristiques();

// Creation d'un gasteropode
// $animal = '';
$animal14 = new Gasteropode("Gaston");
$animal14->information();
$animal14->caracteristiques();

// Creation d'un escargot
// $animal = '';
$animal5 = new Escargot("Turbo");
$animal5->information();
$animal5->caracteristiques();

// Creation d'une limace
// $animal = '';
$animal6 = new Limace("Linda");
$animal6->information();
$animal6->caracteristiques();

// Creation d'une arthropode
// $animal = '';
$animal7 = new Arthropode("Arthur");
$animal7->information();
$animal7->caracteristiques();

// Creation d'un crustace
// $animal = '';
$animal8 = new Crustace("Calvin");
$animal8->information();
$animal8->caracteristiques();

// Creation d'un crabe
// $animal = '';
$animal9 = new Crabe("Carlos");
$animal9->information();
$animal9->caracteristiques();

// Creation d'une crevette
// $animal = '';
$anima20 = new Crevette("Camille");
$anima20->information();
$anima20->caracteristiques();

// Creation d'un arachnide
// $animal = '';
$animal21 = new Arachnide("Achille");
$animal21->information();
$animal21->caracteristiques();

// Creation d'une araignée
// $animal = '';
$animal22 = new Araignée("Albert");
$animal22->information();
$animal22->caracteristiques();


// Creation d'une mygale
// $animal = '';
$animal23 = new Mygale("Amelie");
$animal23->information();
$animal23->caracteristiques();






 ?>
