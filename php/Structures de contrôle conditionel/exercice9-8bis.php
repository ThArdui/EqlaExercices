<?php
echo "Saisissez un premier nombre?";
$number1=fgets(STDIN);
echo "Saisissez un deuxième nombre?";
$number2=fgets(STDIN);
echo "Saisissez un troisième nombre?";
$number3=fgets(STDIN);
if (($number1>$number2)&& ($number1>$number3))
{
echo $number1."est le plus grand nombre";
}
if (($number2>$number1)&&($number2>$number3))
{
    echo $number2."est le plus grand nombre";
}
if (($number3>$number1) &&($number3>$number2))
{
    echo $number3."est le plus grand nombre";
}
?>