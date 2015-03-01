<?php
namespace Foo;

class Dice
{
    // const CAPACITY = 5;
    private $dice = array();

    public function __construct()
    {
        for ($i=0; $i < 5; $i++)
        {
            $dice[] = new Die();
        }
    }

    public function roll()
    {
        foreach ($dice as $die)
        {
            $die->roll();
        }
    }
}
