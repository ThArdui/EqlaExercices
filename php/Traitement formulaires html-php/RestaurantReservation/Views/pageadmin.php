

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title> Intranet "Aux saveurs de chez Thom "</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Style/base.css">

    <style>
        body
        {
            background-color: orangered !important;
        }
    </style>
</head>
<body>


<main>
    <h1>  Page administrateurs </h1>

    <h2> inscription utilisateur </h2>

    <form method="post" action="traitementSubscribeUser.php">
    <p>
        <label for="nom"> Nom: </label>
        <input type="text" name="namesub" id="nom" required>
    </p>
        <p>0
            <label for="pnom"> Prénom: </label>
            <input type="text" name="fnamesub" id="pnom" required>
        </p>
        <p>
            <label for="mail"> E-mail : </label>
            <input type="email" name="mailsub" id="mail" required>
        </p>
        <p>
            <label for="mpasse">Mot de passe </label>
            <input type="password" name="passwordsub" id="mpasse" required>
        </p>

<input type="submit" value="Inscription">

    </form>

    <h2> connexion utilisateur </h2>

    <form method="post" action="traitementConnexUser.php">
        <p>
            <label for="mailconex"> E-mail</label>
            <input type="email" name="connexionmail" id="mailconex" required>
        </p>
        <p>
            <label for="mpasseconnexion"> Mot de passe: </label>
            <input type="password" name="connexionpassword" id="mpasseconnexion" required>
        </p>


        <input type="submit" value="Connexion">

    </form>
    <?php



    ?>
</main>

<?php

include '../Includes/footer.php';

?>
</body>
</html>
<?php



?>