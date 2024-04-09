<?php

Class MobilePhone
{
    private float $height;
    private float $widht;
private int $autonomy;
private bool $isOn;
private int $chargingTime;
    private $battery;
public function __Construct(float $_height, float $_width, int $_autonomy, int $_battery, int $_chargingTime)
{
    $this->height=$_height;
    $this->widht=$_width;
    $this->autonomy=$_autonomy;

    if ($_battery>100)
    {
        $this->battery=100;
    }
    elseif ($_battery<0)
    {
        $this->battery=0;
    }
    else
    {
        $this->battery=$_battery;
    }
    $this->chargingTime=$_chargingTime;
    $this->isOn=false;
}
public function SetAutonomy(int $_autonomy)
{
    $this->autonomy=$_autonomy;
}
public function SetChargingTime(int $_chargingTime)
{
    $this->chargingTime=$_chargingTime;
}
public function SetIsOn()
{
    if ($this->isOn==true)
    {
        $this->ShutDown();
    }

    else
    {
        $this->Start();
    }
}

public function SetBattery(int $_batteryModifier)
{
    if ($this->battery+$_batteryModifier>100)
    {
        $this->battery=100;
    }

    elseif ($this->battery+$_batteryModifier<=0)
    {
        $this->battery=0;
        $this->ShutDown();
    }
    else{
        $this->battery+=$_batteryModifier;
    }
}

public function GetAutonomy():int
{
return $this->autonomy;
}

public function GetChargingTime():int
{
    return $this->chargingTime;
}

public function GetIsOn():bool
{
 return $this->isOn;
}

public function GetBattery ():int
{
    return $this->battery;
}

public function GetWidht():float
{
    return $this->widht;
}

public function GetHeight ():float
{
    return $this->height;
}
    public function ShowBatteryPercentage()
{
    echo "<br>Le téléphone a ".$this->GetBattery()." % de batterie";
    }

    public function CallNumber( string $number)
    {
        if ($this->isOn==true&&$this->battery>10)
        {
            echo "Vous appellez le ".$number;
            $this->battery-=10;
        }
        elseif ($this->battery<=10)
        {
            echo "Vous n'avez plus dee batterie  pour passer un appel";
        }
        else
        {
            echo "Votre téléphone est éteint";
        }
    }


public function Start()
{
    if ($this->battery>0&& $this->isOn==false)
    {
        $this->isOn=true;
        $this->battery--;
        echo "le téléphone s'allume!";
    }
    elseif  ($this->battery<=0)
    {
        echo "Le téléphone n'a plus de batterie!";
    }

    elseif ($this->isOn==true)
    {
        echo "le téléphone est déjà allumé";
    }
}

public function ShutDown()
{
    if ($this->isOn == true)
    {
        $this->isOn = false;
        echo "le téléphonne s'éteint";
    }
    else
    {
        echo "Le téléphone est déjà éteint";
    }
}

}


