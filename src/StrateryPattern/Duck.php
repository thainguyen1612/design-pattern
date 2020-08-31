<?php

namespace App\StrateryPattern;

use App\StrateryPattern\FlyBehavior\FlyBehaviorInterface;
use App\StrateryPattern\QuackBehavior\QuackBehaviorInterface;

class Duck
{
    private $flyBehavior;
    private $quackBehavior;

    public function __construct(FlyBehaviorInterface $flyBehavior, QuackBehaviorInterface $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }
}
