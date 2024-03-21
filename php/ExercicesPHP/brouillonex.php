<?php
$noteseleves=[
    ["Thom", 5,6],
    ["Oli", 10,12],
];

echo "La 1ère note de ".$noteseleves[0][0]." est de ".$noteseleves[0][1]."\n";

for ($i=0; $i<count($noteseleves); $i++)
{
for ($j=0; $j<count($noteseleves[$i]);$j++)
{
    echo $noteseleves[$i][$j]." ";
}
echo "\n";
}