<?php

class personne
{
private string $firtname,$lastname,$sex,$count,$town,$address;
private int $age, $numberOfChilderen, $brothers, $sistes, $postalCode;
private DateTime$birthdate;
private bool $doSmoke, $doDrink, $doSex;

    public function getFirtname(): string
    {
        return $this->firtname;
    }

    public function setFirtname(string $firtname): void
    {
        $this->firtname = $firtname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    public function getCount(): string
    {
        return $this->count;
    }

    public function setCount(string $count): void
    {
        $this->count = $count;
    }

    public function getTown(): string
    {
        return $this->town;
    }

    public function setTown(string $town): void
    {
        $this->town = $town;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getNumberOfChilderen(): int
    {
        return $this->numberOfChilderen;
    }

    public function setNumberOfChilderen(int $numberOfChilderen): void
    {
        $this->numberOfChilderen = $numberOfChilderen;
    }

    public function getBrothers(): int
    {
        return $this->brothers;
    }

    public function setBrothers(int $brothers): void
    {
        $this->brothers = $brothers;
    }

    public function getSistes(): int
    {
        return $this->sistes;
    }

    public function setSistes(int $sistes): void
    {
        $this->sistes = $sistes;
    }

    public function getPostalCode(): int
    {
        return $this->postalCode;
    }

    public function setPostalCode(int $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    public function setBirthdate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function isDoSmoke(): bool
    {
        return $this->doSmoke;
    }

    public function setDoSmoke(bool $doSmoke): void
    {
        $this->doSmoke = $doSmoke;
    }

    public function isDoDrink(): bool
    {
        return $this->doDrink;
    }

    public function setDoDrink(bool $doDrink): void
    {
        $this->doDrink = $doDrink;
    }

    public function isDoSex(): bool
    {
        return $this->doSex;
    }

    public function setDoSex(bool $doSex): void
    {
        $this->doSex = $doSex;
    }

    /**
     * @param string $firtname
     * @param string $lastname
     * @param string $sex
     * @param string $count
     * @param string $town
     * @param string $address
     * @param int $age
     * @param int $numberOfChilderen
     * @param int $brothers
     * @param int $sistes
     * @param int $postalCode
     * @param DateTime $birthdate
     * @param bool $doSmoke
     * @param bool $doDrink
     * @param bool $doSex
     */
    public function __construct(string $firtname, string $lastname, string $sex, string $count, string $town, string $address, int $age, int $numberOfChilderen, int $brothers, int $sistes, int $postalCode, DateTime $birthdate, bool $doSmoke, bool $doDrink, bool $doSex)
    {
        $this->firtname = $firtname;
        $this->lastname = $lastname;
        $this->sex = $sex;
        $this->count = $count;
        $this->town = $town;
        $this->address = $address;
        $this->age = $age;
        $this->numberOfChilderen = $numberOfChilderen;
        $this->brothers = $brothers;
        $this->sistes = $sistes;
        $this->postalCode = $postalCode;
        $this->birthdate = $birthdate;
        $this->doSmoke = $doSmoke;
        $this->doDrink = $doDrink;
        $this->doSex = $doSex;
    }

}