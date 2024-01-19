<?php
$counter=0;
echo "Bienvenue dans notre programme\n Entrez une phrase? \n Je vais vous la transformer en minuscule et majuscule ! " ;
$userEntry=trim(fgets(STDIN));
echo $userEntry."\n";
StringtUpperCase($userEntry, );
StringtUpperCase(  "Chien");
// variables 1ère lettre de chaque mot maj mais pas toute première- fonctions tout es premières lettres maj.
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
?>