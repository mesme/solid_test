<?php

namespace CampusWonders\CodeKatas;

class PrimeFactors
{
    /**
     * @param $number
     * @return array
     */
    public function generate($number)
    {
        $primes = [];
        $candidate = 2;

        while($number > 1)
        {
            while($number % $candidate == 0)
            {
                $primes[] = $candidate;

                $number = $number / $candidate;
            }

            $candidate++;
        }
        return $primes;
    }
}
