<?php declare(strict_types=1);


echo "Bienvenue dans la super calculette\n";

do
{
    echo "Tapez 1 pour faire une addition\n 2 pour faire une soustraction \n 3 pour faire une multiplication \n 4 pour faire une division \n Tapez Q pour quitter!\n";
    $userEntry=trim(fgets(STDIN));
    if ($userEntry==1)
    {

        echo "Entrez un premier nombre?";
        $number_1=intval(trim(fgets(STDIN)));
        echo "Entrez un deuxième nombre?";
        $number_2=intval(trim(fgets(STDIN)));
        echo "Le résultat est ".Addition($number_1,$number_2)."\n";
    }
    elseif ($userEntry==2)
    {
        echo "Entrez un premier nombre?";
        $number_1=intval(trim(fgets(STDIN)));
        echo "Entrez un deuxième nombre?";
        $number_2=intval(trim(fgets(STDIN)));
        echo "Le résultat est ". Substratction($number_1,$number_2)."\n";
    }
elseif ($userEntry==3)
    {
        echo "Entrez un premier nombre?";
        $number_1=intval(trim(fgets(STDIN)));
        echo "Entrez un deuxième nombre?";
        $number_2=intval(trim(fgets(STDIN)));
        echo "Le résultat est ".Multiplication($number_1,$number_2) ."\n";
    }
    elseif ($userEntry==4)
    {
        echo "Entrez un premier nombre?";
        $number_1=intval(trim(fgets(STDIN)));
        echo "Entrez un deuxième nombre?";
        $number_2=intval(trim(fgets(STDIN)));
        echo "Le résultat est ". Division($number_1,$number_2)."\n";
    }
    elseif ($userEntry=="q")
    {
        echo "Merci et au revoir \n";
        break;
    }
}
while($userEntry="q");
function Addition(int $number_1, int $number_2):int
{
    return $number_1+$number_2;
}

function Division(int $number_1, int $number_2):int
{
    if ($number_2!=0)
    {
return $number_1/$number_2;
    }
    else
    {
        echo "Le diviseur est égal à 0. Veuillez entrer un chiffre suppérieur à 0"; return (0);
    }


}
function Multiplication(int $number_1, int $number_2):int
{
    return $number_1*$number_2;
}

function Substratction (int $number_1, int $number_2):int
{
    return $number_1-$number_2;
}