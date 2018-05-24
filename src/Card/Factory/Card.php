<?php

namespace IceProductionz\GameOfSnap\Card\Factory;

use IceProductionz\GameOfSnap\Card\Club;
use IceProductionz\GameOfSnap\Card\Collection;
use IceProductionz\GameOfSnap\Card\Diamond;
use IceProductionz\GameOfSnap\Card\Heart;
use IceProductionz\GameOfSnap\Card\Spade;

class Card
{
    /**
     * @return Collection
     */
    public function makeCards()
    {
        $cards = [];

        foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'] as $value) {
            $cards[] = new Club($value);
        }

        foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'] as $value) {
            $cards[] = new Diamond($value);
        }

        foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'] as $value) {
            $cards[] = new Heart($value);
        }

        foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'] as $value) {
            $cards[] = new Spade($value);
        }

        return new Collection(...$cards);
    }
}