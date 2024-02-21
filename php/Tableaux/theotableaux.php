<?php
$populationcountry=[1250000,2685000,17800560,82200500, 87458956 ];

echo "La population du 1er pays est de ".$populationcountry[0]."\n";
$country= ["Ukraine","Italie","Bresil","Mexique"];
echo "Le 2ème pays est".$country[1]."\n";
echo "Le premier pays est ".$country[0]." et sa population est de ".$populationcountry[0]."\n";


echo "Popuulation par pays \n";

ShowArrays($country,$populationcountry);

$populationcountry[]=8786542;
$country[]="Irlande";
echo "Popuulation par pays \n";

ShowArrays($country,$populationcountry);


function ShowArrays(array $country,array $populationcountry):void
{
    for ($i=0;$i<count($country);$i++)
    {
        echo $country[$i]." : ".$populationcountry[$i]."\n";
    }

}


?>