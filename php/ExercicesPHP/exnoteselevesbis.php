<?php
declare(strict_types=1);
echo "Entrez le nombre d'élèves?";
$studentNumber=intval(trim(fgets(STDIN)));
echo "Entrez le nombre de devoirs par élève?";
$homeWorkNumber=intval(trim(fgets(STDIN)));

$students=StudentsNames($studentNumber,$homeWorkNumber);

for ($i=0;$i<$homeWorkNumber;$i++)
{
    echo $students[$i] [0]." ";
    for ($j=0; $j<$homeWorkNumber;$j++)
    {
        echo $students[$i][1][$j]." ";
    }
    echo "\n";
}
function Notes (int $note):array
{

    for ($i=0; $i<$note ; $i++)
    {
        do
        {
echo "Entrez une note pour le devoir n° ".($i+1);
$_note=trim(fgets(STDIN));
        }
        while(is_numeric($_note)&&intval($_note)>0);
$notes[$i]=$_note;
    }
    return $notes;
}

function StudentsNames(int $studentnumber,int $homeworknumber):array

{
    $eleves=[];

for ($i=0; $i<$studentnumber; $i++) {
    do {
        echo "Entrez le prénom de l'élève n° " . ($i + 1);
        $_studentname = trim(fgets(STDIN));
    } while (strlen($_studentname) <=3);
    $notes = Notes($homeworknumber);
    $eleves []= [$_studentname, $notes];
}
return $eleves;

}