<?php
include 'Classes\Room.php';
include 'Classes\Student.php';
$blincode=new \Classdata\Room();
session_start();
$studentNbr=$_SESSION['studentNbr'];

for ($i=1; $i<=$studentNbr; $i++)
{

    $_student=new Classdata\Student($_POST['studentname'.$i],"",$_POST['studentscore'.$i]);
    $blincode->AddStudent($_student);



}
$blincode->setAverage();
echo "La moyenne de la classe est de ".$blincode->getAverage();