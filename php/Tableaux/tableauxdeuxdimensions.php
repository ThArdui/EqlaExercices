<?php
$countriesPopulation= [
    ["Ukraine", 12000589],
    ["Italie", 17587420],
    ["Brésil" ,100560870],
    ["Mexique", 75875410],
];
echo "Le premier pays de la liste est ".$countriesPopulation[0][0]."\n";
ShowArrayCountries($countriesPopulation);
function ShowArrayCountries (array $population_countries):void
{
for ($i=0;$i<count($population_countries);$i++)
{

    for ($j=0;$j<count($population_countries[$i]);$j++)
    {
   echo $population_countries[$i][$j]." ";
    }
    echo "\n";
}
}
$showPopulation=Ascendingcountry($countriesPopulation);
ShowArrayCountries($showPopulation);
function Ascendingcountry(array $_arrayToSort):array
{
    for ($i=0; $i<(count($_arrayToSort)-1);$i++)
    {
        for ($j=$i+1; $j<count($_arrayToSort);$j++)
        {
            if ($_arrayToSort[$j][1]<$_arrayToSort[$i][1])
            {
                $temp=$_arrayToSort[$j];
                $_arrayToSort[$j]=$_arrayToSort[$i];
                $_arrayToSort[$i]=$temp;
            }
        }
    }
    return $_arrayToSort;
}