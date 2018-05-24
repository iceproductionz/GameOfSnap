<?php

namespace IceProductionz\GameOfSnap;

use IceProductionz\GameOfSnap\Card\Collection;
use IceProductionz\GameOfSnap\Card\Factory\Card;
use IceProductionz\GameOfSnap\Output\Output;

class Snap
{
    /**
     * @var Output
     */
    private $output;

    /**
     * Snap constructor.
     *
     * @param Output $output
     */
    public function __construct(Output $output)
    {
        $this->output = $output;
    }

    /**
     *
     */
    public function __invoke()
    {
        $factory = new Card();


        $cards = $factory->makeCards();
        $cards->shuffle();
        $snap = false;

        while ($snap === false) {
            // get card for player
            $player1 = $cards->next();

            // get card for player2
            $player2 = $cards->next();

            $snap = $player1->getValue() === $player2->getValue();

            // Reshuffle card game, at the of deck, no one has managed to snap

            // TO do encapsulate in a output interface
            $this->output->writeln('Player 1: ' . $player1->getValue());
            $this->output->writeln('Player 2: ' . $player2->getValue());

            if ($snap === true) {
                $this->output->writeln('Snap: ' . $player1->getValue());
            }
            $this->reshuffle($cards, $snap);


        }
    }

    public function reshuffle(Collection $cards, bool $snap)
    {
        if ($snap === false && $cards->valid() === false) {
            $cards->rewind();
            $cards->shuffle();

            $this->output->writeln('Reshuffle');
        }
    }
}