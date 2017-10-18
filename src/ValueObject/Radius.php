<?php
/**
 * Created by PhpStorm.
 * User: vidya
 * Date: 17/10/2017
 * Time: 10:27
 */

namespace CampusWonders\ValueObject;


class Radius
{
    private $value;

    /**
     * Radius constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

}