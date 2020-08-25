<?php
spl_autoload_register(function ($class){
    include $class.'.php';
});

function AreaAdapter (int $diagonal)
{
    $square = new SquareAdapter(new SquareAreaLib());
    echo $square->area($diagonal).PHP_EOL;

    $circle = new CircleAdapter(new CircleAreaLib());
    echo $circle->area($diagonal).PHP_EOL;
}

AreaAdapter(35);