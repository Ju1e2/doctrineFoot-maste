<?php
include_once "vendor/autoload.php";
include_once "bootstrap.php";

use App\Entity\Equipe;
use App\Entity\Joueur;
use App\Entity\Stade;
use App\Entity\Coach;
use App\Entity\ClubSupporter;


$auteuil = new Coach("Supporter de Boulogne");
$entityManager->persist($auteuil);
$entityManager->flush();


$SDP = new Stade("Parc des princes");
$entityManager->persist($SDP);
$entityManager->flush();



$LB = new Coach("Laurent Blanc");
$entityManager->persist($LB);
$entityManager->flush();


$EDF = new Equipe("France");
$entityManager->persist($EDF);
$EDT = new Equipe("Turquie");
$entityManager->persist($EDT);
$EDA = new Equipe("Allemagne");
$entityManager->persist($EDA);
$entityManager->flush();
echo "Equipe de France"    . $EDF->getId() . "\n";
echo "Equipe de la Turquie"    . $EDB->getId() . "\n";
echo "Equipe de l'Allemagne" . $EDB->getId() . "\n";


$giroud = new Joueur("Giroud", "Olivier", 14, $EDF);
$entityManager->persist($giroud);
$grizou = new Joueur("Griezmann", "Antoine", 6, $EDF);
$entityManager->persist($grizou);
$entityManager->flush();
echo "Joueur de France " . $giroud->getId() . "\n";
echo "Joueur de France " . $grizou->getId() . "\n";


$neuer = new Joueur("Manuel", " Neuer", 2, $EDA);
$entityManager->persist($neuer);

echo "Joueur de l'allemagne " . $neuer->getId() . "\n";

$EDF = new ClubSupporter("Supporter de France");
$entityManager->persist($EDF);






