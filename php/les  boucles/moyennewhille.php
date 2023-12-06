<?php
$counter=0;
$sum=0;
while (true)
{
    echo "Intrduisez votre note (chiffre 0 à 20)?";
    $note=trim(fgets(STDIN));
    if ($note<0)
    {
        echo $note."est un chiffre négatif.";
        break;
    }
    else
    {
        if ($note<=20)
        {
            $sum=$sum+$note ;
            $counter++;
        }

        else
        {
            echo $note."est un chiffre plus grand  que 20.Veuillez entré un nombre compris de 0 à 20.";
        }

    }

}
echo "La moyenne de vos résultats est de".$sum/$counter;
?>