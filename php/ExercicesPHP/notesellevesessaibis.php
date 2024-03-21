<?php
     declare(strict_types=1);
echo "Quel est le nombre d'élèves?";
$studentsnumber=intval(trim(fgets(STDIN)));
echo "Quel est le nombre de devoir par élèves?";
$homeworknumber=intval(trim(fgets(STDIN)));
$tableaucomplet=GetStudents($studentsnumber,$homeworknumber);
$eleves = $tableaucomplet[0]; // [["nom",note1,note2,...],...]
$moyennes = $tableaucomplet[1]; // [moyenne1,moyenne2,...]
for ($i=0 ; $i<count($eleves);$i++)
{
    for ($j=0;$j<count($eleves[$i][1]);$j++)
    {
        echo "Eleve : ". $eleves[$i][0] . " au devoir n°".($j+1)." a reçus la notre de ". $eleves[$i][1][$j]."\n";
    }
    echo "La moyenne de " . $eleves[$i][0] . " est de " .$moyennes[$i]."\n";
}

/*for ($i=0; $i<$homeworknumber; $i++)
{

    echo $eleves[$i][0]." :";
    for ($j=0 ; $j<$homeworknumber;$j++)
    {
        echo $eleves[$i][1][$j]." ";
    }
    echo "\n";
}*/


function Getnotes(int $notes):array
{
    $lesnotes=[];
    for ($i=0 ; $i<$notes; $i++)

    {
        do
        {
            echo "Quel eet la note du devoir n°  ".($i+1);
            $_notes=intval(trim(fgets(STDIN)));
        }
        while (!is_numeric($_notes) || intval($_notes<0));
        $lesnotes[$i]=$_notes;
    }

    return $lesnotes;
}

function Getstudents (int $studentnbr, int $homeworknbr ):array
{
    $students=[];
    $avarege=[];
    for ($i=0 ; $i<$studentnbr; $i++)
    {
        do
        {        echo "Entrez le prénom de l'elève n° ".($i+1);
            $_studentname=trim(fgets(STDIN));

        }
        while (strlen($_studentname)<3);
        $notes=Getnotes($homeworknbr);
        $avarege[]=AvaregeStudent($notes); // Un tableau de moyenne [moyenne1,moyenne2,moyenne3,...]
        $students[]=[$_studentname, $notes]; // Tun tableau d'élèves [["nom",note,note,note,...],["nom",note,note,note,...],["nom",note,note,note,...]]
    }

    //return $students; // IL faut aussi renvoyer les moynnes !
    // Je recrée un tableau de tableau pour pouver envoyer une seule donnée :
    $_completeArray[] = $students;
    $_completeArray[] =$avarege;
    // Autre possibilité, recréer un tableau avec la structure ["nom",moyenne,note1,note2,note3,...]
    return $_completeArray;
}
    function AvaregeStudent(array $avarege_stduents):float
    {
        $sum=0;
for ($i=0; $i<count($avarege_stduents);$i++ )
{
    $sum+=$avarege_stduents[$i];


}
$avg=$sum/count($avarege_stduents);
return $avg;
    }

?>