<?php

namespace CampusWonders\Shapes;

class ShapesCollection
{
    private $shapes = [];

    public function add($shape)
    {
        $this->shapes[] = $shape;
    }

    public function getAll()
    {
        return $this->shapes;
    }


}
