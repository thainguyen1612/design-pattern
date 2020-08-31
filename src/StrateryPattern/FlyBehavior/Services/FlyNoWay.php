<?php

namespace App\StrateryPattern\FlyBehavior\Services;

use App\StrateryPattern\FlyBehavior\FlyBehaviorInterface;

class  FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
       return 'Không biết bay.';
    }
}
