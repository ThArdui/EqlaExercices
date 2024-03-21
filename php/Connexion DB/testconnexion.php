<?php
$dbName="Php_login_exo";
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
$name=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM login_password WHERE username = :username";
$statement=$bdd->prepare($query);
$statement->bindParam(":username",$name);
$statement->execute();
$userData=$statement->fetch(PDO::FETCH_ASSOC);
if ($userData)
{
    if ($password==$userData['password'])
    {
        echo "Connexion au site web réussie!";
    }
    else
    {
        echo "Le nom d'utilisateur et le mot de passe ne correspondent pas!!";
    }
}
else
{
    echo "Créer un compte! ";

    $requete=$bdd->prepare("insert into login_password(username, password) values (:username, :password)");
    $requete->bindParam(":username",$name);
    $requete->bindParam(":password", $password);

    $requete->execute();
}
?>