<?php declare(strict_types=1);
echo "q1?";
$q1=trim(fgets(STDIN));
echo "q2?";
$q2=trim(fgets(STDIN));



if ($q1=="oui" && $q2=="oui")
{
    echo "Q3?";

    echo "fin du programme";

}
if ($q1=="oui"&&$q2=="non")
{
    echo "q4?\n";

    echo "fin du programme";
}
    if ($q1=="non"&& $q2=="oui")
    {
        echo "Q3?";

        echo "fin du programme";

    }
    if ($q1=="non"&&$q2=="non")
    {
        echo "fin du programme ";
    }