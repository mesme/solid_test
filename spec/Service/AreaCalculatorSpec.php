<?php

namespace spec\CampusWonders\Service;

use CampusWonders\Service\AreaCalculator;
use CampusWonders\Shapes\Circle;
use CampusWonders\Shapes\ShapesCollection;
use CampusWonders\ValueObject\Radius;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AreaCalculatorSpec extends ObjectBehavior
{
    /**
     *
     */
    function let()
    {
        $shapesCollection = new ShapesCollection();
        $shapesCollection->add(new Circle(new Radius(10)));
        $shapesCollection->add(new Circle(new Radius(10)));
        $shapesCollection->add(new Circle(new Radius(10)));
        $shapesCollection->add(new Circle(new Radius(10)));
        $this->beConstructedWith($shapesCollection);
    }

    /**
     *
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(AreaCalculator::class);
    }

    /**
     *
     */
    function it_should_calculate_area_of_shapes_passed()
    {
        $this->calculate()->shouldBeEqualTo(1256.64);
    }
}
