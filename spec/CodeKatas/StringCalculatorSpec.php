<?php

namespace spec\CampusWonders\CodeKatas;

use CampusWonders\CodeKatas\StringCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(StringCalculator::class);
    }

    /**
     *
     */
    function it_translates_an_empty_string_into_zero()
    {
        $this->add('')->shouldEqual(0);
    }

    /**
     *
     */
    function it_finds_the_sum_of_one_number()
    {
        $this->add('5')->shouldEqual(5);
    }

    /**
     *
     */
    function it_finds_the_sum_of_two_numbers()
    {
        $this->add('1,2')->shouldEqual(3);
    }

    /**
     *
     */
    function it_finds_the_sum_of_any_numbers()
    {
        $this->add('1,2,3,4,5')->shouldEqual(15);
    }

    /**
     *
     */
    function it_disallows_negative_numbers()
    {
        $this->shouldThrow('InvalidArgumentException')->during('add', ['3,-2']);
    }

    /**
     *
     */
    function it_ignores_any_number_greater_than_or_equal_to_1000()
    {
        $this->add('2,2,1000')->shouldEqual(4);
    }

    /**
     *
     */
    function it_allows_new_line_feed_or_comma_as_delimiters()
    {
        $this->add('1,2\n3')->shouldEqual(6);
    }
}
