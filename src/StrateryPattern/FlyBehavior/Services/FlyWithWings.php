<?php

namespace App\StrateryPattern\FlyBehavior\Services;

use App\StrateryPattern\FlyBehavior\FlyBehaviorInterface;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        return 'Bay rất giỏi.';
    }
}
