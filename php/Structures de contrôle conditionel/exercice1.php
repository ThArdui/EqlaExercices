<?php
$number=0;
echo "Veuillez saisir un nombre?";
$number=fgets(STDIN);
if (is_numeric($number))
{
    if ($number>=0)
    {
        echo "Votre nombre est positif";
    }
}
else
{
	echo $number."n'est pas un chiffre. Veuillez svp rentrer un chiffre!";
}
// pas besoin de else dans ce cas ci car de toutes façons il n'affichera rien si le nombre est négatif.
echo "Exercice terminé";
?>
<