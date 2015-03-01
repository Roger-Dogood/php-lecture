<?php
namespace Foo;

class Die
{
    protected static $value;

    public function __construct()
    {
        self::roll();
    }

    public static function roll()
    {
        self::value = mt_rand(1, 6);
    }
}
