<?php

class Printer
{
private int $cartrigdeBlack ;
private int $cartrigeMagenta;

private int $cartrigdeCyan;
private int $cartridgeYellow;

private int $paperNumber;

private int $paperCapacity;
private string $printerBrand;

private bool $isOn;

public function __Construct (int $_cartrigdeBlack, int $_cartrigeMagenta, int $_cartrigdeCyan, int $_cartridgeYellow, int $_paperNumber, int $_paperCapacity, string $_printerBrand, bool $_isOn)
{



$this->SetCardrigeBlack($_cartrigdeBlack);
$this->SetCardrigeMagenta($_cartrigeMagenta);
$this->SetCardrigeCyan($_cartrigdeCyan);
$this->SetCardrigeYellow($_cartridgeYellow);
$this->SetPaperNumber($_paperNumber);
$this->SetPaperCapacity($_paperCapacity);
$this->SetPrinterBrand($_printerBrand);
$this->SetIsOn($_isOn);
}

public function SetCardrigeBlack (int $_cartridgeBlack)
{
if ($this->cartrigdeBlack>100)
{
    $this->cartrigdeBlack=100;
}

elseif ($this->cartrigdeBlack<0)
{
    $this->cartrigdeBlack=0;
}
else
{
    $this->cartrigdeBlack=$_cartridgeBlack;
}
}

    public function SetCardrigeMagenta (int $_cartridgeMagenta)
    {
        if ($this->cartrigeMagenta>100)
        {
            $this->cartrigeMagenta=100;
        }

        elseif ($this->cartrigeMagenta<0)
        {
            $this->cartrigeMagenta=0;
        }
        else
        {
            $this->cartrigeMagenta=$_cartridgeMagenta;
        }


    }

    public function SetCardrigeCyan (int $_cartridgeCyan)
    {
        if ($this->cartrigdeCyan>100)
        {
            $this->cartrigdeCyan=100;
        }

        elseif ($this->cartrigdeCyan<0)
        {
            $this->cartrigdeCyan=0;
        }
        else
        {
            $this->cartrigdeCyan=$_cartridgeCyan;
        }
    }

    public function SetCardrigeYellow (int $_cartridgeYellow)
    {
        if ($this->cartridgeYellow>100)
        {
            $this->cartridgeYellow=100;
        }

        elseif ($this->cartridgeYellow<0)
        {
            $this->cartridgeYellow=0;
        }
        else
        {
            $this->cartridgeYellow=$_cartridgeYellow;
        }
    }
public function SetPaperNumber(int $_paperNumber)
{
    if ($_paperNumber>$this->paperCapacity)
    {
        $this->paperNumber=$this->paperCapacity;
    }

    elseif ($_paperNumber<0)
    {
        $this->paperNumber=0;
    }
    else
    {
        $this->paperNumber=$_paperNumber;
    }

}

public function SetPaperCapacity( int $_paperCapacity)
{
if ($this->paperCapacity<0)
    {
        $this->paperCapacity=0;
    }
    else
    {
        $this->paperCapacity=$_paperCapacity;
    }
}
public function SetPrinterBrand (string $_printerBrand)
{
$this->printerBrand=$_printerBrand;
}

public function SetIsOn(bool $_isOn)
{
    if ($this->isOn=true)
    {
    // $this->; créer fonction  shutdown
    }
    else
    {
        // $this crér uene fonction start
    }
}
/*
 private int $cartrigdeBlack ;
private int $cartrigeMagenta;

private int $cartrigdeCyan;
private int $cartridgeYellow;

private int $paperNumber;

private int $paperCapacity;
private string $printerBrand;

private bool $isOn;
 */

    public function GetCartdrigeBlack():int
    {
return $this->cartrigdeBlack;
    }
    public function GetCartdrigeMagenta():int
    {
        return $this->cartrigeMagenta;
    }

    public function GetCartdrigeYellow():int
    {
        return $this->cartridgeYellow;
    }
    public function GetCartdrigeCyan():int
    {
        return $this->cartrigdeCyan;
    }

    public function GetPaperNumber ():int
    {
        return $this->paperNumber;
    }

    public function GetPaperCapacity ():int
    {
        return $this->paperCapacity;
    }
    public function GetPrinterBrand():string

    {
    return $this->printerBrand;
    }

    public function GetIsOn():bool
    {
        return $this->isOn;
    }

    public function Print ()
    {
 if ($this->isOn)
 {
if ($this->cartrigdeCyan&&$this->cartrigdeBlack&&$this->cartrigeMagenta&&$this->cartridgeYellow)
{
    echo"Assez d'enncre!";

}
elseif ($this->paperNumber<=$this->paperCapacity)
{
    echo "ASSEZ DE papier";
}
 }


    }
}

