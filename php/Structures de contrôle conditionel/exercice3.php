<?php

echo "Saisissez un nombre?";
$number=fgets(STDIN);
if (is_numeric($number))
{
    if ($number==0)
    {
        echo "Zéro";
    }
    elseif ($number>0)
    {
        echo "Positif";
    }
    else
    {
        echo "Négatif";

    }

}
else
    {
        echo $number."n'est pas un nombre valide. Veuillez saisir un nombre  valide.";
    }
echo "Fin de l'exo";
?>