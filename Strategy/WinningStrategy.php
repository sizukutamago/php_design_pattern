<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/08/25
 * Time: 21:08
 */

namespace Strategy;


class WinningStrategy implements StrategyInterface
{
    /**
     * @var bool
     */
    private $isWon = false;

    /**
     * @var Hand
     */
    private $prevHand;

    /**
     * @return Hand
     */
    public function nextHand(): Hand
    {
        if (!$this->isWon) {
            $this->prevHand = Hand::getHand(rand(0, 2));
        }
        return $this->prevHand;
    }

    /**
     * @param bool $isWin
     */
    public function study(bool $isWin): void
    {
        $this->isWon = $isWin;
    }
}