<?php

class FootballField
{
    use TArea;
public float $widht, $height;

    /**
     * @param float $widht
     * @param float $height
     */
    public function __construct(float $widht, float $height)
    {
        $this->widht = $widht;
        $this->height = $height;
    }
}