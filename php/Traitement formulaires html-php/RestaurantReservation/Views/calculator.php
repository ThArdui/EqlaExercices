<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title> Calculatrice - Aux saveurs de chez Thom </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Style/base.css">


</head>
<body>

<?php
include '../Includes/header.php';
include '../Includes/navbar.php';
?>
<main>
    <h1> La super calculatrice</h1>
    <form  method="get" action="calculatorResult.php">

        <p>
            <label for="number_1"> Entrez un premier nombre?</label>
            <input id="number_1" name="number_1" type="text"   required>
        </p>
        <p>
            <label for="number_2"> Entrez un deuxime nombre?</label>
            <input id="number_2" name="number_2" type="text"  required>
        </p>

        <p>
            <label for="operation"> Sélectionnez l'opération mathématique que vous souhaitez effectuer?</label>
            <select name="operation" id="operation">
                <option> Addition</option>
                <option>Soustraction</option>
                <option> Multiplication</option>
                <option>Division </option>
            </select>

        </p>
        <input type="submit" value="Donnez-moi le résultat!">
    </form>
</main>

<?php

include '../Includes/footer.php';

?>
</body>
</html>