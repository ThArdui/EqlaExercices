<?php
$number=0;
echo "Veuillez saisir un nombre?";
$number=fgets(STDIN);
if ($number>=0)
{
    echo "Votre nombre est positif";
}
// pas besoin de else dans ce cas ci car de toutes façons il n'affichera rien si le nombre est négatif.
echo "Exercice terminé";
?>
<