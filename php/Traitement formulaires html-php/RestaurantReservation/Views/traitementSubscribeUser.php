<?php
$lastname=$_POST['namesub'];
if (empty($lastname))
{
    echo "Nom de famille! ";
}
else
{
    $lastname=htmlspecialchars($lastname);
}
$firstname=$_POST['fnamesub'];
if (empty($firstname))
{
    echo "prenom";
}
else
{
    $firstname=htmlspecialchars($firstname);
}
$mailSub=$_POST['mailsub'];
if (empty($mailSub))
{
    echo "mail";
}
else
{
    $mailSub=filter_var($mailSub,FILTER_VALIDATE_EMAIL);

}
$passwordSub=$_POST['passwordsub'];
if (empty($passwordSub))
{
    echo "mp!";

}
else
{
    $password=filter_var($passwordSub,FILTER_SANITIZE_NUMBER_INT);
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


$query="SELECT email FROM utilisateurs WHERE email = :email";


$statement=$bdd->prepare($query);

$statement->bindParam(":email",$mailSub);
$statement->execute();


if ($statement->fetch(PDO::FETCH_ASSOC)) {
    echo "Cet utilisateur existe déjà !";
}

else
{
    echo "Création d'un compte!";
    $subsccriptionQuery="INSERT INTO utilisateurs(nom, prenom, email, mot_de_passe) values(:nom, :prenom, :email, :mot_de_passe)";
    $statement=$bdd->prepare($subsccriptionQuery);
    $statement->bindParam(":nom",$lastname);
    $statement->bindParam(":prenom",$firstname);
    $statement->bindParam(":email",$mailSub);
    $statement->bindParam(":mot_de_passe",$passwordSub);
    $statement->execute();
    $userDataSub=$statement->fetch(PDO::FETCH_ASSOC);

}


