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
    <link rel="stylesheet" href="../Style/form.css">


</head>

<body>
<?php
include '../Includes/header.php';
include '../Includes/navbar.php';
?>
<main id="main">
    <h1> Réservez votre table </h1>
    <p aria-hidden="true"> Les champs marqués par un * sont obligatoires. </p>
    <form method="post" action=ValidateReservationForm.php>
        <div>
            <fieldset>

                <legend> Vos cordonnées </legend>
                <p>
                    <label for="lname">Nom  <span aria-hidden="true">*</span>:</label>
                    <input type="text" name="nom" id="lname"  autocomplete="family-name" required>
                </p>
                <p>
                    <label for="fname">Prénom <span aria-hidden="true">*</span>:</label>
                    <input type="text" name="pnom" id="fname"  autocomplete="given-name" required>
                </p>
                <p>
                    <label for="mail">E-mail (exemple: john.lenon@mail.com) <span aria-hidden="true">*</span> :</label>
                    <input type="text" name="mail" id="mail"  autocomplete="email" required>
                </p>
                <p>
                    <label for="tel">Téléphone <span aria-hidden="true">*</span></label>
                    <input type="tel" name="phone" id="tel" autocomplete="tel" required>
                </p>
                <p>
                    <label for="birthd">Date de naissance <span aria-hidden="true">*</span></label>
                    <input type="date" name="dnaissance" id="birthd" autocomplete="bday" >
                </p>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend> Livraison</legend>


                <p>
                    <label for="deliverymode"> Mode de livraison<span aria-hidden="true">*</span></label>
                    <select id="deliverymode" name="livraison" required>
                        <option> Selectionnez le mode de livraison</option>
                        <option> Sur place</option>
                        <option> A emporter</option>

                    </select>
                </p>

                <p>
                    <label for="adelivery"> Adresse de livraison (si c'est le cas) :</label>
                    <input type="text" name="adlivraison" id="adelivery">
                </p>
            </fieldset>
        </div>

        <div>
            <fieldset>
                <legend> Votre menu</legend>
                <p>
                    <label for="entreech"> Choix entrées<span aria-hidden="true">*</span>: </label>
                    <select id="entreech" name="entree" required>
                        <option selected> Veuillez sélectinner l'entrée</option>
                        <option> Tomates crevettes</option>
                        <option>Duo de croquettes</option>
                        <option>Coquille Saint Jacques </option>
                    </select>
                </p>
                <p>
                    <label for="platch"> Choix plat principal<span aria-hidden="true">*</span> : </label>
                    <select id="platch" name="plat" required>
                        <option selected> Veuillez sélectinner le plat principal </option>
                        <option>Boulets liégeois</option>
                        <option> Lasange du chef</option>
                    </select>
                </p>
                <p>
                    <label for="dessertch"> Choix déssert<span aria-hidden="true">*</span>: </label>
                    <select id="dessertch" name="dessert" required>
                        <option selected> Veuillez sélectinner le déssert</option>
                        <option>Dame blanche</option>
                        <option> Coupe brésilienne</option>
                        <option>Mousse au chocolat de la maison</option>
                    </select>
                </p>


            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend> Occasion </legend>
                <p>
                    <input type="radio" name="occasion" id="anniv" value="anniversaire">
                    <label for="anniv">Anniversaire</label>
                    <input type="radio" name="occasion" id="newy" value="nouvelan">
                    <label for="newy"> Nouvel an</label>
                    <input type="radio" name="occasion" id="stval" value="stvalentin">
                    <label for="stval"> Saint Valentin </label>
                </p>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend> Profil client</legend>
                <p>
                    <input type="checkbox" name="profil[]" value="seul" id="solo"> <label for="solo"> Seul</label>
                    <input type="checkbox" name="profil[]" value="pmr" id="pmr"> <label for="pmr">PMR</label>
                    <input type="checkbox" name="profil[]" value="enfant" id="inf"> <label for="inf">Enfant </label>
                </p>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend> Réservation </legend>
                <p>
                    <label for="hrsv"> Heure de réservation <span aria-hidden="true">*</span> :</label>
                    <input type="time" id="hrsv" name="hourreservation">
                </p>
                <p>
                    <label for="pay"> Méthode de payement <span aria-hidden="true">*</span></label>
                    <select id="pay" required name="payement">
                        <option>Veuillez sélectionner une méthode de payement</option>
                        <option>Bancontact/carte de crédit</option>
                        <option>Cash</option>
                    </select>

                </p>
            </fieldset>
        </div>

        <div>
            <p>
                <input type="submit" value="Réserver">
                <input type="reset" value="Annuler">
            </p>
        </div>

    </form>
    <?php

    include '../Includes/footer.php';

    ?>
</main>

