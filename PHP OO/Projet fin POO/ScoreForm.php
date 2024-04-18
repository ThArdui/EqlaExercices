<?php

$studentNbr=$_POST['studentnbr'];
$maxScore=$_POST['maxscore'];
echo "Nombre étudiants:".$studentNbr."la note maximal est égal à ".$maxScore;

?>

<br>

<form action="Result.php" method="post">
    <?php

    for ($i=0 ; $i<$studentNbr; $i++)
    {
      echo '<label for="studentscore'.($i+1).'"> Entrez la note de l\'élève numéro '.($i+1).'? </label> 
    <input type="text" id="studentscore'.($i+1).'" name="studentscore'.($i+1).'">
    <label for="studentname'.($i+1).'"> Entrez le prénom de l\'élève numéro '.($i+1).'?</label>
    <input type="text" id="studentname'.($i+1).'" name="studentname'.($i+1).'"><br>' ;
    }



    ?>


    <input type="submit" value="Envoyer!">

</form>
<?php
session_start();
$_SESSION['studentNbr']= $studentNbr;