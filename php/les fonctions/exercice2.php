<?php
function CalculateFactorial()
{
    $factor = 1;
    for ($i = 1; $i <= 5; $i++) {
        $factor = $factor * $i;

    }
    echo "La factorielle de 5 " . "est:" . $factor;
}
CalculateFactorial() ;
CalculateFactorial();

?>
