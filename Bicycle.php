<?php

class Bicycle
{

    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private bool $hasLuggageRack;

    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * Get the value of nbWheels
     *
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * Get the value of currentSpeed
     *
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * Get the value of color
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Get the value of nbSeats
     *
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * Get the value of hasLuggageRack
     *
     * @return bool
     */
    public function getHasLuggageRack(): bool
    {
        return $this->hasLuggageRack;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}
