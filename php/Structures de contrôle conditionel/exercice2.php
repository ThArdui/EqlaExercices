<?php
$age;
echo " Quel âge avez-vous? ";
$age=fgets(STDIN);
if (is_numeric($age))
{
    if ($age>=18)
    {
        echo "Vous êtes majeur";
    }
    else
    {
        echo "Vous êtes mineur";
    }


}
else
{
    echo $age."n'est pas un chiffre. Veuillez svp rentrer un chiffre";
}
echo "Fin de l'exo";
?>
