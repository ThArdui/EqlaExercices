<?php
$age;
echo " Quel âge avez-vous? ";
$age=fgets(STDIN);
if ($age>=18)
{
    echo "Vous êtes majeur";
}
else
{
    echo "Vous êtes mineur";
}
echo "Fin de l'exo";
?>
