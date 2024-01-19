<?php
$counter=0;
$alea=rand(0,100);
echo $alea;
do
{
    echo "Essayez de deviner le chiffre? \n Pour quitter le jeu, veuillez taper sur la touche Q.";
    $enter= trim(fgets(STDIN));
    $counter++;
    if ( $enter>=0 && $enter<=100)
    {
        if ($enter>$alea)
        {
            echo $enter."est trop grand. Veuillez réessayer!";
        }
        if ($enter<$alea)
        {
            echo $enter."est trop petit. Veuillez réessayer!";
        }
        else
        {
            echo $enter."n'est pas un chiffre de 0 à 100. Veuillez entrer un chiffre de 0 à 100 ou tapez Q pour quitter?";
        }
        if ($enter=="q")
        {
            echo "Vous êtes sur le point quitter le jeu";
            break;
        }
    }
    else
    {

    }
}
while ($alea!=$enter);
echo "Félicitation vous avez deviné le nombre en".$counter."tentatives";
?>