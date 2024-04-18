<?php

namespace Classdata;

class Room
{
private array $student;
private float $average;

    public function getStudent(): array
    {
        return $this->student;
    }

    public function setStudent(array $student): void
    {
        $this->student = $student;
    }

    public function getAverage(): float
    {
        return $this->average;
    }

    public function setAverage(): void
    {
   $_sum=0;
   $_studentNbr=count($this->student);
   for ($i=0; $i<$_studentNbr; $i++)
   {
       $_sum+=$this->student[$i]->getScore();
   }
$this->average=$_sum/$_studentNbr;
    }

    public function AddStudent(Student $_student)
    {
        $this->student[]=$_student;
    }
}