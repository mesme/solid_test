<?php

namespace CampusWonders\Shapes;



use CampusWonders\Contract\Shape;
use CampusWonders\ValueObject\Radius;

class Circle implements Shape
{
    private $radius;

    public function __construct(Radius $radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return round($this->radius->getValue() * $this->radius->getValue() * pi(), 2);
    }

}
