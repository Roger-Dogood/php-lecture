<?php
class SingleDie
{
    private $value;
    private static $num_generator;

    public function __construct()
    {
        self::$num_generator = mt_rand(1, 6);
        $this->roll();
    }

    public function __toString()
    {
        return strval($this->value);
    }

    public function getValue()
    {
        return $this->value;
    }

    protected function roll()
    {
        $this->value = self::$num_generator;
    }
}
