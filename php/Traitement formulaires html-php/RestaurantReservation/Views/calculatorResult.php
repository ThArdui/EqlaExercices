

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title> Résultat Calculette</title>
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
    <h1> Résultat du calcul</h1>
    <?php

    if ($_SERVER["REQUEST_METHOD"]=="GET") {
        $number1 = floatval($_GET["number_1"]);
        $number2 = floatval($_GET["number_2"]);
        $operation = $_GET["operation"];

        switch ($operation)
        {

            case "Addition":
                $resultat=addition($number1,$number2);
                echo "Le résultat de votre opération est ".$resultat;
                break;

                case "Multiplication":
                    $resultat=multiplication($number1,$number2);
                    echo "<style> .result{ font-size: {$resultat}em; } </style>";
                    echo  "<p> Le résultat de votre opération est  <span class='result'> $resultat </span> </p> ";
                    break;

            case "Division":
                $resultat=Division($number1,$number2);
                echo "Le résultat de votre opération est ".$resultat;
                break;

            case "Soustraction":
                $resultat=soustraction($number1,$number2);
                echo "Le résultat de votre opération est ".$resultat;
                break;
        }

    }

    /*   if ($operation=="Addition")
       {
           $resultat=addition($number1,$number2);
           echo "Le résultat de votre addition est:".$resultat;
       }*/

    function addition (float $n1, float $n2):float
    {
        $res=$n1+$n2;
        return $res;
    }


    function soustraction (float $n1, float $n2):float
    {
        $res = $n1 - $n2;
        return $res;
    }

    function multiplication (float $n1, float $n2):float
    {
        $res=$n1*$n2;
        return $res;
    }


    function Division(float $n1, float $n2):float
    {
        if ($n2!=0)
        {
            return $res=$n1/$n2;
        }
        else
        {
            echo "Le diviseur est égal à 0. Veuillez entrer un chiffre suppérieur à 0"; return (0);
        }


    }


    ?>
</main>

<?php

include '../Includes/footer.php';

?>
</body>
</html>
<?php



?>