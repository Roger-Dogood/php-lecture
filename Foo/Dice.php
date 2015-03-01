<?php
require 'SingleDie.php';

class Dice
{
    # A constant to hold how many Dice we want.
    const CAPACITY = 6;
    # The dice array that will hold all of our
    # SingleDie objects.
    private $dice = array();

    /**
     * When `new Dice()` is called, this will
     * construct as many SingleDie objects as
     * we set our CAPACITY for.
     */
    public function __construct()
    {
        for ($i = 0; $i < self::CAPACITY; $i++)
        {
            $this->dice[] = new SingleDie();
        }
    }

    /**
     * Returns the $dice array
     */
    public function getDice()
    {
        return $this->dice;
    }

    /**
     * returns the value of the SingleDie object.
     */
    public function getDie(int $index)
    {
        return $this->dice[$index]->getValue();
    }

    /**
     * Loops through the $dice array calling
     * the SingleDie roll() function on each
     * individual die.
     */
    public function roll()
    {
        foreach ($this->dice as $die)
        {
            $die->roll();
        }
    }
}
