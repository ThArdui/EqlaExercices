<?php

class Bubble
{
    private int $size ;

    public function __construct(int $size)
    {
        $this->size=$size;

    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function Eclat()
    {
echo "J'éclate";

    }
