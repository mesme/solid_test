<?php

namespace CampusWonders\Shapes;

class ShapesCollection
{
    private $shapes = [];

    /**
     * @param $shape
     */
    public function add($shape)
    {
        $this->shapes[] = $shape;
    }

    /**
     * @return array
     */
    public function getAll()
    {
        return $this->shapes;
    }
}
