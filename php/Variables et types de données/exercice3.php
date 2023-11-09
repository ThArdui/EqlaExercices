<?php
$celsius;
$fahrenheit;
    echo "Entrez la température en celsuis?";
    $celsius=fgets(STDIN);
    $fahrenheit=($celsius*9/5)+32;
    echo "Il fait".$fahrenheit."fahrenheit.";
    ?>