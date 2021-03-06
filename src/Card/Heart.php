<?php

namespace IceProductionz\GameOfSnap\Card;

use IceProductionz\GameOfSnap\Exception\InvalidValue;

/**
 * Class Heart
 *
 * @package IceProductionz\GameOfSnap\Deck
 */
class Heart implements Card
{
    /**
     * @var int|string
     */
    private $value;

    /**
     * Heart constructor.
     *
     * @param int|string $value
     */
    public function __construct($value)
    {
        if (!\in_array($value, [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'], true)) {
            throw new InvalidValue('$value is a not a valid card number');
        }
        $this->value = $value;
    }

    /**
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }
}
