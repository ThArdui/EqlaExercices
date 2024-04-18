<?php

/*
include "tarea.php";
Include "MobilePhone.php";
include "Iphone.php";
include "Android.php";
include "FootballField.php";*/
spl_autoload_register (
    function ($_class)
    {
        include $_class.".php";
    }
    );
$monIphone=new Iphone(15.2,5.3,15000,20,5,500,178);

$oldPhone=new MobilePhone(10,6,5000,500,100);
$monIphone->ShowBatteryPercentage();
function StartPhone(MobilePhone $_tel)
{
    $_tel->SetIsOn();
}




StartPhone($oldPhone);
StartPhone($monIphone);
echo $monIphone->GetArea();
unset($monIphone);
$stadeRoiBaudoin=new FootballField(50,200);
echo $stadeRoiBaudoin->GetArea();
/* ANCIENS CODES$monIphone->SetIsOn();
$monIphone->CallNumber("0478420935");
$monIphone->ShutDown();
echo "<br>". $monIphone->getMemory();



$$sandrirnePhone->Start();
$santaPhone=new MobilePhone(10.4,5.7,600,100,200);
$santaPhone->SetAutonomy(500);
$santaPhone->SetIsOn();
$santaPhone->ShowBatteryPercentage();
$santaPhone->SetBattery(-120);
$santaPhone->SetIsOn();
$santaPhone->ShowBatterjonnhyPhone=new MobilePhone();
$jonnhyPhone->battery=50;
$jonnhyPhone->Start();
$sandrirnePhone=new MobilePhone();
$sandrirnePhone->battery=0;

yPercentage();


echo "<br>Le téléphone a ".$santaPhone->GetBattery()." % de batterie";
echo "<br>Le téléphone a ".$santaPhone->GetBattery()." % de batterie";

$santaPhone->Start();
$santaPhone->CallNumber("0478420935");
$santaPhone->ShutDown();
*/
