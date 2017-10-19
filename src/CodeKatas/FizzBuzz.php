<?php

namespace CampusWonders\CodeKatas;

class FizzBuzz
{

    /**
     * @param $number
     * @return string
     */
    public function generate($number)
    {

        if (($number % 3 === 0) && ($number % 5 === 0)) {
            return 'fizzbuzz';
        }
        if ($number % 5 === 0) {
            return 'buzz';
        }

        if ($number % 3 === 0) {
            return 'fizz';
        }

        return $number;

    }
}
