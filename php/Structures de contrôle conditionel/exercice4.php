<?php

echo "Veuillez saisir votre note ( entre 0 et 100)?";
$number = fgets(STDIN);
if ($number>100 ||$number<0)
{
    echo $number."n'est pas un chiffre compris entre 0 et 100. Merci d'introduire un chiffre entre 0 et 100.";
}
elseif ($number>90||$number==90)
    // elsif($number>=90)
{
    echo "Très bien";
}
elseif (($number<89|| $number==89) && ($number>80 ||$number==80))
    // elsif($number>=80)
{
    echo "Bien";
}
elseif (($number<79 || $number==79) && ($number>70 ||$number==70))
{
    echo "Satisfaisant";
}
elseif ($number<70)
{
    echo "Á améliorer";
}
echo "Fin de l'exo!"
?>
