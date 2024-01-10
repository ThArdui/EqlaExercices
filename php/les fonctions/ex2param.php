<?php
function CalculateFactorial(int $number)
{
    $factor = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factor = $factor * $i;

    }
    echo "La factorielle de ".$number . "est:" . $factor;
}
CalculateFactorial(3) ;
CalculateFactorial(4);
CalculateFactorial(6);
?>
