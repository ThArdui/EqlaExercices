<?php
$counter=0;
$alea=rand(0,100);
echo $alea;
do
{
    echo "Essayez de deviner le chiffre compris entre 0 et 100? \n Pour quitter le jeu, veuillez taper sur la touche Q.";
    $enter= trim(fgets(STDIN));
    $counter++;
if ((is_numeric($enter)) || ($enter=="q"))
{
    if (( $enter>=0 && $enter<=100)||$enter=="q")
    {
        if ($enter=="q")
        {
            echo "Vous êtes sur le point quitter le jeu\n";
            break;
        }
        else if ($enter>$alea)
        {
            echo $enter."est trop grand. Veuillez réessayer!\n";
        }
        else if ($enter<$alea)
        {
            echo $enter."est trop petit. Veuillez réessayer!\n";
        }

        else
        {
            echo "Félicitation vous avez deviné le nombre en ".$counter." tentatives\n";
        }
    }

}
else
{
    echo $enter."n'est pas un chiffre de 0 à 100. Veuillez entrer un chiffre de 0 à 100 ou appuyez sur Q pour quitter";
}
}


while ($alea!=$enter);
echo "Le jeu s'arrête"
?>