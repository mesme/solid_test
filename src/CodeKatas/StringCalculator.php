<?php

namespace CampusWonders\CodeKatas;

class StringCalculator
{

    /**
     * @param $numbers
     * @return int
     */
    public function add($numbers)
    {
        $numbers = explode(',', $numbers);

        $result = 0;

        foreach ($numbers as $number)
        {
            if($number == '') continue;

            if($number >= 1000) continue;

            if($number < 0) throw new \InvalidArgumentException('Invalid Number passed');

            $result = $result + $number;
        }

        return $result;
    }
}
