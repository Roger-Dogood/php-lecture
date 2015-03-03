<?php
namespace Foo {

    require 'SingleDie.php';

    class Dice
    {
        # The dice array that will hold all of our
        # SingleDie objects.
        private $dice = array();

        /**
         * When `new Dice()` is called, this will
         * construct as many SingleDie objects as
         * we set our CAPACITY for.
         */
        public function __construct($capacity = '')
        {
            if (empty($capacity)) {
                $capacity = 1;
            }

            while ($capacity-- > 0) {
                $this->dice[] = new SingleDie();
            }
        }

        /**
         * Returns the $dice array
         */
        public function __get($property)
        {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        }

        /**
         * returns the value of the SingleDie object.
         */
        public function getDie(int $index)
        {
            return $this->dice[$index];
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
