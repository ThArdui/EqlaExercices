<?php
$counter=0;
echo "Bienvenue dans notre programme\n Entrez une phrase MAJUSCULE? \n Je vais  la transformer   en minuscule ! " ;
$userEntry=trim(fgets(STDIN));
echo $userEntry."\n";
StringLowerCase($userEntry );
StringLowerCase(  "CHIEN");
// variables 1ère lettre de chaque mot maj mais pas toute première- fonctions tout es premières lettres maj.
function StringLowerCase(string $_strentry)
{
    $upper_String = "";
    global $counter;
    $counter++;
    for ($i = 0; $i < strlen($_strentry); $i++) {
        $_FirsChar = ord($_strentry[$i]); //ord transforme en chiffre  chr en lettre

        if ($_FirsChar >= 65 && $_FirsChar <= 90) {
            $_FirsChar = $_FirsChar + 32;
        }
        $_FirsChar = chr($_FirsChar);
        $upper_String = $upper_String . $_FirsChar;
    }

    //  echo ord($_strentry)."\n"; //transforme  première  lettre en chiffre de la table asci
    echo $counter . " : " . $upper_String . "\n";
}