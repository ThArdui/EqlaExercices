<?php
echo "Veuillez entrer un nombre?";
$number=fgets(STDIN);
if (is_numeric($number))
{
    if ($number==0)
    {
        echo "Zéro";
    }
    if ($number>0)
    {
        echo "Positif";
    }

    if ($number<0)
    {
        echo "Négatif";
    }
}
else
{
    echo $number."n'est pas un chiffre. Veuillez rentrer un chiffre!";
}
/*
 if (is_numeric($number)==false)
{
    echo "Une ou plusieurs de vos  entrées ne sont pas un chiffre. Veuillez svp entrer un chiffre!";
}

 */

?>