<?php

namespace CampusWonders\Service;

use CampusWonders\Shapes\ShapesCollection;

class AreaCalculator
{
    private $shapesCollection;

    public function __construct(ShapesCollection $shapesCollection)
    {
        $this->shapesCollection = $shapesCollection;
    }

    public function calculate()
    {
        $area = [];
        foreach ($this->shapesCollection->getAll() as $shape)
        {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}
