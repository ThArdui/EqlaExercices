
<?php
echo "Veuillez entrer votre note (0 à 100) : ";
$number =fgets(STDIN);
switch ($number) {
    case ($number > 100 || $number < 0):
        echo $number . " n'est pas un chiffre compris entre 0 et 100. Merci d'introduire un chiffre entre 0 et 100. Merci d'introduire un chiffre entre 0 et 100.";
        break;
    case ($number > 90 ||$number==90)&& ( $number==100 ||$number < 100):
        echo "Très bien";
        break;
    case ($number > 80|| $number==80) && ( $number==89|| $number < 89):
        echo "Bien";
        break;
    case ($number >70||$number==70) && ($number < 79|$number==79):
        echo "Satisfaisant";
        break;
    case ($number < 70):
        echo "A améliorer!";
        break;
    default:
        echo "Note invalide.";
        break;
}
?>