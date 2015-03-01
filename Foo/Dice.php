<?php
require 'SingleDie.php';

class Dice
{
    const CAPACITY = 6;
    private $dice = array();

    public function __construct()
    {
        for ($i = 0; $i < self::CAPACITY; $i++)
        {
            $this->dice[] = new SingleDie();
        }
    }

    public function getDice()
    {
        return $this->dice;
    }

    public function getDie(int $index)
    {
        return $this->dice[$index]->getValue();
    }

    public function roll()
    {
        foreach ($this->dice as $die)
        {
            $die->roll();
        }
    }
}
