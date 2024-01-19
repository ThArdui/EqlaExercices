
<?php
echo "Bienvenue!\n";
do {
    echo "Tapez 1 pour transformer votre phrase en MAJUSCULE, 2 pour transformer en minuscule et tapez Q pour quitter";
    $userMenuEntry = trim(fgets(STDIN));
    if ($userMenuEntry == 1)
    {
        $counter=0;
        echo "Veuillez entrez une phrase à transforme en majuscules?";
        $userEntry=trim(fgets(STDIN));
        echo $userEntry."\n";
        StringtUpperCase($userEntry);
        StringtUpperCase(  "Chien");
// variables 1ère lettre de chaque mot maj mais pas toute première- fonctions tout es premières lettres maj.

    } // fin scope majuscule

    elseif ($userMenuEntry==2)
    {
        $counter=0;
        echo "Veuillez entrez une phrase à transforme en minuscules?";
        $userEntry=trim(fgets(STDIN));
        echo $userEntry."\n";
        StringLowerCase($userEntry );
        StringLowerCase(  "CHIEN");
    }

    elseif ($userMenuEntry=="q")
    {
        echo " Vous quittez le programme";
        break;
    }
}
while($userMenuEntry==1||$userMenuEntry==2);

function StringtUpperCase (string $_strentry)
{
    $upper_String="";
    global $counter;
    $counter++;
    for ($i=0;$i<strlen($_strentry);$i++)
    {
        $_FirsChar=ord($_strentry[$i]); //ord transforme en chiffre  chr en lettre

        if ($_FirsChar>=97 && $_FirsChar<=122)
        {
            $_FirsChar=$_FirsChar-32;
        }
        $_FirsChar=chr($_FirsChar);
        $upper_String=$upper_String.$_FirsChar;
    }

    //  echo ord($_strentry)."\n"; //transforme  première  lettre en chiffre de la table asci
    echo $counter." : " .$upper_String."\n";

}

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
?>
