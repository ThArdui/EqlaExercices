<?php
echo "Entrez un premier nombre?";
$number1=fgets(STDIN);
echo "Entrez un deuxième nombre?";
$number2=fgets(STDIN);


if ($number1%$number2==0)
{
    echo $number1."est divisible par".$number2;
}
else
{
    echo $number1." n'est pas divisible par".$number2;
}

/*
pourquoi le message apparait juste après  "divisible par"...
if (is_numeric($number1&&$number2)==false) ====> faux car on ne peut pas faire un && entre deux nombre, && est un opérateur booléen
if(is_numeric($number1)==false||is_numeric($nombre2)==false) =====> Correct
if(!(is_numeric($number1)&&is_numeric($nombre2))) =====> Correct et la plus classique
if(!is_numeric($number1)||!is_numeric($number2)) ======> Correct
{
    echo "Une ou plusieurs de vos  entrées ne sont pas un chiffre. Veuillez svp entrer un chiffre!";
}
*/
?>
