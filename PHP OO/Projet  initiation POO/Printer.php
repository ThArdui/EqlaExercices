<?php

class Printer
{
private int $cartrigdeBlack ;
private int $cartrigeMagenta;
               // déclaration de mes propriétés
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
$this->SetPaperCapacity($_paperCapacity);
$this->SetPaperNumber($_paperNumber);
$this->SetPrinterBrand($_printerBrand);
$this->SetIsOn($_isOn);
//  le constructeur va faire que moon objet soit accessible depuis le main.php par exemple.  Je peux directement mettre le setter.
}

// les set vont permettre de définir les limites de mes pripriétés! une cartouche ne peut pas aavoir un niveau supérieur à 100 ou plus petitt que 100.
public function SetCardrigeBlack (int $_cartridgeBlack)//10000000000
{
    $this->cartrigdeBlack=$_cartridgeBlack; // je dois dire que mon paramètre est égal à mon cartridge sinon il sait pas savoir comboien il ya daqnsw la cartoduche
if ($this->cartrigdeBlack>100)
{
    $this->cartrigdeBlack=100;
}

elseif ($this->cartrigdeBlack<0)
{
    $this->cartrigdeBlack=0;
}

}

    public function SetCardrigeMagenta (int $_cartridgeMagenta)
    {
        $this->cartrigeMagenta=$_cartridgeMagenta;
        if ($this->cartrigeMagenta>100)
        {
            $this->cartrigeMagenta=100;
        }

        elseif ($this->cartrigeMagenta<0)
        {
            $this->cartrigeMagenta=0;
        }



    }

    public function SetCardrigeCyan (int $_cartridgeCyan)
    {
        $this->cartrigdeCyan=$_cartridgeCyan;
        if ($this->cartrigdeCyan>100)
        {
            $this->cartrigdeCyan=100;
        }

        elseif ($this->cartrigdeCyan<0)
        {
            $this->cartrigdeCyan=0;
        }

    }

    public function SetCardrigeYellow (int $_cartridgeYellow)
    {
        $this->cartridgeYellow=$_cartridgeYellow;
        if ($this->cartridgeYellow>100)
        {
            $this->cartridgeYellow=100;
        }

        elseif ($this->cartridgeYellow<0)
        {
            $this->cartridgeYellow=0;
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
if ($_paperCapacity<0)
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

    // les get vont servir à afficher les données
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

    public function Print ($_numberOfCopy)
    {
        if ($this->isOn)
        {
            for ($i=0;$i<$_numberOfCopy;$i++)
            {
                if ($this->paperNumber>=$_numberOfCopy&&$this->cartrigdeCyan>0&&$this->cartrigdeBlack>0&&$this->cartrigeMagenta>0&&$this->cartridgeYellow>0)
                {
                    echo "ASSEZ DE papier et assez d'ancre";
                    $this->paperNumber--;
                    $this->cartridgeYellow--;
                    $this->cartrigeMagenta--;
                    $this->cartrigdeBlack--;
                    $this->cartrigdeCyan--;
                    echo "impression de la feuille numéro ". $i+1;
                }
                if ( !($this->paperNumber>=$_numberOfCopy))
                {
                    echo"Pas assez de papier";
                    return;

                }
                if($this->cartrigdeCyan>0&&$this->cartrigdeBlack>0&&$this->cartrigeMagenta>0&&$this->cartridgeYellow>0){
                    echo "Il manque au moins un type d'ancre";
                    return;
                }
            }

        }
        else
        {
            echo "l'Imprimente est éteinte!";
        }

    }

public function Scan($_numberOfSheetsToScan)
{
if ($this->isOn)
{
    if ($_numberOfSheetsToScan>0)

    {

            echo "Vous avez scanné ".$_numberOfSheetsToScan."feuilles";


    }
    else
    {
        echo "Il y a aucune feuille dans le scanner";

    }
}
else
{
    echo "le scanner est éteint";

}
}

}

