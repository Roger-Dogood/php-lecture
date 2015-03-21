<?php
namespace Foo {

    require 'SingleDie.php';

    /**
     * This class allows us to make an object called Dice
     * that has the ability to hold as many SingleDie objects
     * as we tell it to.
     *
     * @property array() $dice Array of SingleDie objects.
     */
    class Dice
    {
        # The dice array that will hold all of our
        # SingleDie objects.
        private $dice = array();

        /**
         * When `new Dice()` is called, this will
         * construct as many SingleDie objects as
         * we tell it to.
         */
        public function __construct($capacity = 0)
        {
            if ((int)$capacity < 1) {
                $capacity = 1;
            }

            while ($capacity-- > 0) {
                $this->dice[] = new SingleDie();
            }
        }

        /**
         * An accessor (a.k.a: getter). Allows us to
         * return the value of any property this class
         * may have. Inefficient in comparision to
         * direct accessors.
         *
         * @param  string $property Name of the property in the class
         * @return varies           Value of the property
         */
        public function __get($property)
        {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        }

        /**
         * This is how we will display our Dice
         * object when called to print/echo.
         *
         * @return string
         */
        public function __toString()
        {
            $string =  '<div class="dice">' . PHP_EOL;
            foreach ($this->dice as $die) {
                $string .= $die;
            }
            return $string . PHP_EOL . '</div> <!-- /.dice -->';
        }

        /**
         * Accepts an integer used as the index
         * of the $dice array.
         *
         * @param  int  $index Index of array of Dice
         * @return int         Value of the SingleDie object.
         */
        public function getDie(int $index)
        {
            return $this->dice[$index]->value;
        }

        /**
         * Loops through the $dice array of SingleDie
         * objects adding them all up.
         *
         * @return int Sum of all SingleDie objects in $dice Array
         */
        public function diceSum()
        {
            $sum = 0;
            foreach ($this->dice as $die) {
                $sum += $die->value;
            }
            return $sum;
        }

        /**
         * Loops through the $dice array calling
         * the SingleDie roll() function on each
         * individual die.
         */
        public function roll()
        {
            foreach ($this->dice as $die) {
                $die->roll();
            }
        }
    }
}
