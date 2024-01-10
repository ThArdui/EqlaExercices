<?php
function DisplayPyramid ()
{


    for ($i=1 ; $i<=5; $i++)
    {

      for ($j=1 ; $j<=$i;$j++ )
      {
          echo "*";
      }
echo "\n";
    }
}
    DisplayPyramid();
DisplayPyramid();
?>


