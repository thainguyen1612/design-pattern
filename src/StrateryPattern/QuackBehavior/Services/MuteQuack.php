<?php

namespace App\StrateryPattern\QuackBehavior\Services;

use App\StrateryPattern\QuackBehavior\QuackBehaviorInterface;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack()
    {
        return "Không kêu.";
    }
}
