<?php
$sum=0;
echo "Entrez des nombres à additionner (nuls ou positifs)?";
$number=fgets(STDIN);
while ($number>=0)
{
    $sum=$sum+$number;
    echo "Entrez des nombres à additionner (nuls ou positifs)?";
    $number=fgets(STDIN);

}
echo "Vous avez inséré un chiffre négatif.La somme des nombres est".$sum;
?>