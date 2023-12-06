<?php
echo "Quelle table de multiplication souhaitez-vous?";
$userentry=fgets(STDIN);
echo "La table de multiplication de".$userentry."est"."\n";
 for ($i=1; $i<=10; $i++ )
 {
     echo $userentry*$i."\n";
 }