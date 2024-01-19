<?php
// consigne
// Si vous avez réussi, avant de les trier, demandez à l'utilisateur si il veut les trier dans l'ordre croissant (en tapant 1) ou dans l'ordre décroissant (en tapant 2). Appliquez le tri correspondant au choix de l'utilisateur.
// Si vous avez réussi, traitez les erreurs, les entrée incorrectes, les entrées égales,...

//Si vous avez réussi, rajouter une option au menu de départ pour quitter en tapant sur 3 !

// je récolte les données de l'utilisateur
while (true)
{
    echo "Veuillez entrer un nombre?";
    $number1=fgets(STDIN);
    echo "Veuillez entrer un deuxième nombre?";
    $number2=fgets(STDIN);
    echo "Veuillez entrer un troisième nombre?";
    $number3=fgets(STDIN);
// je voulais vérrifier par la même occasion si ce sont des chiffres les mêmes mais pas fonctionné. J'ai mis un if ($number1 = $number2=$number3) { echo: données égales- veuillez rentrer des chiffres} else { tout le reste}. ça affiche que les nombres sont les mêmes même s'ils sont pas
    if (is_numeric($number1)&&is_numeric($number2)&& is_numeric($number3)) // je vérifie si les entrées sont des chiffres. si oui je demande au système de calculer le chiffre le plus peit et le plus grand. Sinon, j'affiche ce qu'il y a dans le else.

    {
        if ($number1>$number2)
        {
            if ($number1>$number3)
            {
                $biggestnumber=$number1;
            }

        }
        if ($number2>$number1)
        {
            if ($number2>$number3)
            {
                $biggestnumber=$number2;
            }
        }
        if ($number3>$number1)
        {
            if ($number3>$number2)
            {
                $biggestnumber=$number3;
            }
        }
        if ($number1<$number2)
        {
            if ($number1<$number3)
            {
                $lowestnumber=$number1;
            }
        }
        if ($number2<$number1)
        {
            if ($number2<$number3)
            {
                $lowestnumber=$number2;
            }
        }
        if ($number3<$number1)
        {
            if ($number3<$number2)
            {
                $lowestnumber=$number3;
            }
        }
// 5 - 10 - 8
// 5 le plus petit
// 10 est le plus grand
// 8 => ($number1 = 5 + $number2 = 8 + $number3 = 10) - $lowestNumber = 5 - $biggestNumber = 10


    }
    else
    {
        echo "Une ou plusieurs entrées ne sont pas des chiffres. Veuillez entrer uniquement des chiffres.";
        exit(); // pour que la suite ne s'affiche pas en même temps!

    }
    $middelnumber= ($number1+$number2+$number3)-$lowestnumber-$biggestnumber;
// calcul du nombre du milieu
    echo "Tapez maintenant  1 pour faire un tri croissant, 2 pour un tri décroissant et 3 pour revenir au début";
    $number=fgets(STDIN);
    switch ($number)
    {
        case "1":
            echo $lowestnumber."-".$middelnumber."-".$biggestnumber;
            break;
        case "2":
            echo $biggestnumber."-".$middelnumber."-".$lowestnumber;
            break;
        case "3":
            break; // ça reviens au début
        default:
            echo $number."n'est pas un chiffre. Veuillez entrer un 1, 2 ou 3 svp";

    }


}

?>