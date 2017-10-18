<?php

namespace spec\CampusWonders\Shapes;

use CampusWonders\Shapes\Circle;
use CampusWonders\ValueObject\Radius;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CircleSpec extends ObjectBehavior
{
    /**
     *
     */
    function let()
    {
        $this->beConstructedWith(new Radius(10));
    }

    /**
     *
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(Circle::class);
    }

    /**
     *
     */
    function it_should_calculate_area()
    {
        $this->area()->shouldEqual(314.16);
    }

}
