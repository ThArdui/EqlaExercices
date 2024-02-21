<?php


$tableauPays= [
    ["Ukraine",1250000,8745269],
    ["Italie",2685000],
    ["Bresil",87458956],
    ["Mexique",17800560]
];

$eleves= [
    [ "Bob",[5,10,15,20]]
    ];


ShowArray($tableauPays);
ShowStudents ($eleves);
function ShowArray (array $countrylist):void
{
    for ($i=0 ; $i<count($countrylist); $i++)

    {
   for ($j=0; $j<count($countrylist[$i]);$j++)
   {
       echo $countrylist[$i][$j].",";

   }
   echo "\n";
    }

    function ShowStudents (array $studentList):void
    {
        for ($i=0 ; $i<count($studentList); $i++)

        {
            echo $studentList[$i] [0].":";

            for ($j=0; $j<count($studentList[$i][1]);$j++)
            {
                echo $studentList [$i] [1][$j].",";

            }
            echo "\n";
        }
    }


}


?>