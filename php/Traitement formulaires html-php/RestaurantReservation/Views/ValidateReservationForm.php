
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Réservez votre table chez Aux saveurs de chez Thom">
    <title>Réservez votre table - Aux saveurs de chez Thom</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Style/base.css">
</head>






<?php
include '../Includes/header.php';
header('Content-Type: text/html; charset=UTF-8');

echo " <h1> Confirmation de réservataion</h1>";
$lastName = $_POST['pnom'];
if (empty($lastName)) {
    echo "Vous devez remplir votre prénom";
} else {
    $lastName = htmlspecialchars($lastName);
}

$firstName = $_POST['nom'];
if (empty($firstName)) {
    echo "Vous devez remplir votre nom de famille";
} else {
    $firstName = htmlspecialchars($firstName);
}

$email = $_POST['mail'];
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Vous devez remplir votre e-mail";
} else {
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
}

$phone = $_POST['phone'];
if (empty($phone)) {
    echo "Vous devez remplir votre numéro de téléphone";
} else {
    $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
}


$bithdate = $_POST['dnaissance'];
$formattedBirthdate="";
if (empty($bithdate)) {
    echo "Veuillez rentrez une date de naissance";
} else {
    $bithdate = DateTime::createFromFormat('Y-m-d', $bithdate);
    if ($bithdate === false) {
        echo " ";
    }
    else
    {
        $formattedBirthdate = $bithdate->format('Y-m-d');

    }
}
$deliveryMode = $_POST['livraison'];
if (empty($deliveryMode)) {
    echo "Vous devez remplir le mode de livraison";
} else {
    $deliveryMode = htmlspecialchars($deliveryMode);
}

$deliveryAdddres = $_POST['adlivraison'];
if (empty($deliveryAdddres)) {
    echo "Vous devez remplir l'adresse de livraison";
} else {
    $deliveryAdddres = htmlspecialchars($deliveryAdddres);
}

$starterMeal = htmlspecialchars($_POST['entree']);

$mainMeal = $_POST['plat'];
if (empty($mainMeal)) {
    echo "Vous devez choisir un plat principal";
} else {
    $mainMeal = htmlspecialchars($mainMeal);
}

$dessert = $_POST['dessert'];
if (empty($dessert)) {
    echo "Vous devez choisir un dessert";
} else {
    $dessert = htmlspecialchars($dessert);
}

$occasion = $_POST['occasion'];
if (empty($occasion)) {
    echo "Vous devez choisir une occasion";
} else {
    $occasion = htmlspecialchars($occasion);
}

$clientProfiles = ($_POST['profil']);
if (empty($clientProfiles))
{
    echo "";
}
else
{
    if(count($clientProfiles)==0)
    {
        echo "";
    }
    else
    {
        for ($i=0;$i<count($clientProfiles);$i++)
        {
            $clientProfiles[$i]=htmlspecialchars($clientProfiles[$i]);
        }

    }
    $clientProfilesToString=implode(",",$clientProfiles);


}
$reservationHour = $_POST['hourreservation'];
if (empty($reservationHour)) {
    echo "Vous devez choisir une heure de réservation";
} else {
    if (strtotime($reservationHour) !== false) {
        // Traitement supplémentaire si nécessaire
    } else {
        echo "Heure invalide!";
    }
}

$paymentMethod = $_POST['payement'];
if (empty($paymentMethod)) {
    echo "Vous devez choisir un moyen de paiement!";
} else {
    $paymentMethod = htmlspecialchars($paymentMethod);
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


$query = "INSERT INTO bookings (nom, prenom, email, date_naissance, mode_livraison, adresse_livraison, entree, plat, dessert, occassion, profil_client, heure_reservation, methode_paiement) VALUES (:nom, :prenom, :email, :date_naissance, :mode_livraison, :adresse_livraison, :entree, :plat, :dessert, :occassion, :profil_client, :heure_reservation, :methode_paiement)";



$statement=$bdd->prepare($query);

$statement->bindParam(":nom",$firstName);
$statement->bindParam(":prenom",$lastName);
$statement->bindParam(":email",$email);
$statement->bindParam(":date_naissance",$formattedBirthdate);

$statement->bindParam(":mode_livraison",$deliveryMode);

$statement->bindParam(":adresse_livraison",$deliveryAdddres);
$statement->bindParam(":entree",$starterMeal);
$statement->bindParam(":plat",$mainMeal);
$statement->bindParam(":dessert",$dessert);
$statement->bindParam(":occassion",$occasion);
$statement->bindParam(":profil_client",$clientProfilesToString);
$statement->bindParam(":heure_reservation",$reservationHour);
$statement->bindParam(":methode_paiement",$paymentMethod);
$statement->execute();
$userData=$statement->fetch(PDO::FETCH_ASSOC);

$subject = "Merci pour votre réservation";
$message = "Bonjour " . $lastName . " " . $firstName . ",\n" . "Nous vous accusons bonne réception de votre réservation.\n Nous revenons vers vous dans les plus brefs délais avec plus d'informations.\n L'équipe Aux saveurs de chez Thom";
;
$wholeMessge="Bonjour " . $lastName . " " . $firstName . ",\n" . "Nous vous accusons bonne réception de votre réservation.\n Voici un récapitulatif de vos informations\n VOS CORDONNEES\nNom: ".$lastName."\n Prénom: ".$firstName."\n E-mail ".$email."\n Téléphone:".$phone." \n Date de Naissance: ".$formattedBirthdate."\n LIVRAISON \n Mode de Livraison: ".$deliveryMode."\n Adresse: ".$deliveryAdddres."\n VOTRE  MENU \n Choix entrée: ".$starterMeal."\n Choix plat principal :".$mainMeal."\n Choix déssert:".$dessert."\nOccasion: ".$occasion."\n PROFIL CLIENT :\n".$clientProfilesToString."\n RESERVATION \n Heure de réservation:".$reservationHour."\nMéthode de payement:".$paymentMethod;
mail($email, $subject, $wholeMessge, "From: name@adress.domain\r\nContent-Type: text/plain; charset=UTF-8");

echo "<p>Merci pour votre réservation </p>";
echo "<p> Voici un récapitulatif de vos informations : </p>";
echo "<h2> Vos cordonnées</h2>";
echo "<p>Votre nom:".$firstName."</p>";
 echo "<p> Votre prénom:".$lastName."</p>";
 echo "<p> Votre adresse e-mail:".$email."</p>";
 echo "<p>Votre numéro de téléphone:".$phone."</p>";
 echo "<p> Votre date de naissance:".$formattedBirthdate."</p>";
 echo "<h2> Livraison</h2>";
 echo "<p>Votre mode de livraison".$deliveryMode."</p>";
 echo "<p> Votre adresse de livraison".$deliveryAdddres."</p>";
 echo "<h2> Votre menu </h2>";
 echo "<p>Votre choix entrée: ".$starterMeal."</p>";
echo "<p> Votre choix plat principal : ".$mainMeal."</p>";
echo "<p> Votre choix déssert : ".$dessert."</p>";
echo "<h2> A quelle occasion venez-vous nous voir? </h2>";
echo $occasion;
echo "<h2> Votre profil client</h2>";
echo "<p> Vous êtes: ".$clientProfilesToString."</p>";
echo "<h2> Votre réservatiton </h2>";
echo "<p>Heure de réservation: ".$reservationHour."</p>";
echo "<p>Méthode de payement:".$paymentMethod."</p>";
include '../Includes/footer.php';