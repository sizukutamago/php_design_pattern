<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/08/25
 * Time: 21:24
 */

namespace Strategy;


class Player
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var StrategyInterface
     */
    private $strategy;

    /**
     * @var int
     */
    private $winCount;

    /**
     * @var int
     */
    private $loseCount;

    /**
     * @var int
     */
    private $gameCount;

    public function __construct(string $name, StrategyInterface $strategy)
    {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    public function handNext(): Hand {
        return $this->strategy->nextHand();
    }

    public function win(): void {
        $this->strategy->study(true);
        ++$this->winCount;
        ++$this->gameCount;
    }

    public function lose(): void {
        $this->strategy->study(false);
        ++$this->loseCount;
        ++$this->gameCount;
    }

    public function even(): void {
        ++$this->gameCount;
    }

    public function __toString(): string {
        return '[' . $this->name . ':' . $this->gameCount . ' games, ' . $this->winCount . ' win, ' . $this->loseCount . ' lose]';
    }
}