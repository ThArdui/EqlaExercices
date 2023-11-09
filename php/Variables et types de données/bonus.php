<?php
$namea;
$nameb;
$resulta;
$resultb;
$sum;
$division;
$multiplication;
$substraction;
$average;
echo "Quel est votre prénom?";
$namea=fgets(STDIN);
echo "Bonjour". $namea."Entrez le résultat  de votre dernier contrôle ?";
$resulta=fgets(STDIN);
echo "Entrez le prénom de votre cammarde?";
$nameb=fgets(STDIN);
echo "Entrez le résultat du dernier contrôle de votre cammarade ($nameb) ?";
$resultb=fgets(STDIN);
$sum=$resulta+$resultb;
$division=$resulta/$resultb;
$multiplication=$resulta*$resultb;
$substraction=$resulta-$resultb;
$average=($resulta+$resultb)/2;
echo "Bonjour ".$namea."et".$nameb.","."Vous avez eu respectivement".$resulta."et".$resultb."à  votre dernier contrôle."."La somme de vos résultats est de".$sum."!"." La division de vos résultats est de".$division."!"."La multiplication de vos résultats est de".$multiplication."!"."La soustraction de vos résultats est de".$substraction."!"."Enfin, la moyenne de vos résultats est de".$average."!"."J'espère  que j'ai pu être utile, passez une belle journée!";

 ?>