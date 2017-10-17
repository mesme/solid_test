<?php

namespace spec\CampusWonders\Shapes;

use CampusWonders\Shapes\ShapesCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ShapesCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ShapesCollection::class);
    }

    function it_should_add_an_shape_to_the_collection($shape)
    {
        $this->add($shape);
    }

    function it_should_return_all_shapes()
    {
        $this->getAll();
    }
}
