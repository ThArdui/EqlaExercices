<?php
$counter=10;
while ($counter>=1)
{
echo $counter ."\n";
sleep(1);
$counter-=1; //== $counter-- == $counter = $counter-1

}
echo "Lancement!";
?>