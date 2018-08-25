<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/08/25
 * Time: 20:36
 */

namespace Strategy;

require_once __DIR__ . '/../vendor/autoload.php';

const GAME_TIME = 100;

$player1 = new Player('Taro', new WinningStrategy());
$player2 = new Player('Hana', new ProbStrategy());

for ($i = 0; $i < GAME_TIME; ++$i) {
    $nextHand1 = $player1->handNext();
    $nextHand2 = $player2->handNext();

    if ($nextHand1->isStrongerThan($nextHand2)) {
        echo 'Winner:' . $player1 . PHP_EOL;
        $player1->win();
        $player2->lose();
    } elseif ($nextHand2->isStrongerThan($nextHand1)) {
        echo 'Winner:' . $player2 . PHP_EOL;
        $player1->lose();
        $player2->win();
    } else {
        echo 'Even...' . PHP_EOL;
        $player1->even();
        $player2->even();
    }
}

echo 'Total result:' . PHP_EOL;
echo $player1 . PHP_EOL;
echo $player2 . PHP_EOL;
