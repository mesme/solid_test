<?php

namespace spec\CampusWonders\CodeKatas;

use CampusWonders\CodeKatas\RomanNumerals;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumerals::class);
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_1()
    {
        $this->convert(1)->shouldReturn('I');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_3()
    {
        $this->convert(3)->shouldReturn('III');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_4()
    {
        $this->convert(4)->shouldReturn('IV');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_5()
    {
        $this->convert(5)->shouldReturn('V');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_6()
    {
        $this->convert(6)->shouldReturn('VI');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_7()
    {
        $this->convert(7)->shouldReturn('VII');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_8()
    {
        $this->convert(8)->shouldReturn('VIII');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_9()
    {
        $this->convert(9)->shouldReturn('IX');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_10()
    {
        $this->convert(10)->shouldReturn('X');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_11()
    {
        $this->convert(11)->shouldReturn('XI');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_15()
    {
        $this->convert(15)->shouldReturn('XV');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_20()
    {
        $this->convert(20)->shouldReturn('XX');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_30()
    {
        $this->convert(30)->shouldReturn('XXX');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_50()
    {
        $this->convert(50)->shouldReturn('L');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_100()
    {
        $this->convert(100)->shouldReturn('C');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_500()
    {
        $this->convert(500)->shouldReturn('D');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_1000()
    {
        $this->convert(1000)->shouldReturn('M');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_1007()
    {
        $this->convert(1007)->shouldReturn('MVII');
    }

    /**
     *
     */
    function it_calculates_the_roman_numerals_for_3210()
    {
        $this->convert(3210)->shouldReturn('MMMCCX');
    }
}
