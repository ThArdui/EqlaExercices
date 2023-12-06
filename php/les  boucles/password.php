<?php
$password ="motdepasse";
$counter=0;
while (true)
{
    echo "Veuillez entrer un mot de passe?";

    $entrypassword=trim(fgets(STDIN));
    $counter++;
    if ( ($entrypassword==$password))
    {
        echo "Super! Vous avez entré le bon mot  de passe";
        break;
    }
    if ($counter==3)
    {
        echo "Vous avez échoué trois fois! Veuillez réessayez plus tard";
        break;
    }
    echo "Vous avez entré un mot de passe erroné. Veuillez réessayer!";
}
echo "fin du programme";
?>