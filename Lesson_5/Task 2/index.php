<?php

function AreaAdapter (int $diagonal)
{
    $square = new SquareAdapter(new SquareAreaLib());
    echo $square->area($diagonal);

    $circle = new CircleAdapter(new CircleAreaLib());
    echo $circle->area($diagonal);
}

AreaAdapter(35);