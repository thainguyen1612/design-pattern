<?php

namespace App\StrateryPattern\QuackBehavior\Services;

use App\StrateryPattern\QuackBehavior\QuackBehaviorInterface;

class Squeak implements QuackBehaviorInterface
{
    public function quack()
    {
        return "quoạc bằng cao su.";
    }
}
