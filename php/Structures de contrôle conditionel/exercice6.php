<?php
echo "Saisissez un mois de l'année en utilisant les chiffres de 1 à 12 ?";
$month=fgets(STDIN);
switch ($month)
{
    case "1":
        echo "Janvier - 31 jours";
        break;

    case "2":
        echo "Février-28 jours";
        break;

    case "3":
        echo "Mars- 31 jours";
        break;

    case "4":
        echo "Avril -30 jours";
        break;

    case "5":
        echo "Mai-31 jours";
        break;

    case "6":
        echo "Juin -30 jours";
        break;

    case "7":
        echo "Juillet-31 jours";
        break;

    case "8":
        echo "Août-30 jours";
        break;

    case "9":
        echo "Septembre-30 jours";
        break;

    case "10":
        echo "Octobre-31 jours";
        break;

    case "11":
        echo "Novembre -30 jours ";
        break;

    case "12":
        echo "Décembre-31 jours ";
        break;

    default:
        echo $month."n'est pas un chiffre entre 1  et 12. Veuillez introduire un chiffre entre 1 et 12.";
}