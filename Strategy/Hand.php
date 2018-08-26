<?php
/**
 * Created by PhpStorm.
 * User: sizukutamago
 * Date: 2018/08/25
 * Time: 20:42
 */

namespace Strategy;

class Hand
{
    /**
     * @var int
     */
    const HANDVALUE_GUU = 0;

    /**
     * @var int
     */
    const HANDVALUE_CHO = 1;

    /**
     * @var int
     */
    const HANDVALUE_PAA = 2;

    /**
     * @var Hand[]
     */
    private static $hand = [

    ];

    /**
     * @var string[]
     */
    const NAME = [
        'グー', 'チョキ', 'パー',
    ];

    /**
     * @var int
     */
    private $handValue;

    /**
     * Hand constructor.
     * @param int $handValue
     */
    public function __construct(int $handValue)
    {
        $this->handValue = $handValue;
    }

    private static function setHand(): void
    {
        if (!count(self::$hand)) {
            self::$hand = [
                new self(self::HANDVALUE_GUU),
                new self(self::HANDVALUE_CHO),
                new self(self::HANDVALUE_PAA),
            ];
        }
    }

    /**
     * @param int $handValue
     * @return Hand
     */
    public static function getHand(int $handValue): Hand
    {
        self::setHand();
        return self::$hand[$handValue];
    }

    /**
     * @param Hand $hand
     * @return bool
     */
    public function isStrongerThan(Hand $hand): bool
    {
        return $this->fight($hand) === 1;
    }

    /**
     * @param Hand $hand
     * @return bool
     */
    public function isWeakerThan(Hand $hand): bool
    {
        return $this->fight($hand) === -1;
    }

    /**
     * @param Hand $hand
     * @return int
     */
    private function fight(Hand $hand): int
    {
        if ($this === $hand) {
            return 0;
        } elseif (($this->handValue + 1) % 3 === $hand->handValue) {
            return 1;
        } else {
            return -1;
        }
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::NAME[$this->handValue];
    }
}