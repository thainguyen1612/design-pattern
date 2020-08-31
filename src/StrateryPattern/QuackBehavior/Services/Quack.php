<?php

namespace App\StrateryPattern\QuackBehavior\Services;

use App\StrateryPattern\QuackBehavior\QuackBehaviorInterface;

class Quack implements QuackBehaviorInterface
{
    public function quack()
    {
        return "quoạc quoạc!";
    }
}
