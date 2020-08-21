<?php


class CircleAdapter implements ICircle, Area
{
    private $circleAreaLib;
    public function __construct(CircleAreaLib $circleAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    function circleArea(float $circumference)
    {
        return $this->circleAreaLib->getCircleArea($circumference);
    }

    function area(int $diagonal)
    {
        return $this->circleArea($diagonal);
    }
}