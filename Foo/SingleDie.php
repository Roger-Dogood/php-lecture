<?php
namespace Foo {

    /**
     * A single die
     *
     * @property int $value Value of the current side of the die.
     * @property mt_rand $numGenerator Random number generator used to simulate dice rolls.
     */
    class SingleDie
    {
        # Numerical value of SingleDie
        private $value;
        # Variable to hold our mt_rand() separately
        # from the $value. This prevents the numbers
        # From being the same each roll for multiple Dice.
        private static $numGenerator;

        /**
         * Constructs the SingleDie object with
         * the default values we want.
         */
        public function __construct()
        {
            self::$numGenerator = mt_rand(1, 6);
            $this->roll();
        }

        /**
         * Allows us to retrieve the $value of a SingleDie
         * object while keeping the $value from being
         * changed from outside class.
         */
        public function __get($property)
        {
            if ($property != 'numGenerator' && property_exists($this, $property)) {
                return $this->$property;
            }

        }

        /**
         * How we want to display our SingleDie object
         * when a print/echo is called on it.
         */
        public function __toString()
        {
            return strval($this->value);
        }

        /**
         * Every Die needs to be able to roll. This
         * allows us to roll each die individually.
         */
        protected function roll()
        {
            $this->value = self::$numGenerator;
        }
    }
}
