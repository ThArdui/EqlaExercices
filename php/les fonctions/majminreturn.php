<?php declare(strict_types=1);
$counter=0;
echo "Quelle est la capitale de la Belgique";
$userInput=trim(fgets(STDIN));
$userInput=StringLowerCase($userInput);
if ($userInput=="bruxelles")
{
    echo "Bravo! Tu es un champion!";

}
function StringtUpperCase (string $_strentry)
{
$upper_String="";
global $counter;
$counter++;
for ($i=0;$i<strlen($_strentry);$i++)
{
$_FirsChar=ord($_strentry[$i]);

if ($_FirsChar>=97 && $_FirsChar<=122)
{
$_FirsChar=$_FirsChar-32;
}
$_FirsChar=chr($_FirsChar);
$upper_String=$upper_String.$_FirsChar;
}
echo $counter." : " .$upper_String."\n";
}
function StringLowerCase(string $_strentry):string
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
return $upper_String;
}
?>
