<?php

$counter=0;
$randomnumber=rand(0,100);
echo $randomnumber;
do
{
    echo " Veuillez deviner le nombre généré?";
    $entrynumber=fgets(STDIN);
    $counter++;
}
while ($randomnumber!=$entrynumber);
echo "Vous avez trouvé le bon chiffre en"." ".$counter." "."fois";
?>