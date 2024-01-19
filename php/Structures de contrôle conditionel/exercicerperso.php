<?php
echo "Veuillez entrer la pression de votre pneu?";
$number=fgets(STDIN);
switch ($number)

{case "5":
        echo "Excellente pression";
        break;
    case "4":
        echo "Bonne pression";
        break;
    case"3":
        echo "Moyenne pression";
        break;
    case "2":
        echo "Mauvaise pression. Veuillez gonfler vos pneus!";
        break;
    case "1":
        echo "Pression médiocre. Veuillez gonfler vos pneus!";
        break;
    default:
        echo $number."n'est pas un chiffre. Veuillez introduire un chiffre de 1 à 5!";
}
?>