<?php

namespace spec\CampusWonders\CodeKatas;

use CampusWonders\CodeKatas\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }

    /**
     *
     */
    function it_should_return_1_for_1()
    {
        $this->generate(1)->shouldReturn(1);
    }

    /**
     *
     */
    function it_should_return_2_for_2()
    {
        $this->generate(2)->shouldReturn(2);
    }

    /**
     *
     */
    function it_should_return_fizz_for_3()
    {
        $this->generate(3)->shouldReturn('fizz');
    }

    /**
     *
     */
    function it_should_return_4_for_4()
    {
        $this->generate(4)->shouldReturn(4);
    }

    /**
     *
     */
    function it_should_return_buzz_for_5()
    {
        $this->generate(5)->shouldReturn('buzz');
    }

    /**
     *
     */
    function it_should_return_fizz_for_6()
    {
        $this->generate(6)->shouldReturn('fizz');
    }

    /**
     *
     */
    function it_should_return_7_for_7()
    {
        $this->generate(7)->shouldReturn(7);
    }

    /**
     *
     */
    function it_should_return_8_for_8()
    {
        $this->generate(8)->shouldReturn(8);
    }

    /**
     *
     */
    function it_should_return_fizz_for_9()
    {
        $this->generate(9)->shouldReturn('fizz');
    }

    /**
     *
     */
    function it_should_return_buzz_for_10()
    {
        $this->generate(10)->shouldReturn('buzz');
    }

    /**
     *
     */
    function it_should_return_11_for_11()
    {
        $this->generate(11)->shouldReturn(11);
    }

    /**
     *
     */
    function it_should_return_fizz_for_12()
    {
        $this->generate(12)->shouldReturn('fizz');
    }

    /**
     *
     */
    function it_should_return_13_for_13()
    {
        $this->generate(13)->shouldReturn(13);
    }

    /**
     *
     */
    function it_should_return_14_for_14()
    {
        $this->generate(14)->shouldReturn(14);
    }

    /**
     *
     */
    function it_should_return_fizzbuzz_for_15()
    {
        $this->generate(15)->shouldReturn('fizzbuzz');
    }
}
