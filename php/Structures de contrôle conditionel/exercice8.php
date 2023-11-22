<?php
echo "Entrez un premier nombre?";
$number1=fgets(STDIN);
echo "Entrez un deuxième nombre?";
$number2=fgets(STDIN);
echo "Entrez un troisième nombre?";
$number3=fgets(STDIN);

$biggestnumber = "Les nombres sont les mêmes";
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
    echo "Le nombre plus grand est".$biggestnumber;



/*pourquoi le message apparait juste après  "divisible par"...
if (is_numeric($number2&&$number1&&$number3)==false)
{
    echo "Une ou plusieurs de vos  entrées ne sont pas un chiffre. Veuillez svp entrer un chiffre! ";
}
*/

?>