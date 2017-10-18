<?php

//require 'vendor/autoload.php';

//$circle = new \CampusWonders\Shapes\Circle(new \CampusWonders\ValueObject\Radius(10));

function generate($number)
{
    $primes = [];
    for($candidate = 2; $number > 1; $candidate++)
    {
            echo "entering first loop candidate: ".$candidate.', number: '. $number;
            echo "\n";
            for(; $number % $candidate === 0; $number /= $candidate)
            {
                echo "entering 2nd loop candidate: ".$candidate.', number: '. $number;
                echo "\n";
                $primes[] = $candidate;
            }
    }
    return $primes;
}

print_r(generate(8));

$number = 1;
print_r($number++);
echo "\n";
print_r($number);
echo "\n";
