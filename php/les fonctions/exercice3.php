<?php
function GuessGame ()
{
    $randomNumber= rand(1,10);
    $counter=0;
    do
    {

        echo "Essayez de deviner un nombre généré entre 1 et 10?";
        $userNumber=fgets(STDIN);
        $counter++;
        if (is_numeric($userNumber))
        {
            if ($userNumber!=$randomNumber)
            {
                echo $userNumber."n'est pas le bon nombre! Veuillez réessayer";
            }
            if ($userNumber==$randomNumber)
            {
                echo $userNumber." est le  bon nombre! \n";
            }
        }
       else
       {
           echo $userNumber."n'est pas un nombre. Merci de rentrer un nombre";
       }

    }
    while($randomNumber!=$userNumber);

    echo "Félicitation! Vous avez trouvé le bon nombre en ".$counter." fois!";


}
GuessGame();
GuessGame();
?>