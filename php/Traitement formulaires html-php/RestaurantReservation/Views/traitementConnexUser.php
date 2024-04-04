<?php

$passwordConnexion=$_POST['connexionpassword'];
if (empty($passwordConnexion))
{
    echo "mp!";

}
else
{
    $passwordConnexion=filter_var($passwordConnexion,FILTER_SANITIZE_NUMBER_INT);
}

$mailConnexion=$_POST['connexionmail'];
if (empty($mailConnexion))
{
    echo "mail!";
}
else
{
    $mailConnexion=filter_var($mailConnexion,FILTER_VALIDATE_EMAIL);
}
$passwordConnexion=$_POST['connexionpassword'];
if (empty($passwordConnexion))
{
    echo "mp!!!";
}

else
{
    $passwordConnexion=htmlspecialchars($passwordConnexion);
}
$dbName="resaresto";
$dbUser="root";
$dbPassword="Tangodata!";
$dbHost="Localhost";

try {
    $bdd = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser , $dbPassword);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de données réussie";



} catch (PDOException $e) {
    exit("Erreur de connexion : " . $e->getMessage());
}


$query="SELECT mot_de_passe FROM utilisateurs WHERE mot_de_passe = :mot_de_passe";
$statement=$bdd->prepare($query);
$statement->bindParam(":mot_de_passe",$passwordConnexion);
$statement->execute();

if ($statement->fetch(PDO::FETCH_ASSOC)) {
    echo "Connexion à votre compte réussi !";
}
else
{
    echo "Le mot de passe est erronné ou le compte n''existe pas";
}

?>