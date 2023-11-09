<?php
$number1;
    $number2;
        $number3;
            echo "Veuillez entrez le premier nombre à aditionner?";
$number1= (int) fgets(STDIN);
            echo "Veuillez entrez le deuxième nombre à aditionner?";
    $number2= (int) fgets(STDIN);
    $number3=$number1+$number2;
    echo "Le résultat de votre addition est".$number3;
    ?>
