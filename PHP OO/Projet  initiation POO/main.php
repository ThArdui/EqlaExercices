    <?php

    include "Printer.php";
    $thommyPrinter=new Printer(50,50,11,10,50,200,"Brother",true);
    echo $thommyPrinter->GetPrinterBrand();
    $thommyPrinter->Scan(3);

/*include "MobilePhone.php";
/*$jonnhyPhone=new MobilePhone();
$jonnhyPhone->battery=50;
$jonnhyPhone->Start();
$sandrirnePhone=new MobilePhone();
$sandrirnePhone->battery=0;

$sandrirnePhone->Start();

$santaPhone=new MobilePhone(10.4,5.7,600,100,200);
$santaPhone->SetAutonomy(500);
$santaPhone->SetIsOn();
$santaPhone->ShowBatteryPercentage();
$santaPhone->SetBattery(-120);
$santaPhone->SetIsOn();
$santaPhone->ShowBatteryPercentage();


/*echo "<br>Le téléphone a ".$santaPhone->GetBattery()." % de batterie";
echo "<br>Le téléphone a ".$santaPhone->GetBattery()." % de batterie";*/
/*
$santaPhone->Start();
$santaPhone->CallNumber("0478420935");
$santaPhone->ShutDown();*/

