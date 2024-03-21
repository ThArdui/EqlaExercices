<?php
$populationcountry=[1250000,2685000,17800560,82200500, 87458956 ];
$country= ["Ukraine","Italie","Bresil","Mexique"];

echo "La population du 1er pays est de ".$populationcountry[0]."\n";

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
$Orderedaray=AscendingOrder($populationcountry);
print_r($Orderedaray);
function AscendingOrder(array $_arrayToSort):array
{
    for ($i=0; $i<(count($_arrayToSort)-1);$i++)
    {
        for ($j=$i+1; $j<count($_arrayToSort);$j++)
        {
            if ($_arrayToSort[$j]<$_arrayToSort[$i])
            {
               $temp=$_arrayToSort[$j];
               $_arrayToSort[$j]=$_arrayToSort[$i];
               $_arrayToSort[$i]=$temp;
            }
        }
    }
return $_arrayToSort;
}
/* essai perso
 function Order (array $populationcountry):void
{
    for ($i=0 ; $i<count($populationcountry) ; $i++)
    {
        if ($populationcountry[1]<$populationcountry[0])
        {
            echo $populationcountry[1][$i];
        }
    }
}

 */


?>