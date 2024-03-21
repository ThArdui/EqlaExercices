<?php
$lastName=htmlspecialchars($_POST['pnom']);

$firstName=htmlspecialchars($_POST['nom']);
$email=filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL);
$phone=filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);




$bithdate= $_POST['dnaissance'];
$deliveryMode=htmlspecialchars($_POST['livraison']);
$deliveryAdddres=htmlspecialchars($_POST['adlivraison']) ;
$starterMeal=htmlspecialchars($_POST['entree']);
$mainMeal=htmlspecialchars($_POST['plat']);
$dessert=htmlspecialchars($_POST['dessert']);
$occasion=htmlspecialchars($_POST['occasion']);
$clientProfiles= ($_POST['profil']);
if(count($clientProfiles)==0)
{
    echo "vous n'avez pas séléctionné de profil particulier";
}
else{
    for ($i=0;$i<count($clientProfiles);$i++)
    {
        $clientProfiles[$i]=htmlspecialchars($clientProfiles[$i]);
    }
}


$reservationHour=$_POST['hourreservation'];
$paymentMethod=htmlspecialchars($_POST['payement']);
if (empty($firstName))
{
    echo "Vous devez remplir votre nom de faamille";
}
else
{
echo " ";

}

if (empty($lastName))
{
    echo "Vous devez remplir votre prénom";
}
else
{
    echo " ";

}
if (empty($email))
{
    echo "Vous devez remplir votre e-mail";
}
else
{
    echo " ";

}
if (empty($phone))
{
    echo "Vous devez remplir votre numéro de téléphone";
}
else
{
    echo " ";

}

if(empty($_POST['dnaissance']))
{
  $_POST['dnaissance'] = null;
    echo "Veuillez rentrez une date de naissance";
}
else {
    $_POST['dnaissance'] = DateTime::createFromFormat('d/m/y', $_POST['dnaissance']);
    if ($_POST['dnaissance'] === false) {
        echo "Date invalide";
    }
}

/*if (empty($bithdate))

{
    echo "Vous devez remplir votre date de naissance";
}
else
{
    echo " ";

}*/
if (empty($deliveryMode))
    {
        echo "Vous devez remplir le mode de livraison";
    }
    else
    {
        echo " ";

    }

    if (empty($deliveryAdddres))

        {
            echo "Vous devez remplir l'adresse de livraison";
        }
    else
        {
            echo " ";

        }
    if (empty($starterMeal))

        {
            echo " ";
        }
    else
        {
            echo "";

        }

    if (empty($mainMeal))
    {
        echo "Vous devez choisir un plat principal";
    }
    else
    {
        echo " ";

    }
if (empty($dessert))
{
    echo "Vous devez choisir un dessert";
}
else
{
    echo "";

}
if (empty($occasion))
{
    echo "Vous devez choisir une occasion";
}
else
{
    echo "";

}

if (empty($clientProfile))
{
    echo "Vous devez choisir un profil client";
}
else
{
    echo "";

}
  if (empty($reservationHour))
    {
        echo "Vous devez choisir une heure de réservation";
    }
    else
    {

        if (strtotime($_POST['hourreservation'])!==false)
        {
            echo "";
        }

        else
        {
            echo "Heure invalide!";
        }

    }

if ( empty($paymentMethod))
{
    echo "Vous devez choisir un moyen de payement!";
}
else
{
    echo "";

}

$subject="Merci pour votre réservation";
$message="Bonjour ".$lastName." ".$firstName.",\n"."Nous vous accusons bonne réception de votre réservation.\n Nous revenons vers vous dans les plus brefs délais avec plus d'informations.\n L'équipe Aux saveurs de chez Thom";

mail($email,$subject,$message,"From: name@adress.domain");

/*
 // Exemple de nettoyage d'une chaîne de caractères
$nom = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);


  */
