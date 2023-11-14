<?php
$day ;
echo "Saisissez un jour de la samaine par le biais d'un chiffre (1 à 7)?" ;
$day=fgets(STDIN);

switch ($day)
{

		case "1":
		echo "Lundi";
		break;

		case "2":
		echo "Mardi";
		break;

		case "3":
		echo "Mercredi";
		break;

		case "4":
		echo "Jeudi";
		break;

		case "5":
			echo "Vendredi";
			break;

	case "6":
		echo "Samedi";
		break;

	case "7":
		echo "Dimanche";
		break;

	default:
			echo $day."n'est pas un chiffre de 1 à 7. Veuillez introduire un chiffre de 1 à 7";
			break;

		}
?>
