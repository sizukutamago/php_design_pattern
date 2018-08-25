<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/08/25
 * Time: 21:04
 */

namespace Strategy;


interface StrategyInterface
{
    /**
     * @return Hand
     */
    public function nextHand(): Hand;

    /**
     * @param bool $isWin
     */
    public function study(bool $isWin): void;
}