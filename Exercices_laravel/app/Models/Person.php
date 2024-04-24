<?php

namespace App\Models;
class Person
{
    public string $Firstname;
    public string $Name;
    public int $Age;

    public function __construct(string $Firstname, string $Name, int $Age)
    {
        $this->Firstname = $Firstname;
        $this->Name = $Name;
        $this->Age = $Age;
    }
}

?>
