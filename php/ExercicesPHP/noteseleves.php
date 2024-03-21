<?php
declare(strict_types = 1);
echo "Entrez le nombre d'élèves?";
$studentNumber=intval(trim(fgets(STDIN)));
echo "Entrez le nombre de devoirs par élève?";
$homeworkNumber=intval(trim(fgets(STDIN)));// demande à l'utili le nombre d'elève et le nombre de devoir

$eleves = GetStudents($studentNumber, $homeworkNumber); // dans la variable élèves je stocke la fonction getstudent avec comme paramètre lé nombre d'élève et le nombre de devoirs


for ($i=0;$i<$homeworkNumber;$i++)
{
    echo $eleves[$i] [0]." ";
for ($j=0; $j<$homeworkNumber;$j++)
    {
        echo $eleves[$i][1][$j]." ";
    }
echo "\n";
}


/*for ($i=0 ; $i<=$studentnumber ; $i++)
{
Note($homeworknumber);
}
*/


function Note(int $note) :array  // je crée fonction Note avec en paramètre un int qui est $note
{
    for ($i=0; $i<$note ; $i++)// boucle for qui démarre à 0 jusquà note et qui s'incrémente à chaque fois!
    {
        do //boucle do while dans bucle for pour demander les nnotees- s'exécute tant  que c'est pas un chiffre rou que c'esty un chiffre négatif

        {
            echo "Entrez une note positive au devoir ".($i+1)." ?";
            $_note=trim(fgets(STDIN));
        }
        while (!is_numeric($_note) && intval($_note<0));
        $notes [$i]=$_note; // dans le tableau notes je stockes toutes les notes récupérées, i pour les ittérations
    }
    return $notes; // je renvoie le tableu note;

}
function GetStudents(int $studentsNumber, int $homeworknumber):array // fction pour connaitre le prénom dde l'élève avec comme par le nombre d'étudiant le nombre de devoirs
{
    $eleves = []; // déclation du tableau elèves
    for ($i=0; $i<$studentsNumber; $i++)// boucle for départ 0 -->  nombre de devoirs avec incrémentation
    {
        $student_name = "";

        do
        {
            echo "Quel est le prénom de l'élève ".($i+1);
            $student_name= trim(fgets(STDIN));
        }
        while (strlen($student_name)<3);
        $notes=Note($homeworknumber);
        $eleves[] = [$student_name,$notes];

    }
    return $eleves;
}

?>


