<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/08/25
 * Time: 21:13
 */

namespace Strategy;


class ProbStrategy implements StrategyInterface
{
    /**
     * @var int
     */
    private $prevHandValue = 0;

    /**
     * @var int
     */
    private $currentHandValue = 0;

    private $history = [
        [1, 1, 1,],
        [1, 1, 1,],
        [1, 1, 1,],
    ];

    public function nextHand(): Hand
    {
        $bet = rand(0, $this->getSum($this->currentHandValue));
        $handValue = 0;

        if ($bet < $this->history[$this->currentHandValue][0]) {
            $handValue = 0;
        } elseif ($bet < $this->history[$this->currentHandValue][0] + $this->history[$this->currentHandValue][1]) {
            $handValue = 1;
        } else {
            $handValue = 2;
        }

        $this->prevHandValue = $this->currentHandValue;
        $this->currentHandValue = $handValue;
        return Hand::getHand($this->currentHandValue);
    }

    private function getSum(int $hv): int
    {
        $sum = 0;
        for ($i = 0; $i < 3; ++$i) {
            $sum += $this->history[$hv][$i];
        }
        return $sum;
    }

    public function study(bool $isWin): void
    {
        if ($isWin) {
            $this->history[$this->prevHandValue][$this->currentHandValue]++;
        } else {
            $this->history[$this->prevHandValue][($this->currentHandValue + 1) % 3]++;
            $this->history[$this->prevHandValue][($this->currentHandValue + 2) % 3]++;
        }
    }
}