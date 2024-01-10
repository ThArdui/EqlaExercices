<?php
function DisplayPyramid (int $roof, int $floor)
{


    for ($i=$roof ; $i<=$floor; $i++)
    {

        for ($j=1 ; $j<=$i;$j++ )
        {
            echo "*";
        }
        echo "\n";
    }
}
DisplayPyramid(2,8);
DisplayPyramid(8,14);
?>
