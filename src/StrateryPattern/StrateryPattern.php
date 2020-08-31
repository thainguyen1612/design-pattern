<?php

namespace App\StrateryPattern;

use App\StrateryPattern\FlyBehavior\Services\FlyNoWay;
use App\StrateryPattern\FlyBehavior\Services\FlyWithWings;
use App\StrateryPattern\QuackBehavior\Services\MuteQuack;
use App\StrateryPattern\QuackBehavior\Services\Quack;
use App\StrateryPattern\QuackBehavior\Services\Squeak;

class StrateryPattern
{
    private $duck;

    public function setDuck(Duck $duck)
    {
        $this->duck = $duck;
    }

    public function display()
    {
        echo ('Trang thái bay: ' . $this->duck->performFly());
        echo '<Br />';
        echo 'Trạng thái kêu: ' . $this->duck->performQuack();
    }
}

if (isset($_POST['frequency_form'])) {
    $frequency = $_POST['frequency_form'];
    $duckStrateryPattern = new StrateryPattern();

    switch ($frequency) {
        case 'vit-go' :
            $duckStrateryPattern->setDuck(new Duck(new FlyNoWay(), new MuteQuack()));
            break;
        case 'vit-thuong':
            $duckStrateryPattern->setDuck(new Duck(new FlyWithWings(), new Quack()));
            break;
        case 'vit-caosu':
            $duckStrateryPattern->setDuck(new Duck(new FlyNoWay(), new Squeak()));
            break;
        default:
            break;
    }

    $duckStrateryPattern->display();
}
?>

<hr>

<form method="post" name="isset($_POST['frequency_form'])">
    <label for="">
        Chọn vịt:
    </label>
    <input type="submit" value="vit-go" name="frequency_form">
    <input type="submit" value="vit-thuong" name="frequency_form">
    <input type="submit" value="vit-caosu" name="frequency_form"">
</form>
