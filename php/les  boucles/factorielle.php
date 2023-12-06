<?php
echo "Introduisez un nombre dont vous souhaitez connaitre la factorielle?";
$number=fgets(STDIN);
//$factor=1;
//$factor=$factor*2;
//$foractor=$factor*3;
//$faqctore=$factor*4;
//$factor= $factor*5;
$factor=1;
for ($i=1 ; $i<=$number ; $i++)
{
    $factor=$factor*$i;
    echo "factorielle de ".$i." est ".$factor."\n";
}
echo "La factorielle de".$number."est:".$factor;
?>