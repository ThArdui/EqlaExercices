<?php
do {
    echo "Veuillez entrer 1 pour afficher, 2 pour ajouter, ou 3 pour quitter? ";
    $userentry = fgets(STDIN);
    if ($userentry == 1) {
        echo "afficher"."\n";
    }
   elseif ($userentry == 2) {
        echo "Ajouter"."\n";
    }
     elseif ($userentry == 3) {
        echo "quitter"."\n";
    }
    else
    {
        echo "Attention"." ".$userentry."n'est pas un chiffre de 1 à 3. Veuillez SVP rentrer un chiffre de 1 à 3!";
    }
}
while ($userentry!=3);



            echo "Vous quittez le programme";


?>