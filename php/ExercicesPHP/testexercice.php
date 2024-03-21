<?php declare(strict_types = 1);
/*$a= [10,20,30,40];
/*$a[0]=5; // pour remplacer
$a[]=50; // on ajoute
unset($a[1]);*/
echo $a[0]."\n ";
for ($i=0; $i<4 ; $i++)
{
    echo $a[$i];
}

echo "essai boucle foreach ";
foreach ($a as $element)
{
    echo $element."\n";
}*/

/*for ($i=0;$i<4;$i++)
{
    echo "La valeur est de : ".$a[$i]."\n";
    $a[$i]=$a[$i]*2;
    echo "La valeur est de : ".$a[$i]."\n";
}
echo $a[2];*/

/*
$chainetst="Thomas ardui";
$position=strpos($chainetst,"ui");
echo $position."\n";
$testchainebis="Je suis beau";
$subsacttest=substr($testchainebis,8,4 );
echo $subsacttest."\n";
$replacestring="Bonjour Monsieur";
$newstrinhg=str_replace("Monsieur","Madame",$replacestring);
echo $newstrinhg."\n";
$lowerupper="HELLO world";
$minus=strtolower($lowerupper);
$maj=strtoupper($lowerupper);
echo $minus."\n".$maj;*/