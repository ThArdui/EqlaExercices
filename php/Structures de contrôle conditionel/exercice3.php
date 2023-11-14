<?php

echo "Saisissez un nombre?";
$number=fgets(STDIN);
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
echo "Fin de l'exo";
?>