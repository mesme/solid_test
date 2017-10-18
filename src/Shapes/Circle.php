<?php

namespace CampusWonders\Shapes;



use CampusWonders\Contract\Shape;
use CampusWonders\ValueObject\Radius;

class Circle implements Shape
{
    private $radius;

    /**
     * Circle constructor.
     * @param Radius $radius
     */
    public function __construct(Radius $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function area()
    {
        return round($this->radius->getValue() * $this->radius->getValue() * pi(), 2);
    }

}
