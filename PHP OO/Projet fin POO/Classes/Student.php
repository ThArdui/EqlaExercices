<?php

namespace Classdata;

class Student
{
private string $name,$firstname;
private float $score;

    /**
     * @param string $name
     * @param string $firstname
     * @param float $score
     */
    public function __construct(string $name, string $firstname, float $score)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->score = $score;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getScore(): float
    {
        return $this->score;
    }

    public function setScore(float $score): void
    {
        $this->score = $score;
    }
}