<?php


class SquareAdapter implements ISquare, Area
{
    private $squareAreaLib;
    public function __construct(SquareAreaLib $squareAreaLib)
    {
        $this->squareAreaLib = $squareAreaLib;
    }

    function squareArea(float $sideSquare)
    {
        return $this->squareAreaLib->getSquareArea($sideSquare);
    }

    public function area(int $diagonal)
    {
        return $this->squareArea($diagonal);
    }
}